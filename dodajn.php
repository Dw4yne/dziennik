<?php
session_start();
require_once "connectPDO.php";
try
{
     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     die("Polaczenie z baza danych przerwane: " . $e->getMessage());
}

$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$pesel=$_POST['pesel'];
$adres=$_POST['adres'];
$telefon=$_POST['telefon'];

 if
 (!empty($_POST['imie']) && !empty($_POST['nazwisko'])
 && !empty($_POST['login']) && !empty($_POST['haslo'])
 && !empty($_POST['pesel']) && !empty($_POST['adres'])
 && !empty($_POST['telefon'])) {

     $sql = "INSERT INTO nauczyciel (imie, nazwisko, login, haslo, PESEL, Adres_zamieszkania, numer_kontaktowy)
             VALUES ('$imie' , '$nazwisko' , '$login' , '$haslo' , '$pesel' , '$adres' , '$telefon')";
     $records = $DB_con->prepare($sql);
     $records->execute();
     header('Location: poDodaniu.php');
} else {
        $_SESSION['komunikat']='<div class="alert alert-danger" role="alert">
                          <strong>Błąd!</strong> Uzupełnij formularz.
                          </div>';
        header('Location: dodawanieNauczyciela.php');
}
 ?>
