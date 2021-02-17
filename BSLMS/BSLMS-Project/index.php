

<?php
  //Commencer la session
  session_start();
 /* if(!isset($_SESSION['mdp_errone'])){
    $_SESSION['mdp_errone'] = 1;
    echo "<script> alert('trrrrrr'); </script>";
 }
 else
     echo "<script> alert('trrrrrr'); </script>";*/
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="index.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" name="log" class="btn btn-primary block full-width m-b" >Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

       <?php
       if(isset($_POST['log'])){ 
        include ("connect_db.php");
        $result = $connect->query('select * from users');
        while($row = $result->fetch())
        {
          if($row["email"] == $_POST["email"])
          {
            $result1 = $connect->query("select * from password");
            while($row1 = $result1->fetch())
        {
                if($row1['id_passwd'] == $_POST['password'] && $row['matricule'] == $row1['id_user'])
                {
                      $_SESSION['id_user'] = $row['matricule'];
                      header('Location: student-dashboard.php');
                      exit;
                }
        }
          }
        }
        unset($_POST['log']);
        echo'
        <script>
        swal("Echec", "Adresse ou mot de passe est incorrect :)", "error");
      </script>';
    }
   
     
     ?>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>