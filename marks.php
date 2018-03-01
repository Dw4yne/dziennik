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
    <title>Oceny</title>
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


<div class="z-depth-2 container-flex tablearozmiar odstepMain">
  <?php
  include('connect.php');
  $q = "SELECT * FROM oceny left JOIN przedmiot on oceny.id_przedmiotu = przedmiot.id_przedmiotu where id_ucznia=".$_SESSION['id'];

  $result = $polaczenie->query($q);
  $oceny = Array();
  while($row = $result->fetch_assoc()) {
    if(!isset($oceny[$row['przedmiot']])) $oceny[$row['przedmiot']] = Array();
      array_push($oceny[$row['przedmiot']], $row['ocena']);
  }
   ?>
<table class="table table-bordered" id="oceny">
  <thead class="" id="table_head">
    <tr class="table pasektabeli">
      <th class="text-center przedmiotytabela"><p class="h5">Przedmiot</p></th>
      <th class="text-center ocenysemestry"><p class="h5">1 Semestr</p></th>
      <th class="text-center ocenysemestry"><p class="h5">2 Semestr</p></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($oceny as $klucz => $przedmiot) {
      echo '<tr class="hoverable">';
      echo '<td>'.'<h4 class="h4-responsive">'.$klucz.'</h4>'.'</td>';
      echo '<td>';
      foreach ($przedmiot as $ocena) {

        echo $ocena.", ";
      }
      echo '</td>';
      echo '</tr>';
    }
     ?>
    <tr class="hoverable">
      <td><h4 class="h4-responsive">Matematyka</h4></td>
      <td>3, 6, 3, 5, 1, 6, 3, 5, 3, 3, 2</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Jęz. Polski</h4></td>
      <td>5, 2, 3, 5, 5, 5, 5, 3, 3, 2, 3, 4</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Jęz. Angielski</h4></td>
      <td>2, 4, 1, 6, 1, 4, 3, 1, 6, 5, 5, 5, 6, 1, 6</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Jęz. Niemiecki</h4></td>
      <td>4, 1, 3, 3, 4, 6</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Biologia</h4></td>
      <td>6, 5, 1, 5, 3, 1, 2, 5, 2, 4, 2, 4, 6</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Historia</h4></td>
      <td>6, 2, 6, 6, 1, 4, 4</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">WOS</h4></td>
      <td>5, 6, 6, 3, 3</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Wychonie fizyczne</h4></td>
      <td>6, 3, 6, 3, 5, 4, 6, 5, 4, 4</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Montaż</h4></td>
      <td>5, 4, 3, 2, 5, 6, 4, 2, 5, 3, 3, 4, 6, 2</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
    <tr class="hoverable">

      <td><h4 class="h4-responsive">Bazy Danych</h4></td>
      <td>2, 6, 4, 5, 1, 6, 4, 1</td>
      <td>TU BĘDĄ OCENY</td>
    </tr>
  </tbody>
</table>
</div>


<!-- footer -->
<?php include('footer.php'); ?>
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
