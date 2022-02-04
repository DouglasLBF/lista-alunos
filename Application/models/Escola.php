<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Alunos
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
    $result = $conn->executeQuery('SELECT * FROM escolas');
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
