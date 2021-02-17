<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RF | Ingenierie-Success</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">

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
                            <span class="block m-t-xs font-bold">RACHIDI ACHRAF</span>
                        </a>
                       
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="RF-Dashboard.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="RF-Agenda.html"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Ingénierie formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="RF-Compagne.php">Compagne de formation</a></li>
                        <li><a href="RF-Traitement.php">Traitement de demande</a></li>
                        <li><a href="RF-Consolidation.php">Consolidation</a></li>
                        <li><a href="RF-AppelOffre.php">Appel d'offre</a></li>
                        <li><a href="RF-Proposition.php">Proposition Fournisseurs</a></li>
                        <li><a href="RF-Planification.php">Planification prévisionelle</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Ressources de formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">E-learning</a></li>
                        <li><a href="#">Tests</a></li>
                        <li><a href="RF-Parcours.html">Parcours</a></li>
                        <li><a href="RF-Catalogues.html">Catalogues</a></li>
                        <li><a href="RF-Fournisseurs.html">Fournisseurs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Post-Formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Présence</a></li>
                        <li><a href="#">Evaluation à chaud</a></li>
                        <li><a href="#">Evaluation à froid</a></li>
                    </ul>
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
                <span class="m-r-sm text-muted welcome-message">Bonjour Mr Leet à BS-Learning vue RF ..</span>
           </li>
           <li> 
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <span class="text-muted text-xs block">Responsable de formation<b class="caret"></b></span>
               <ul class="dropdown-menu animated fadeInRight m-t-xs">
       
                   <li><a class="dropdown-item" href="student-dashboard.php">Apprenant</a></li>
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
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="col-lg-6">
                  <div class="alert alert-success">
                      <h3>La demande de lancement de compagne a été fait avec success.
                      Temps restant pour le début de compagne :
                      <?php
                      
                          //Construire la date adaptable avec php
                          $date = substr($_SESSION['date_debut'], 6, 4)."-".substr($_SESSION['date_debut'], 0, 2)."-".substr($_SESSION['date_debut'], 3, 2);
                          $today = date("Y-m-d");

                          $date_verifie = date_create($date);
                          $today_verifie = date_create($today);
                          $diff = date_diff($today_verifie, $date_verifie);
                          echo $diff->format("%a jours");

                       ?>
                     </h3>
                  </div>
                  <div class="alert alert-warning">
                      <h3>Temps Restant pour la fin de la compagne :
                        <?php
                            //Construire la date adaptable avec php
                            $date = substr($_SESSION['date_fin'], 6, 4)."-".substr($_SESSION['date_fin'], 0, 2)."-".substr($_SESSION['date_fin'], 3, 2);
                            $today = date("Y-m-d");

                            $date_verifie = date_create($date);
                            $today_verifie = date_create($today);
                            $diff = date_diff($today_verifie, $date_verifie);
                            echo $diff->format("%a jours");

                         ?>
                      </h3>
                  </div>
                  <div class="ibox ">
                      <div class="ibox-title">
                          <h5>Prolongation de la compagne</h5>
                      </div>
                      <div class="ibox-content text-center">
                        <form action="Ingenierie_prolongement.php" method="post">
                          <h4>Entrez une nouvelle date de fin de compagne</h4>
                          <div class="form-group" id="data_1">
                          <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input type="text" class="form-control" name="date_prolongation" value="today">
                          </div>
                        </div>
                        <button class="btn btn-outline btn-primary  dim" type="submit"><i class="fa fa-check"></i></button>
                      </form>
                      </div>
                  </div>
                </div>

            </div>
        </div>
        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- Input Mask-->
     <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){



            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
                    var mem = $('#data_1 .input-group.date').datepicker({
                        todayBtn: "linked",
                        keyboardNavigation: false,
                        forceParse: false,
                        calendarWeeks: true,
                        autoclose: true
                    });

                    var mem2 = $('#data_2 .input-group.date').datepicker({
                        todayBtn: "linked",
                        keyboardNavigation: false,
                        forceParse: false,
                        calendarWeeks: true,
                        autoclose: true
                    });

                    var mem3 = $('#data_3 .input-group.date').datepicker({
                        todayBtn: "linked",
                        keyboardNavigation: false,
                        forceParse: false,
                        calendarWeeks: true,
                        autoclose: true
                    });

                    $("#ionrange_2").ionRangeSlider({
                        skin: "flat",
                        min: 0,
                        max: 100,
                        type: 'single',
                        step: 1,
                        postfix: "",
                        grid: true
                    });
       });
    </script>

</body>

</html>
