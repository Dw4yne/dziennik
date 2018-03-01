<?php
  session_start();
  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowano']==true))
  {
    header('Location: main.php');
    exit();
  }
 ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dziennik / Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="startTime()">

  <main>
    <form action="zaloguj.php" method="post">
      <div class="logowanie">
    <p class="h2 text-center mb-5">Zaloguj się do</br><img class="logoLogowanie" src="img/logo.png"></p>

    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input name="login" type="text" id="defaultForm-email" class="form-control">
        <label for="defaultForm-email">Login</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input name="haslo" type="password" id="defaultForm-pass" class="form-control">
        <label for="defaultForm-pass">Hasło</label>
    </div>
    <?php
      if(isset($_SESSION['blad']))
      echo $_SESSION['blad'];
     ?>
    <div class="form-group">
                    <input type="checkbox" id="checkbox1">
                    <label for="checkbox1" class="grey-text">Zapamiętaj mnie</label>
                </div>

    <div class="text-center">
        <button class="btn btn-default">Zaloguj <i class="fa fa-sign-in ml-1"></i></button>
    </div>
</form>





</div>

  </main>


  <footer class="fixed-bottom">

    <div class="container">
      <button type="button" class="btn btn-outline-default waves-effect">Kontakt</button>
      <a href="prezentacja.html"><button type="button" class="btn btn-outline-yellow waves-effect">O nas</button></a>
      <button type="button" class="btn btn-outline-amber waves-effect">Zdzichu</button>
      <button type="button" class="btn btn-outline-primary waves-effect">TEB</button>
      <button type="button" class="btn btn-outline-info waves-effect"><div id="txt"></div></button>

    </div>

  </footer>






  <!--Main Layout-->

    <!-- SCRIPTS -->
    <script>
      function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML =
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
      }
    </script>
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
