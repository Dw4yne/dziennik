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
</head>

<body>

  <?php include('navbar.php'); ?>
<!--Main Navigation-->

  <main>
    <div class="container odstepMain">
      <form method="post"
            action="dodajo.php">
        <p class="h3 text-center mb-4">Dodaj ocene</p>
        <?php
          if(isset($_SESSION['komunikat'])){
            echo $_SESSION['komunikat'];
            unset($_SESSION['komunikat']);
          }
         ?>
        <div class="container row">
          <div class="form-group col-3">
            <label for="exampleSelect1">Klasa</label>
            <select class="form-control" id="exampleSelect1">
              <option>1A</option>
              <option>2C</option>
              <option>3Z</option>
              <option>4F</option>
              <option>4G</option>
            </select>
          </div>
          <!-- Waga oceny -->
          <div class="form-group col-3">
            <label for="exampleSelect1">Waga</label>
            <select class="form-control" id="exampleSelect1" name="waga">
              <option selected value=""> Waga </option>
              <option value="1">1 (aktywność)</option>
              <option value="2">2 (praca domowa)</option>
              <option value="3">3 (sprawdzian)</option>
              <option value="4">4 (projekt)</option>
              <option value="5">5 (praca kalsowa)</option>
            </select>
          </div>


          <!-- Ocena -->
          <div class="form-group col-3">
            <label for="exampleSelect1">Ocena</label>
            <select class="form-control" id="exampleSelect1" name="ocena">
              <option selected  value="" disactive> Ocena </option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>

          <!-- Klasa -->
          <div class="form-group col-3" >
                      <label for="exampleSelect1"></label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="plusminus" id="optionsRadios1" value="" checked>
                          Pełna
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="plusminus" id="optionsRadios2" value="+">
                          Plus (+)
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="plusminus" id="optionsRadios3" value="-">
                            Minus(-)
                        </label>
                      </div>
                  </div>
      </div>
        <div class="row">
        <div class="col-md ">

          <!-- Imię -->
          <div class="form-group col-md ">
            <label for="exampleSelect1">Imię</label>
            <select class="form-control" id="exampleSelect1">
              <option>Paweł</option>
              <option>Arek</option>
              <option>Damian</option>
              <option>Dominik</option>
              <option>Karol</option>
              <option>Magda</option>
              <option>Zuzia</option>
            </select>
          </div>
        </div>

        <!-- Nazwisko -->
        <div class="form-group col-md ">
          <label for="exampleSelect1">Nazwisko</label>
          <select class="form-control" id="exampleSelect1">
            <option>Ciarka</option>
            <option>Flizikowski</option>
            <option>Kędziora</option>
          </select>
        </div>
      </div>
      <div class="md-form">
              <i class="fa fa-info-circle prefix black-text"></i>
              <textarea type="text" id="form7" class="md-textarea" style="height: 120px" name="komentarz"></textarea>
              <label for="form7">Komentarz</label>
      </div>
      <div class="text-center">
          <button class="btn btn-default btn-lg btn-block">Dodaj ocene <i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>
      </form>
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
