<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Alunos
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery("SELECT a.ed47_i_codigo,
    a.ed47_v_nome,
    m.ed60_c_situacao,
    t.ed57_c_descr,
    e.ed18_c_nome,
    c.ed52_c_descr
    from
    escola.matricula m
    inner join escola.turma t on
    m.ed60_i_turma = t.ed57_i_codigo
    inner join escola.escola e on
    t.ed57_i_escola = e.ed18_i_codigo
    inner join escola.base b on
    b.ed31_i_codigo = t.ed57_i_base
    inner join escola.cursoedu c2 on
    c2.ed29_i_codigo = b.ed31_i_curso
    inner join escola.aluno a on
    m.ed60_i_aluno = a.ed47_i_codigo
    inner join escola.calendario c on
    t.ed57_i_calendario = c.ed52_i_codigo
    where
    c.ed52_i_ano = 2021
    and m.ed60_c_situacao = 'MATRICULADO'
    and e.ed18_i_codigo = 42
    and c2.ed29_i_codigo = 6
    and t.ed57_i_codigo = 3873
    order by
    to_ascii(ed47_v_nome)");
    return $result->fetchAll(PDO::FETCH_ASSOC);
    var_dump('teste');   
  }
  
  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery("SELECT a.ed47_i_codigo,
    a.ed47_v_nome,
    m.ed60_c_situacao,
    t.ed57_c_descr,
    e.ed18_c_nome,
    c.ed52_c_descr
    from
    escola.matricula m
    inner join escola.turma t on
    m.ed60_i_turma = t.ed57_i_codigo
    inner join escola.escola e on
    t.ed57_i_escola = e.ed18_i_codigo
    inner join escola.base b on
    b.ed31_i_codigo = t.ed57_i_base
    inner join escola.cursoedu c2 on
    c2.ed29_i_codigo = b.ed31_i_curso
    inner join escola.aluno a on
    m.ed60_i_aluno = a.ed47_i_codigo
    inner join escola.calendario c on
    t.ed57_i_calendario = c.ed52_i_codigo
    where
    c.ed52_i_ano = 2021
    and m.ed60_c_situacao = 'MATRICULADO'
    and e.ed18_i_codigo = 42
    and c2.ed29_i_codigo = 6
    and t.ed57_i_codigo = 3873
    and a.ed47_i_codigo = :ID LIMIT 1" , array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  
}
