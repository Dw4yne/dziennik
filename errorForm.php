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
  <link href="css/errorForm.css" rel="stylesheet">
  <!-- Czcionki -->
</head>
<<<<<<< HEAD
<body>
  <section class="section">

    <blockquote class="blockquote bq-primary">
        <p class="bq-title">Zgłoś problem</p>
        <p>Masz jakieś pytania? Nie wahaj się skontaktować z nami bezpośrednio. Nasz zespół powróci z rozwiązaniem tak szybko jak tylko to możliwe aby Ci pomóc!</p>
=======

<section class="section">

    <blockquote class="blockquote bq-danger">
        <p class="bq-title">Zgłoś problem</p>
        <p>Masz jakieś pytania? Nie wahaj się skontaktować się z nami bezpośrednio. Nasz zespół powróci z rozwiązaniem tak szybko jak tylko to możliwe aby Ci pomóc!</p>
>>>>>>> 47e64ecc87b4928693873cb54719a2e61f22de89
    </blockquote>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9 err">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Imię</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">E-mail</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Temat</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Opisz swój problem</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
<<<<<<< HEAD
            <button href="main.php" type="button" class="btn btn-danger">Anuluj</button>
            <div class="center-on-small-only send">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
=======

            <div class="center-on-small-only">
                <a class="btn btn-danger" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
>>>>>>> 47e64ecc87b4928693873cb54719a2e61f22de89
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
<<<<<<< HEAD
                    <a target="_blank" href="https://www.google.pl/maps/dir//TEB+Edukacja,+Dmowskiego+16A,+80-001+Gda%C5%84sk/@54.3524179,18.5816879,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x46fd737419cd2841:0xba0daf08fce83755!2m2!1d18.6070729!2d54.3788735!3e0"><p>Gdańsk, Dmowskiego 16/A</p></a>
=======
                    <p>Gdańsk, Dmowskiego 16/A</p>
>>>>>>> 47e64ecc87b4928693873cb54719a2e61f22de89
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>kontakt@dziennik.pl</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

<<<<<<< HEAD
  </section>

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script>

function validateForm() {
  // var x =  document.getElementById('name').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Name cannot be empty";
  //     return false;
  // }
  // x =  document.getElementById('email').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Email cannot be empty";
  //     return false;
  // } else {
  //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //     if(!re.test(x)){
  //         document.getElementById('status').innerHTML = "Email format invalid";
  //         return false;
  //     }
  // }
  // x =  document.getElementById('subject').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Subject cannot be empty";
  //     return false;
  // }
  // x =  document.getElementById('message').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Message cannot be empty";
  //     return false;
  // }
  document.getElementById('status').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();

}
  </script>


</body>
=======
</section>
>>>>>>> 47e64ecc87b4928693873cb54719a2e61f22de89
<!--Section: Contact v.2-->
