<?php
  $db = new PDO('mysql:host=localhost;dbname=szkola', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $ocena=$_POST['ocena'];
  $klasa=$_POST['klasa'];
  $przedmiot=$_POST['przedmiot']
  $uczen=$_POST['uczen'];
  $semestr=$_POST['semestr'];



  if($ocena=="" || $klasa=="" || $przedmiot=="" || $uczen=="" || $semestr==""){
    session_start();
    $_SESSION['komunikat']='<div class="alert alert-danger" role="alert">
                      <strong>Błąd!</strong> Uzupełnij formularz.
                      </div>';
                      header('Location: dodawanieOcen.php');

  }else{
    try {
      $zapytanie= $db->prepare("INSERT INTO oceny (ocena, klasa, komentarz) VALUES( :razem, :waga, :komentarz)");
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
