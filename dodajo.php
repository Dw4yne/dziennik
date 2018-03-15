<?php
  $db = new PDO('mysql:host=localhost;dbname=szkola', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $ocena=$_POST['ocena'];
  $plusminus=$_POST['plusminus'];
  $waga=$_POST['waga'];
  $komentarz=$_POST['komentarz'];
  $razem=$ocena.$plusminus;


  if($ocena==""){
    session_start();
    $_SESSION['komunikat']='<div class="alert alert-danger" role="alert">
                      <strong>Błąd!</strong> Uzupełnij formularz.
                      </div>';
                      header('Location: dodawanieOcen.php');

  }else{
    try {
      $zapytanie= $db->prepare("INSERT INTO oceny (ocena, waga, komentarz) VALUES( :razem, :waga, :komentarz)");
      $zapytanie->bindValue(":razem", $razem);
      $zapytanie->bindValue(":waga", $waga);
      $zapytanie->bindValue(":komentarz", $komentarz);
      $zapytanie->execute();
      if($zapytanie){
        header('Location: poDodaniu.php');
      }else{
        header('Location: nieDodalo.php');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
 ?>
