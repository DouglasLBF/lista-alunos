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
   onChange:function(value){
     $(this).change();
   }
  }); 
}); 

function filtro(idescola){
  let url = "/Application/controllers/Alunos";
    let data = {funcao:"buscarEscola",dados:idescola} 

    $.get(url,data, (response) => {       
          
        // window.open(response, '_blank');
    });
}



 
