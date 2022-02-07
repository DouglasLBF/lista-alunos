<?php

use Application\core\Controller;

class Alunos extends Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  { 
    $data=[]; 
    
    $Alunos = $this->model('Alunos'); // é retornado o model Alunos()
    $Escolas = $this->model('Escolas'); // é retornado o model Escolas()
    $Turmas = $this->model('Turmas');// é retornado o model Turmas()

    $data_tur = $Turmas::findAll();
    $data_alu = $Alunos::findAll();
    $data_esc = $Escolas::findAll();    

    $data = [$data_alu,$data_esc,$data_tur];    
   
    $this->view('alunos/index', ['dados' => $data ]);
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Alunos');
      $data = $Users::findById($id);
      $this->view('alunos/show', ['alunos' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


}
