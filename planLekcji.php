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
    <title>Plan lekcji</title>
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



<div class="card">
    <div class="card-body">

        <div class="table-wrapper-2">

            <!--Table-->
            <table class="table table-responsive">
                <thead class="mdb-color pasektabeli">
                    <tr>
                        <th class="text-center">Lekcja</th>
                        <th class="th-lg text-center">Godziny</th>
                        <th class="th-lg">Poniedziałek</th>
                        <th class="th-lg">Wtorek</th>
                        <th class="th-lg">Środa</th>
                        <th class="th-lg">Czwartek</th>
                        <th class="th-lg">Piątek</th>

                        <!-- <th class="th-lg">Sobota</th>
                        <th class="th-lg">Niedziela</th> -->

                    </tr>
                </thead>
                <tbody>
                  <!-- 7 dni tygodnia od góry do dołu, lekcja 0 -->
                    <tr>
                      <th class="text-center" scope="row">0</th>
                      <td class="text-center">7:10 - 7:55</td>

                      <td></td>

                      <td></td>

                      <td><b>Historia i społeczeństwo</b><br/>
                        - Banit Mateusz
                      </td>

                      <td><b>Projektowanie i montaż lokalnych sieci komputerowych</b><br/>
                        - Buczyński Paweł
                      </td>

                      <td></td>

                      <!-- <td></td>
                      <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 1 -->
                    <tr class="planKolor">
                        <th class="text-center" scope="row">1</th>
                        <td class="text-center">8:00 - 8:45</td>

                        <td><b>Oprogramowanie aplikacji internetowych</b><br/>
                          - Zawadzki Paweł
                        </td>

                        <td ></td>

                        <td><b>Historia i społeczeństwo</b><br/>
                          - Banit Mateusz
                        </td>

                        <td><b>Projektowanie i montaż lokalnych sieci komputerowych</b><br/>
                          - Buczyński Paweł
                        </td>

                        <td></td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 2 -->
                    <tr>
                        <th class="text-center" scope="row">2</th>
                        <td class="text-center">8:55 - 9:40</td>

                        <td><b>Oprogramowanie aplikacji internetowych</b><br/>
                          - Zawadzki Paweł
                        </td>

                        <td></td>

                        <td><b>Zajęcia z wychowawcą</b><br/>
                          - Wołejko Justyna
                        </td>

                        <td><b>Witryny i aplikacje internetowe</b><br/>
                          - Buczyński Paweł
                        </td>

                        <td></td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 3-->
                    <tr class="planKolor">
                        <th class="text-center" scope="row">3</th>
                        <td class="text-center">9:50 - 10:35</td>
                        <td><b>Matematyka</b><br/>
                          - Łukasik Magda
                        </td>
                        <td></td>

                        <td><b>Język niemiecki</b><br/>
                          - Wołejko Justyna
                        </td>

                        <td><b>Witryny i aplikacje internetowe</b><br/>
                          - Buczyński Paweł
                        </td>

                        <td><b>Wychowanie fizyczne</b><br/>
                          - Suchcicki Przemysław
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 4 -->
                    <tr>
                        <th class="text-center" scope="row">4</th>
                        <td class="text-center">10:50 - 11:35</td>
                        <td><b>Matematyka</b><br/>
                          - Łukasik Magda
                        </td>

                        <td></td>

                        <td><b>Działalność gospodarcza w branży informatycznej</b><br/>
                          - Kołodko Barbara
                        </td>

                        <td><b>Systemy baz danych</b><br/>
                          - Łukasik Marcin
                        </td>

                        <td><b>Wychowanie fizyczne</b><br/>
                          - Suchcicki Przemysław
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 5 -->
                    <tr class="planKolor">
                        <th class="text-center" scope="row">5</th>
                        <td class="text-center">11:40 - 12:25</td>

                        <td><b>Informatyka</b><br/>
                          - Łukasik Marcin
                        </td>

                        <td></td>

                        <td><b>Matematyka</b><br/>
                          - Łukasik Magda
                        </td>

                        <td><b>Systemy baz danych</b><br/>
                          -Łukasik Marcin
                        </td>

                        <td><b>Wychowanie fizyczne</b><br/>
                          - Suchcicki Przemysław
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 6 -->
                    <tr>
                        <th class="text-center" scope="row">6</th>
                        <td class="text-center">12:35 - 13:20</td>

                        <td><b>Informatyka</b><br/>
                          - Łukasik Marcin
                        </td>

                        <td><b>Język angielski</b><br/>
                          - Wójcik Magdalena
                        </td>

                        <td><b>Matematyka</b><br/>
                          - Łukasik Magda
                        </td>

                        <td><b>Systemy baz danych</b><br/>
                          - Łukasik Marcin
                        </td>

                        <td><b>Oprogramowanie aplikacji internetowych</b><br/>
                          - Zawadzki Paweł
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 7 -->
                    <tr class="planKolor">
                        <th class="text-center" scope="row">7</th>
                        <td class="text-center">13:30 - 14:15</td>

                        <td></td>

                        <td><b>Język angielski</b><br/>
                          - Wójcik Magdalena
                        </td>

                        <td><b>Matematyka</b><br/>
                          - Łukasik Magda
                        </td>

                        <td><b>Język polski</b><br/>
                          - Sowińska Iwona
                        </td>

                        <td><b>Oprogramowanie aplikacji internetowych</b><br/>
                          - Zawadzki Paweł
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 8 -->
                    <tr>
                        <th class="text-center" scope="row">8</th>
                        <td class="text-center">14:20 - 15:05</td>

                        <td></td>

                        <td><b>Język angielski</b><br/>
                          - Wójcik Magdalena
                        </td>

                        <td></td>

                        <td><b>Język polski</b><br/>
                          - Sowińska Iwona
                        </td>

                        <td><b>Język polski</b><br/>
                          - Sowińska Iwona
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 9-->
                    <tr class="planKolor">
                        <th class="text-center" scope="row">9</th>
                        <td class="text-center">15:10 - 15:55</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td><b>Język polski</b><br/>
                          - Sowińska Iwona
                        </td>

                        <!-- <td></td>
                        <td></td> -->

                    </tr>

                  <!-- 7 dni tygodnia od góry do dołu, lekcja 10 -->
                    <tr>
                        <th class="text-center" scope="row">10</th>
                        <td class="text-center">16:00 - 16:45</td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <!-- <td></td>
                        <td></td> -->

                    </tr>
                </tbody>
            </table>
            <!--Table-->

        </div>

    </div>
</div>

  <main>


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
