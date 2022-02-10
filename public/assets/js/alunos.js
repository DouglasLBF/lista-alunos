$(document).ready(function() {
  $anoatual = new Date().getFullYear();
  
  $('#tabela').DataTable();   
 
  $('.yearpicker').yearpicker({
  // Ano fixo
   year:2022,
  // Primeiro ano a ser mostrado 
   startYear:2019,
  // Ultimo ano a ser mostrado 
   endYear:$anoatual,   
  
  }); 
}); 

// function buscarTurma(idescola,ano){
//   let url = "/Application/controllers/Alunos/alunos_turma/{idescola}/{ano}";
//     let data = {funcao:"buscarTurma",dados:[idescola,ano]} 

//     $.get(url,data, (response) => {       
          
//         // window.open(response, '_blank');
//     });
// }

function buscarTurma(idescola,ano){
  $.ajax({
    type: "POST",
    url: "/Application/controllers/Alunos"        
  }).done(function(response){
    alert(response);
  });
}



 
