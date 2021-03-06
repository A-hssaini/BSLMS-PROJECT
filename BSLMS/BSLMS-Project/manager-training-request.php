<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manager | training request</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tabs.css">
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

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
                            <!--<ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>-->
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                    <a href="manager-dashboard.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span></span></a>

                </li>
                
                <li>
                    <a href="manager-calendar.html"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda équipe</span>  <span class="float-right label label-primary">SPECIAL</span></a>
                  
                </li>
                <li>
                    <a href="manager-training-request.html"><i class="fa fa-bookmark"></i> <span class="nav-label">Demande de formation</span></a>
                </li>
               
                <li>
                    <a href="manager-traitement.html"><i class="fa fa-cog"></i> <span class="nav-label">Traitement demande</span></a>

                </li>
                <li>
                    <a href="manager-parcours.html"><i class="fa fa-bullseye"></i><span class="nav-label">Gestion parcours</span></a>

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
                    <span class="m-r-sm text-muted welcome-message">Bonjour Mr Leet à BS-Learning vue Manager ..</span>
                </li>
                <li> 
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="text-muted text-xs block">Manager<b class="caret"></b></span>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
            
                        <li><a class="dropdown-item" href="student-Dashboard.php">Apprenant</a></li>
                        <li><a class="dropdown-item" href="Admin-Dashboard.php">Administrateur</a></li>
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
        <h2>Demande de formation</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Extra pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Calendar</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Draggable Events</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id='external-events'>
                        <p>Drag a event and drop into callendar.</p>
                        <div class='external-event navy-bg'>Go to shop and buy some products.</div>
                        <div class='external-event navy-bg'>Check the new CI from Corporation.</div>
                        <div class='external-event navy-bg'>Send documents to John.</div>
                        <div class='external-event navy-bg'>Phone to Sandra.</div>
                        <div class='external-event navy-bg'>Chat with Michael.</div>
                        <p class="m-t">
                            <input type='checkbox' id='drop-remove' class="i-checks" checked /> <label for='drop-remove'>remove after drop</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-content">
                    <h3>Alerte </h3>Pour que vous puissiez participer à un événement planifié , veuillez seulement faire 
                        une simple clique sur l'événement qu'il vous intéresse.
                    <p>
                        <a href="http://arshaw.com/fullcalendar/" target="_blank">FullCalendar documentation</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="ibox ">
                <div id="tabs">
                        <ul>
                            <li onclick="selView(1, this)" style="border-bottom: 1px solid ;" class='external-event navy-bg'><a href="#">Consulter les parcours planifiés</a></li>      
                            <li onclick="selView(2, this)" style="border-bottom: 1px solid ;" class="bg-primary"><a href="#">Recommandation pour votre poste</a></li> 
                            <li onclick="selView(3, this)" style="border-bottom: 1px solid ;" class="bg-primary"><a href="#"> Demander du catalogue</a></li>             
                       </ul>
                    </div>
                    <div id="tabcontent">
    
                        <!-- Affichage agenda -->
                        <div id="svgpic" class="tabpanel" style="display:inline"> 
                            <div class="ibox-content">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <!-- Affichage agenda -->
                        
                    
                        <!-- Recommendation & ML -->
                        <div id="source" class="tabpanel" style="display:none"> 
                         
                         Recommendations et machine learning
                          
                        </div>
                        <!-- Recommendation & ML -->
                    
                    
                        <!-- Catalogue -->
                        <div id="tabcatalogue" class="tabpanel" style="display:none; text-align: justify;"> Catalogue de formation 
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="src/img/nature.jpg" alt="Card image cap">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">More details...</a>
                                </div>
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
                        selInit()
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
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI  -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar-->
<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="js/plugins/lang-all.js"></script>
<script>

$(document).ready(function() {

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
    if(confirm('Vous voulez participer a cet event ?')){

      var start = moment(event.start).format("YYYY-MM-DD");
      var end = moment(event.end).format("YYYY-MM-DD");
      var title = event.title;
      var id=event.id;
      $.ajax({
       url:"insert_request.php",
       type:"POST",
       data:{title:title, start:start, end:end,id:id},
       success:function()
       {
        $('#calendar').fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
         })
    }

        else{alert('Annulé');}
      }

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


});
</script>
</body>

</html>