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

function filtro(idescola){
  console.log()
  // let url = 'test.php';
  
  //let data = idescola

    // $.get(url,data, (response) => {       
        
    //     // window.open(response, '_blank');
    // });
}



 
