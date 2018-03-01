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
  if($result != false){


  $oceny = Array();
  while($row = $result->fetch_assoc()) {
    if(!isset($oceny[$row['przedmiot']])) $oceny[$row['przedmiot']] = Array();
      array_push($oceny[$row['przedmiot']], $row['ocena']);
    }
  }
  else echo '<h1>brak ocen</h1>';
   ?>
<table class="table table-bordered" id="oceny">
  <thead class="" id="table_head">
    <tr class="table pasektabeli">
      <th class="text-center przedmiotytabela"><p class="h5">Przedmiot</p></th>
      <th class="text-center ocenysemestry"><p class="h5">1 Semestr</p></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($oceny as $klucz => $przedmiot) {
      echo '<tr class="hoverable">';
      echo '<td>'.'<h4 class="h4-responsive">'.$klucz.'</h4>'.'</td>';
      echo '<td>';
      foreach ($przedmiot as $ocena) {
        if ($ocena==1) {
          $colorOceny = 'danger';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }if ($ocena==2) {
          $colorOceny = 'deep-orange';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }if ($ocena==3) {
          $colorOceny = 'amber';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }if ($ocena==4) {
          $colorOceny = 'yellow';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }if ($ocena==5) {
          $colorOceny = 'light-green';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }if ($ocena==6) {
          $colorOceny = 'dark-green';
          echo '<button class="btn btn-'.$colorOceny.'">'.$ocena.'</button>';
        }

      }
      echo '</td>';
      echo '</tr>';
    }
     ?>

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
