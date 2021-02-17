$(document).ready(function(){

    $('.myBtn').click(function()
    { 
     var num = $(this).data('id');
     $('#myModal').css('display','block');
     //$('#myModal').modal('show'); 

    //Ajax request
  /*  $.ajax({
     url:'load_trainings_cata.php',
     type:'POST',
     data:{num:num},
     success:function(response)
     {  
     // Add response in Modal body
      $('.modal-body').html(response);
        
     // Display Modal
     $('#myModal').modal('show'); 
     }
     
    });*/
}); 
}); 
