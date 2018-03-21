<?php
  session_start();
  if(!isset($_SESSION['zalogowano']))
  {
    header('Location: index.php');
    exit();
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
    <link href="css/main.css" rel="stylesheet">
    <!-- po dodaniu style -->
    <link href="css/pododaniu.css" rel="stylesheet">
</head>

<body>
  <div class="container">
  <div class="row justify-content-md-center">

    <div class="col-md-6">

      <div class="row">
        <div class="col">

        </div>
        <div class="col">
          <img class="logo" src="img/logo.png">
        </div>
        <div class="col">

        </div>
      </div>
      

      <div class="rejestrDodany">
        <p class="h4">Rejestr został pomyślnie dodany do bazy danych.</p><a href="main.php"><button class="btn btn-outline-default waves-effect przyciskRejestrDodany">Wróc do strony głównej <i class="fa fa-paper-plane-o ml-1"></i></button></a>
      </div>
    </div>

  </div>
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
