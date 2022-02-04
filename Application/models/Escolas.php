<?php

namespace Application\models;

use Application\core\Database;
use PDO;
header("Content-Type: text/html;  charset=ISO-8859-1", true);
class Escolas
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos as escolas armazenadas na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery("select
    distinct ed18_i_codigo,
    ed18_c_nome
  from
    alunocurso
  inner join escola on
    escola.ed18_i_codigo = alunocurso.ed56_i_escola
  inner join aluno on
    aluno.ed47_i_codigo = alunocurso.ed56_i_aluno
  inner join calendario on
    calendario.ed52_i_codigo = alunocurso.ed56_i_calendario
  inner join base on
    base.ed31_i_codigo = alunocurso.ed56_i_base
  inner join cursoedu on
    cursoedu.ed29_i_codigo = base.ed31_i_curso
  left join alunopossib on
    alunopossib.ed79_i_alunocurso = alunocurso.ed56_i_codigo
  left join serie on
    serie.ed11_i_codigo = alunopossib.ed79_i_serie
  left join turno on
    turno.ed15_i_codigo = alunopossib.ed79_i_turno
  order by
    ed18_c_nome");
    return $result->fetchAll(PDO::FETCH_ASSOC);
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
    $result = $conn->executeQuery('SELECT * FROM alunos WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
