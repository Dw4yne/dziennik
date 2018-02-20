<?php
  $db = new PDO('mysql:host=localhost;dbname=szkola', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $telefon=$_POST['telefon'];
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];

    if($imie==="" || $nazwisko==="" ||
        $telefon=="" || $login=="" ||
        $haslo==""){

      session_start();
      $_SESSION['komunikat']='<div class="alert alert-danger" role="alert">
                        <strong>Błąd!</strong> Uzupełnij formularz.
                        </div>';
                        header('Location: dodawanieNauczyciela.php');

    }else{
    try {
      $zapytanie= $db->prepare("INSERT INTO nauczyciele (imie, nazwisko, telefon, login, haslo) VALUES( :imie, :nazwisko, :telefon,  :login, :haslo)");
      $zapytanie->bindValue(":imie", $imie);
      $zapytanie->bindValue(":nazwisko", $nazwisko);
      $zapytanie->bindValue(":telefon", $telefon);
      $zapytanie->bindValue(":login", $login);
      $zapytanie->bindValue(":haslo", $haslo);
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
