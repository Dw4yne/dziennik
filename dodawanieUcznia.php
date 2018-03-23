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
    <title>Nowy uczeń</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

  <?php include('navbar.php'); ?>

  <main>
    <div class="container odstepMain white ramka z-depth-2">
      <form action="dodaju.php"
            method="post">

          <p class="h3 text-center mb-4">Dodaj ucznia</p>
          <?php
            if(isset($_SESSION['komunikat'])){
              echo $_SESSION['komunikat'];
              unset($_SESSION['komunikat']);
            }
           ?>
          <div class="row">
          <div class="col-md md-form">
              <i class="fa fa-user prefix black-text"></i>
              <input type="text" id="form1" class="form-control" name="imie">
              <label class="col-md" for="form1">Imię</label>
          </div>

          <div class="col-md md-form">

              <input type="text" id="form2" class="form-control" name="nazwisko">
              <label class="col-md" for="form2">Nazwisko</label>
          </div>
        </div>
        <div class="row">
        <div class="col-md md-form">
            <i class="fa fa-key prefix black-text"></i>
            <input type="text" id="login" class="form-control" name="login">
            <label class="col-md" for="login">Login</label>
        </div>

        <div class="col-md md-form">

            <input type="text" id="haslo" class="form-control" name="haslo">
            <label class="col-md" for="haslo">Haslo</label>
        </div>
      </div>
          <div class="md-form">
              <i class="fa fa-tag prefix black-text"></i>
              <input type="text" id="form3" class="form-control" name="klasa">
              <label for="form3">Klasa</label>
          </div>

          <div class="md-form">
              <i class="fa fa-address-book prefix black-text"></i>
              <input type="text" id="form4" class="form-control" name="pesel">
              <label for="form4">PESEL</label>
          </div>

          <div class="md-form">
              <i class="fa fa-home prefix black-text"></i>
              <input type="text" id="form5" class="form-control" name="adres">
              <label for="form5">Adres zamieszkania</label>
          </div>

          <div class="md-form">
              <i class="fa fa-phone prefix black-text"></i>
              <input type="text" id="telefon" class="form-control" name="telefon">
              <label for="telefon">Nr. kontaktowy*</label>
          </div>

          <div class="md-form">
                  <i class="fa fa-info-circle prefix black-text"></i>
                  <textarea type="text" id="form7" class="md-textarea" style="height: 90px" name="info"></textarea>
                  <label for="form7">Dodatkowe informacje*</label>
          </div>

          <div class="text-center">
              <button class="btn btn-default btn-lg btn-block">Zarejestruj <i class="fa fa-paper-plane-o ml-1"></i></button>
          </div>

      </form>
      <div>
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
