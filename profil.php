<?php
  session_start();
  if(!isset($_SESSION['zalogowano']))
{
  header('Location: index.php');
  exit();
  include('connect.php');
  include('zaloguj.php');
}

 ?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nowa ocena</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/profil.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>

<body>

  <?php include('navbar.php'); ?>
<!--Main Navigation-->

  <main>

    <div class="container">
      <div class="row">
        <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
            </div>
            <div class="row user-detail">
                <div class="col-lg-12 col-sm-12 col-12">
                    <img src="img/profil.jpg" class="rounded-circle img-thumbnail">
                    <p class="h5"><?php echo '<font face="Roboto">'."   ".$_SESSION['imie']."  ".$_SESSION['nazwisko']."</font>"; ?></p>
                    <p class="h6"><i class="fa fa-users" aria-hidden="true"></i><?php echo '<font face="Roboto">'."   ".$_SESSION['klasa']."  </font>"; ?></p><!--Kamel zrób sesje i niech czyta klasę tu-->
                    <hr>
                    <a href="#" class="btn btn-danger btn-sm">Zobacz statystyki</a>
                    <a href="#" class="btn btn-info btn-sm">Wyślij wiadomość</a>

                    <hr>
                    <span>Lorem ips consectetur adipisium, eiusmod tempor incididuin reprehendeanim.</span>
                </div>
            </div>
            <div class="row user-social-detail">
                <div class="col-lg-12 col-sm-12 col-12">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
      </div>
    </div>

  </main>


  <!-- footer -->

  <?php include('footer.php'); ?>








  <!--Main Layout-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
