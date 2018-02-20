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

<p class="h1 text-center semestr1"> SEMESTR <u>PIERWSZY</u></p>
<div class="z-depth-2 container-flex tablearozmiar">
<table class="table table-bordered" id="oceny">
  <thead class="" id="table_head">
    <tr class="table pasektabeli">
      <th class="text-center nr"><p class="h5">Data</p></th>
      <th class="text-center"><p class="h5">Nr. Lekcji</p></th>
      <th class="text-center"><p class="h5">Nieobecności</p></th>      
      <th class="text-center"><p class="h5">SP</p></th>
      <th class="text-center"><p class="h5">ZW</p></th>
    </tr>
  </thead>
  <tbody>
    <tr class="hoverable">
      <th class="text-center" scope="row">21.11.2017</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="hoverable">
      <th class="text-center" scope="row">-</th>
      <td><h4 class="h4-responsive"></h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

    <!--Bottom Table UI-->
    <div class="d-flex justify-content-center">

        <!--Pagination -->
        <nav class="my-3 pt-0">
            <ul class="pagination pagination-circle pg-blue mb-0">

                <!--Numbers-->
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a href="frekwencja2.php" class="page-link">2</a></li>

            </ul>
        </nav>
        <!--/Pagination -->

    </div>
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
