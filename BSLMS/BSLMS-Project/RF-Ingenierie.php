<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BS-Learning</title>

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
                <li>
                    <a href="RF-Dashboard.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="RF-Agenda.html"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li class="active">
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
                    <span class="m-r-sm text-muted welcome-message">Bienvenue Mr Leet à BS-Learning vue RF ..</span>
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
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Formulaire de compagne</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <p>
                                Merci de saisir les informations nécessaires
                            </p>

                            <form id="form" action="saisie_compagne.php" method="post" class="wizard-big">
                                <h1>Identification</h1>
                                <fieldset>
                                  <div class="row">
                                  <div class="col-lg-4">
                                    <fieldset>
                                      <label>
                                          Nom  *
                                      </label>
                                      <div class="col-md-4">
                                          <input  name="Nom_C"></input>
                                      </div>
                                      <br>
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-10">
                                    <fieldset>
                                      <label>
                                          Description  *
                                      </label>
                                      <div class="col-md-4">
                                          <textarea class="form-control" name="Desc_C" rows="3"></textarea>
                                      </div>
                                      <br>
                                    </fieldset>
                                  </div>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group" id="data_1">
                                                <label>Date Début *</label>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="form-control" name="date_debut" value="today">
                                                </div>
                                            </div>
                                            <div class="form-group" id="data_3">
                                                <label>Année des formations *</label>
                                                <select  name="année">
                                                  <?php
                                                    $i = 0;
                                                    while($i < 6)
                                                    {
                                                      $year = date("Y") + $i;
                                                      echo('<option value="'.$year.'">'.$year.'</option>');
                                                      $i++;
                                                    }
                                                   ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                          <div class="form-group" id="data_2">
                                              <label>Date fin *</label>
                                              <div class="input-group date">
                                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                  <input type="text" class="form-control" name="date_fin" value="today">
                                              </div>
                                          </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Population</h1>
                                <fieldset>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <fieldset>
                                          <legend>
                                              Niveau de validation *
                                          </legend>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio4" value="Non Manager" name="pop">
                                              <label class="form-check-label" for="inlineRadio4"> Non Manager </label>
                                          </div>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio5" value="Manager" name="pop">
                                              <label class="form-check-label" for="inlineRadio5"> Manager </label>
                                          </div>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio6" value="Tous" name="pop" checked="">
                                              <label class="form-check-label" for="inlineRadio6"> Tous les collaborateurs </label>
                                          </div>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <fieldset>
                                          <legend>
                                              Echantillion de l'Ingenierie de formation *
                                          </legend>
                                          <input type="number" name="Echantillion" id="ionrange_2"/>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <fieldset>
                                          <legend>
                                              Niveau de validation *
                                          </legend>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio1" value="Manager" name="validation" checked="">
                                              <label class="form-check-label" for="inlineRadio1"> Manager </label>
                                          </div>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio2" value="RF" name="validation">
                                              <label class="form-check-label" for="inlineRadio2"> Responsable de formation </label>
                                          </div>
                                          <div class="form-check abc-radio abc-radio-info form-check-inline">
                                              <input class="form-check-input" type="radio" id="inlineRadio3" value="Both" name="validation">
                                              <label class="form-check-label" for="inlineRadio3"> Les deux </label>
                                          </div>
                                        </fieldset>
                                      </div>
                                    </div>
                                </fieldset>

                                <h1>Autres informations</h1>
                                <fieldset>
                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <fieldset>
                                        <legend>
                                            Budget *
                                        </legend>
                                        <div class="col-md-4">
                                            <input type="number" name="budget"></input>
                                        </div>
                                      </fieldset>
                                    </div>
                                      <div class="col-md-4">
                                        <fieldset>
                                          <legend>
                                              Currency *
                                          </legend>
                                          <div class="col-md-4">
                                            <select name="currency">
                                              <?php
                                              include ("connect_db.php");
                                              $result = $connect->query('select *from currency order by iso ASC');
                                              while($row = $result->fetch())
                                                echo('<option value="'.$row['iso'].'">'.$row['iso'].'</option>');
                                              ?>
                                            </select>
                                          </div>
                                        </fieldset>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-8">
                                        <fieldset>
                                            <legend>
                                                Catalogues *
                                            </legend>
                                            <div class="form-check abc-checkbox form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="C1" name="C1" checked="">
                                                <label class="form-check-label" for="inlineCheckbox1"> Catalogue 1 </label>
                                            </div>
                                            <div class="form-check abc-checkbox form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="C2" value="C2">
                                                <label class="form-check-label" for="inlineCheckbox2"> Catalogue 2 </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-8">
                                      <fieldset>
                                        <legend>
                                            Envoi d'email *
                                        </legend>
                                        <div class="form-check abc-radio abc-radio-info form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio1" value="M" name="email" checked="">
                                            <label class="form-check-label" for="inlineRadio1"> Maintenant </label>
                                        </div>
                                        <div class="form-check abc-radio abc-radio-info form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio2" value="P" name="email">
                                            <label class="form-check-label" for="inlineRadio2"> Plus Tard </label>
                                        </div>
                                      </fieldset>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-8">
                                      <fieldset>
                                        <legend>
                                            Axes stratégiques de la boîte *
                                        </legend>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="Axes" rows="3"></textarea>
                                        </div>
                                      </fieldset>
                                    </div>
                                  </div>
                                </fieldset>

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
