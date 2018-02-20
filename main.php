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
    <title>Strona główna</title>
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
    <div class="container glowna">
    <div id="carousel-example-2" class="carousel slide carousel-fade karuzela" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-blue-slight">
                <img class="d-block w-100" src="img/example.jpg" alt="First slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Przykładowy tekst</h3>
                <p>Przykładowy tekst</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-blue-slight">
                <img class="d-block w-100" src="img/example.jpg" alt="Second slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Przykładowy tekst</h3>
                <p>Przykładowy tekst</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-blue-slight">
                <img class="d-block w-100" src="img/example.jpg" alt="Third slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Przykładowy tekst</h3>
                <p>Przykładowy tekst</p>
          </div>
        </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="bprimaryutton" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--Card-->
      <div class="cardy">
      <div class="row">
        <div class="col-sm-4">
      <div class="card">

          <!--Card image-->
          <div class="view overlay hm-white-slight obrazCard">
              <img src="img/example.jpg" class="img-fluid" alt="">
              <a href="#">
                  <div class="mask"></div>
              </a>
          </div>

          <!--Card content-->
          <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-default">Button</a>
          </div>

      </div>
    </div>
      <!--/.Card-->
      <!--Card-->
      <div class="col">
<div class="card">

    <!--Card image-->
    <div class="view overlay hm-white-slight">
        <img src="img/example.jpg" class="img-fluid" alt="">
        <a href="#">
            <div class="mask"></div>
        </a>
    </div>

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-default">Button</a>
    </div>

</div>
</div>
<!--/.Card-->
<div class="col">
<div class="card">

    <!--Card image-->
    <div class="view overlay hm-white-slight">
        <img src="img/example.jpg" class="img-fluid" alt="">
        <a href="#">
            <div class="mask"></div>
        </a>
    </div>

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-default">Button</a>
    </div>

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
