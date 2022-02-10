<?php 

namespace Application\models;
use Application\core\Database;
use PDO;
header("Content-Type: text/html;  charset=ISO-8859-1", true);

class Turmas
{
    public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery(
    "SELECT ed57_i_codigo,
            ed57_c_descr
        FROM   turma
        INNER JOIN escola
                ON escola.ed18_i_codigo = turma.ed57_i_escola
        INNER JOIN turno
                ON turno.ed15_i_codigo = turma.ed57_i_turno
        INNER JOIN sala
                ON sala.ed16_i_codigo = turma.ed57_i_sala
        INNER JOIN calendario
                ON calendario.ed52_i_codigo = turma.ed57_i_calendario
        INNER JOIN base
                ON base.ed31_i_codigo = turma.ed57_i_base
        INNER JOIN regimemat
                ON regimemat.ed218_i_codigo = base.ed31_i_regimemat
        INNER JOIN bairro
                ON bairro.j13_codi = escola.ed18_i_bairro
        INNER JOIN ruas
                ON ruas.j14_codigo = escola.ed18_i_rua
        INNER JOIN db_depart
                ON db_depart.coddepto = escola.ed18_i_codigo
        INNER JOIN tiposala
                ON tiposala.ed14_i_codigo = sala.ed16_i_tiposala
        INNER JOIN duracaocal
                ON duracaocal.ed55_i_codigo = calendario.ed52_i_duracaocal
        INNER JOIN cursoedu
                ON cursoedu.ed29_i_codigo = base.ed31_i_curso
        INNER JOIN ensino
                ON ensino.ed10_i_codigo = cursoedu.ed29_i_ensino
        INNER JOIN tipoensino
                ON tipoensino.ed36_i_codigo = ensino.ed10_i_tipoensino
        LEFT JOIN censocursoprofiss
                ON censocursoprofiss.ed247_i_codigo =
                turma.ed57_i_censocursoprofiss
        INNER JOIN turmacensoetapa
                ON turmacensoetapa.ed132_turma = turma.ed57_i_codigo
        WHERE  ed57_i_escola = 42
        AND ed132_ano = 2022
        ORDER  BY ed57_c_descr "    
    );
    return $result->fetchAll(PDO::FETCH_ASSOC);
  } 


  public static function findById(int $id, int $ano)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
    "SELECT ed57_i_codigo,
            ed57_c_descr
        FROM   turma
        INNER JOIN escola
                ON escola.ed18_i_codigo = turma.ed57_i_escola
        INNER JOIN turno
                ON turno.ed15_i_codigo = turma.ed57_i_turno
        INNER JOIN sala
                ON sala.ed16_i_codigo = turma.ed57_i_sala
        INNER JOIN calendario
                ON calendario.ed52_i_codigo = turma.ed57_i_calendario
        INNER JOIN base
                ON base.ed31_i_codigo = turma.ed57_i_base
        INNER JOIN regimemat
                ON regimemat.ed218_i_codigo = base.ed31_i_regimemat
        INNER JOIN bairro
                ON bairro.j13_codi = escola.ed18_i_bairro
        INNER JOIN ruas
                ON ruas.j14_codigo = escola.ed18_i_rua
        INNER JOIN db_depart
                ON db_depart.coddepto = escola.ed18_i_codigo
        INNER JOIN tiposala
                ON tiposala.ed14_i_codigo = sala.ed16_i_tiposala
        INNER JOIN duracaocal
                ON duracaocal.ed55_i_codigo = calendario.ed52_i_duracaocal
        INNER JOIN cursoedu
                ON cursoedu.ed29_i_codigo = base.ed31_i_curso
        INNER JOIN ensino
                ON ensino.ed10_i_codigo = cursoedu.ed29_i_ensino
        INNER JOIN tipoensino
                ON tipoensino.ed36_i_codigo = ensino.ed10_i_tipoensino
        LEFT JOIN censocursoprofiss
                ON censocursoprofiss.ed247_i_codigo =
                turma.ed57_i_censocursoprofiss
        INNER JOIN turmacensoetapa
                ON turmacensoetapa.ed132_turma = turma.ed57_i_codigo
        WHERE  ed57_i_escola = :ID 
        AND ed132_ano = :ANO
        ORDER  BY ed57_c_descr",
        array (':ID' => $id,
        ':ANO' => $ano
        ));   

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}


