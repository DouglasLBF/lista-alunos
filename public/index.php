<?php header("Content-Type: text/html;  charset=ISO-8859-1", true); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Alunos</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/alunos.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/yearpicker.css"/>
  </head>
  <body>
  <?php
      require '../Application/autoload.php';

      use Application\core\App;
      use Application\core\Controller;
    
      $app = new App();

    ?>    
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/datatables.min.js"></script>    
    <script src="/assets/js/alunos.js"></script>          
    <script src="/assets/js/yearpicker.js"></script>          
    </script>     
  </body>
</html>