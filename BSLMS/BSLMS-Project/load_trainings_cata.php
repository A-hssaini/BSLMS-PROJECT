<?php 

include ("connect_db.php");

$res=$connect->query('select * from formation where id in (select id from catalogue_formation where id_C="'.$_POST['num'].'")');
$tab = ' <div class="ibox-content">
<div class="table-responsive">
<table id="myTable" class="table table-striped table-bordered table-hover dataTables-example" >
  <thead>
        <tr><th>Description</th><th>Action</th></tr>
  </thead>
  <tbody>';
while($req = $res->fetch())
{
    $tab.='<tr><td>'.$req['Description'].'</td><td> <button type="button" data-id="'.$req["id"].'" class="ladda-button btn btn-warning" data-style="zoom-in" attri="oui">Demander</button></td></tr>';
}

$tab.='</tbody>
  <tfoot> </tfoot> 
    </table>    </div> </div>';
    
?> <script>
$(document).ready(function() {
  $("button").click(function()
{ 
  if($(this).attr("attri")=="oui"){
    var id = $(this).data("id");
    swal({
      title: "Vous êtes sûr?",
      text: "Vous voulez vraiment participer  à cet événement!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor:"#1ab394",
      cancelButtonColor:"#DD6B55",
      confirmButtonText: "Valider!",
      cancelButtonText: "Annuler!",
      closeOnConfirm: false,
      closeOnCancel: false },
  function (isConfirm) {
      if (isConfirm) {
         
          var num=2;
         $("#spin").css("display","block");
       $.ajax({
          url:"insert_request.php",
          type:"POST",
          data:{id:id,num:num},
      success:function(dest)
       {
          var jq_json_obj = $.parseJSON(dest);
          $("#svgpic").fullCalendar("refetchEvents");
          if(typeof jq_json_obj == "object"){ //Test if variable is a [JSON] object
          var jq_obj = eval (jq_json_obj); 

          //Convert back to an array
           var jq_array = [];
          for(var elem in jq_obj)
                  jq_array.push(jq_obj[elem]);
          }

         if(jq_array[1]==1)
              swal("Réservé!",jq_array[0],"success");  
          else
              swal("Alert!",jq_array[0],"error");
          $("#spin").css("display","none");
      }

        })
      } else {
          swal("Annulé", "Vous avez annulé la demande :)", "error");
      }
    });
  }
});

Ladda.bind(".ladda-button",{ timeout: 2000 });

Ladda.bind( ".progress-demo .ladda-button",{
  callback: function( instance ){
      var progress = 0;
      var interval = setInterval( function(){
          progress = Math.min( progress + Math.random() * 0.1, 1 );
          instance.setProgress( progress );

          if( progress === 1 ){
              instance.stop();
              clearInterval( interval );
          }
      }, 200 );
  }
});


var l = $( ".ladda-button-demo" ).ladda();
l.click(function(){
  // Start loading
  l.ladda( "start" );

  // Timeout example
  // Do something in backend and then stop ladda
  setTimeout(function(){
      l.ladda("stop");
  },12000)


});

});

</script>
<?php
echo $tab;

?>