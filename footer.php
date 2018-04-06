  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">


  <div class="row footer1">
      <div class="col">
        <h5 class="h5-responsive infoFooter">FAQ</h5>
        <h5 class="h5-responsive infoFooter">BLOG</h5>
        <h5 class="h5-responsive infoFooter">O NAS</h5>
        <h5 class="h5-responsive infoFooter">KONTAKT</h5>
        <h5 class="h5-responsive infoFooter">POLITYKA PRYWATNOŚCI</h5>
      </div>
      <div class="col center text-center">
          <img src="img/veclogpng.png" style="height: 115px;">
      </div>
      <div class="col text-center">
        <a class="btn-floating btn-lg footerIcon facebook rounded-circle"><i class="fa fa-facebook-square"></i></a>
        <a class="btn-floating btn-lg footerIcon github marginIcon rounded-circle"><i class="fa fa-github"></i></a>
        <a class="btn-floating btn-lg footerIcon googlePlus marginIconGPlus marginIcon rounded-circle"><i class="fa fa-google-plus"></i></a></br>
        <a class="btn-floating btn-lg twitter rounded-circle"><i class="fa fa-twitter"></i></a>
        <a class="btn-floating btn-lg instagram marginIcon rounded-circle"><i class="fa fa-instagram"></i></a>
      </div>
  </div>



<div class="container-fluid copyright">
  <div class="footer-copyright">
          <div class="container-fluid">
              © 2018 VECTOR
          </div>
      </div>
    </div>

<button class="btn btn" onclick="topFunction()" id="scrollTop" title="Przejdź na górę"><i class="fa fa-arrow-up fa-4x" aria-hidden="true"></i></button>

    <script>
      // Kiedy użytkownik zescrolluje na dół 500px, pokaż przycisk
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
              document.getElementById("scrollTop").style.display = "block";
          } else {
              document.getElementById("scrollTop").style.display = "none";
          }
      }

      // Kiedy użytkownik użyje przycisku przenieś go na górę strony
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>
