
<header>

  <nav class="navbar  navbar-expand-lg navbar-light bg-white scrolling-navbar navbarglowna">
      <a class="navbar-brand" href="main.php"><img src="img/logo.png" style="height: 48px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item podkresl">
                  <a class="nav-link" href="main.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>  Strona główna<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled"><i class="fa fa-calendar-check-o fa-lg"></i>  Aktualności</a>
              </li>
              <li class="nav-item podkresl">
                  <a class="nav-link" href="marks.php"><i class="fa fa-bar-chart fa-lg" aria-hidden="true"></i>  Oceny</a>
              </li>
              <li class="nav-item podkresl">
                  <a class="nav-link" href="frekwencja1.php"><i class="fa fa-percent fa-lg" aria-hidden="true"></i>  Frekwencja</a>
              </li>
              <li class="nav-item podkresl">
                  <a class="nav-link" href="planLekcji.php"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i>  Plan lekcji</a>
              </li>
              <li class="nav-item col">
                <div class="btn-group">
                  <button class="btn btn-outline-default waves-effect z-depth-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 20px;">Nowy&nbsp;&nbsp;<i class="fa fa-hand-o-down" aria-hidden="true"></i></button>

                  <div class="dropdown-menu">

                      <a class="dropdown-item podkresl dropActive" href="dodawanieOcen.php"><p class="dropLine">Ocena</p></a>
                      <a class="dropdown-item disabled" href="#"><p class="dropLine">Aktualności</p></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item podkresl dropActive" href="dodawanieUcznia.php"><p class="dropLine">Uczeń</p></a>
                      <a class="dropdown-item podkresl dropActive" href="dodawanieNauczyciela.php"><p class="dropLine">Nauczyciel</p></a>
                  </div>
                </div>
              </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item example">
                <a class="nav-link" href="profil.php"><i class="fa fa-user-o fa-lg"><?php echo '<font face="Roboto">'."   ".$_SESSION['imie']."  ".$_SESSION['nazwisko']."</font>"; ?></i></a>
            </li>
            <li class="nav-item example hoverable">
            <a class="nav-link" href="wyloguj.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a>
          </li>
          </ul>
      </div>
  </nav>

</header>
