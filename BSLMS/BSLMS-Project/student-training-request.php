<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student | training request</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    
    <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tabs.css">
   
</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">HSSAINI ABDESSAMAD</span>
                            </a>
                    
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="student-dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span></span></a>
    
                    </li>
                    
                    <li>
                        <a href="student-calendar.html"><i class="fa fa-calendar"></i> <span class="nav-label">Mon agenda</span>  <span class="float-right label label-primary">SPECIAL</span></a>
                      
                    </li>
                    <li>
                        <a href="student-training-request.php"><i class="fa fa-bookmark"></i> <span class="nav-label">Demande de formation</span></a>
                    </li>
                   
                    <li>
                        <a href="student-playlist.html"><i class="fa fa-tv"></i> <span class="nav-label">My playlists</span></a>
    
                    </li>
                    <li>
                        <a href="student-salle.html"><i class="fa fa-book"></i><span class="nav-label">Mes salles</span></a>
    
                    </li>
    
                    <li>
                        <a href="student-mooc.html"><i class="fa fa-graduation-cap"></i> <span class="nav-label">MOOC</span></a>
            </li>
                </ul>
    
            </div>
        </nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Bienvenu Mr Leet à BS-Learning vue Apprenant ..</span>
            </li>
            <li> 
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="text-muted text-xs block">Apprenant<b class="caret"></b></span>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
        
                    <li><a class="dropdown-item" href="student-dashboard.php">Apprenant</a></li>
                    <li><a class="dropdown-item" href="admin.php">Administrateur</a></li>
                    <li><a class="dropdown-item" href="manager-dashboard.php">Manager</a></li>
                    <li><a class="dropdown-item" href="RF-Dashboard.php">Responsable de formation</a></li>
                    <li class="dropdown-divider"></li>
                </ul>
            </a></li>
        
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html" class="dropdown-item">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="float-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="profile.html" class="dropdown-item">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="float-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="grid_options.html" class="dropdown-item">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="float-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html" class="dropdown-item">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>


            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
       <h2>Demander une formation</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Extra pages
            </li>
        </ol>
    </div>
</div>
<div id="spin" class="sk-spinner sk-spinner-double-bounce" style="display:none;">
                                    <div class="sk-double-bounce1"></div>
                                    <div class="sk-double-bounce2"></div>
                                </div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
       
        <div class="col-lg-9">
            <div class="ibox">
                <div id="tabs">
                     <!-- <h1 style="text-align:justify;">Demander une Formation </h1><br>-->
                        <ul>
                            <li onclick="selView(1, this)" style="border-bottom: 1px solid ;" class='external-event navy-bg'><a href="#">Consulter les parcours planifiés</a></li>      
                            <li onclick="selView(2, this)" style="border-bottom: 1px solid ;" class="bg-primary"><a href="#">Recommandation pour votre poste</a></li> 
                            <li onclick="selView(3, this)" style="border-bottom: 1px solid ;" class="bg-primary"><a href="#"> Demander du catalogue</a></li>             
                       </ul>
                    </div>
                    <div id="tabcontent" style="background-color:white;">
    
                        <!-- Affichage agenda -->
                        <div id="svgpic" class="tabpanel" style="display:inline"> 
                             <div style="background-color:white;">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <!-- Affichage agenda -->
                    
                
                        <!-- Recommendation & ML -->
                        <div id="source" class="tabpanel" style="display:none"> 
                         
                         Recommandations et machine learning...          
                        </div>
                        <!-- Recommendation & ML -->
                    
                    
                        <!-- Catalogue -->
                        <div id="tabcatalogue" class="container" class="tabpanel" style="display:none;"> 
                          <div class="row">
                              <?php 
                                        $connect = new PDO('mysql:host=localhost;dbname=db-internship', 'root', '');
                                        $req=$connect->query("select * from catalogue");
                                       while($res=$req->fetch()){
                                        echo '<div class="col-sm">';
                                        echo '<div class="card" style="width: 13rem;height:16rem;">
                                       <img class="card-img-top" src="img/gallery/coding.jpg" alt="Card image cap" style="width: 200px;
                                height:150px;margin-bottom: 5px;margin-left:2px;margin-right:2px;">
                                               <div class="card-body">';
                                        echo '<p class = "card-title";display:block;>'.$res["Description"].'</p>';
                                        echo ' 
                                        <p style="text-align:center;margin-bottom: 5px;"> <button type="button"  data-id="'.$res["id_C"].'" class="btn btn-w-m btn-primary btn-rounded" opt="myBtn">Plus détails <i class="fa fa-exclamation"></i></button>
                                        </p>
                                        <div id="myModal" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close">&times;</span>
                                          </div>
                                          <div class="modal-body">
                                          </div>
                                          <div class="modal-footer">
                                          </div>
                                        </div>
                                      
                                      </div>
                                      </div>
                                      </div>
                                    </div> ';
                                       }

                                    ?>

                                </div>
                            </div>
                        
                        <!-- Catalogue -->
                    
                    </div>
                    <script>function selInit() {
                        var tabs = document.getElementById("tabs");
                        var litag = tabs.querySelector("li");   // first li
                        litag.style.borderBottom = "1px solid #D0D3D4";
                        litag.style.background = "#D0D3D4";
                    }
                    
                    function selView(n, litag) {
                        var svgview = "none";
                        var codeview = "none";
                        var catalogueview = "none";
                        switch(n) {
                            case 1:
                                svgview = "inline";
                                break;
                            case 2:
                                codeview = "inline";
                                break;
                            case 3:
                                catalogueview = "inline";
                                break;
                            // add how many cases you need
                            default:
                                alert("???");
                        }
                        document.getElementById("calendar").style.display = svgview;
                        document.getElementById("source").style.display = codeview;
                        document.getElementById("tabcatalogue").style.display = catalogueview;
                    
                        var tabs = document.getElementById("tabs");
                        var ca = Array.prototype.slice.call(tabs.querySelectorAll("li"));
                        ca.map(function(elem) {
                            elem.style.background="#D0D3D4";
                            elem.style.borderBottom="1px solid #273c75"
                        });
                        litag.style.borderBottom = "1px solid #F7D358";
                        litag.style.background = "#D0D3D4";
                    }
                    
                    
                    window.onload=function() {
                        selInit();
                    }
                    </script>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="float-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2018
    </div>
</div>

</div>
</div>

<!-- Mainly scripts -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->

    <!-- Tinycon -->
    <script src="js/plugins/tinycon/tinycon.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>


<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI  -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar-->
<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="js/plugins/lang-all.js"></script>
 <script src="js/plugins/ladda/spin.min.js"></script>
    <script src="js/plugins/ladda/ladda.min.js"></script>
    <script src="js/plugins/ladda/ladda.jquery.min.js"></script>


<script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn")[0];
var btn1 = document.getElementsByClassName("myBtn")[1];


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
$(document).ready(function() {

   /* var load ='<div id="spin" class="sk-spinner sk-spinner-double-bounce">'+
                                    '<div class="sk-double-bounce1"></div>'+
                                    '<div class="sk-double-bounce2"></div>'+
                                '</div>';
        $('#tabs').append(load);
*/



$('button').click(function()
{ 
if($(this).attr("opt")=="myBtn"){
 var num = $(this).data('id');
 //$('#myModal').css('display','block');
 //$('#myModal').modal('show'); 
//Ajax request
  $.ajax({
 url:'load_trainings_cata.php',
 type:'POST',
 data:{num:num},
 success:function(tab)
 {  
 // Add response in Modal body

  $('.modal-body').html(tab);
    
 // Display Modal
 $('#myModal').css('display','block'); 
 
 }
});
}
else alert("error");
 
});

$('.i-checks').iCheck({
    checkboxClass: 'icheckbox_square-green',
    radioClass: 'iradio_square-green'
});

/* initialize the external events
-----------------------------------------------------------------*/


$('#external-events div.external-event').each(function() {

// store data so the calendar knows to render an event upon drop
$(this).data('event', {
    title: $.trim($(this).text()), // use the element's text as the event title
    stick: true // maintain when user navigates (see docs on the renderEvent method)
});

// make the event draggable using jQuery UI
$(this).draggable({
    zIndex: 1111999,
    revert: true,      // will cause the event to go back to its
    revertDuration: 0  //  original position after the drag
});

});


/* initialize the calendar
-----------------------------------------------------------------*/
var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();

$('#calendar').fullCalendar({
header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
},
lang:'fr',
editable: true,
selectable:true,
selectHelper:true,
droppable: true, // this allows things to be dropped onto the calendar
drop: function() {
    // is the "remove after drop" checkbox checked?
    if ($('#drop-remove').is(':checked')) {
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
    }
},
events: 'load_events.php',
eventClick: function(event)
    {
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
                            var start = moment(event.start).format("YYYY-MM-DD");
                            var end = moment(event.end).format("YYYY-MM-DD");
                            var title = event.title;
                            var id=event.id;
                            var num=1;
                           $('#spin').css('display','block');
                         $.ajax({
                            url:"insert_request.php",
                            type:"POST",
                            data:{title:title, start:start, end:end,id:id,num:num},
                        success:function(dest)
                         {
                            var jq_json_obj = $.parseJSON(dest);
                            $('#svgpic').fullCalendar('refetchEvents');
                            if(typeof jq_json_obj == 'object'){ //Test if variable is a [JSON] object
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
                            $('#spin').css('display','none');
                        }
      
                          })
                        } else {
                            swal("Annulé", "Vous avez annulé la demande :)", "error");
                        }
                      });
                      }
                    });
                 

/*,

events: [
    {
        title: 'All Day Event',
        start: new Date(y, m, 1)
    },
    {
        title: 'Long Event',
        start: new Date(y, m, d-5),
        end: new Date(y, m, d-2)
    },
    {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
    },
    {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
    },
    {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
    },
    {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
    },
    {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
    },
    {
        title: 'Click for Google',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://google.com/'
    }
]*/



});
</script>
</body>

</html>