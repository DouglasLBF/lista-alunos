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
    $result = $conn->executeQuery("SELECT DISTINCT ed18_i_codigo,
    ed18_c_nome
FROM   alunocurso
INNER JOIN escola
   ON escola.ed18_i_codigo = alunocurso.ed56_i_escola
INNER JOIN aluno
   ON aluno.ed47_i_codigo = alunocurso.ed56_i_aluno
INNER JOIN calendario
   ON calendario.ed52_i_codigo = alunocurso.ed56_i_calendario
INNER JOIN base
   ON base.ed31_i_codigo = alunocurso.ed56_i_base
INNER JOIN cursoedu
   ON cursoedu.ed29_i_codigo = base.ed31_i_curso
LEFT JOIN alunopossib
  ON alunopossib.ed79_i_alunocurso = alunocurso.ed56_i_codigo
LEFT JOIN serie
  ON serie.ed11_i_codigo = alunopossib.ed79_i_serie
LEFT JOIN turno
  ON turno.ed15_i_codigo = alunopossib.ed79_i_turno
ORDER  BY ed18_c_nome ");
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
