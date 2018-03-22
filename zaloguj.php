<?php

session_start();

if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
  //zabezpieczenie przed wpisanie na hama zaloguj.php w pasek adresu
  header('Location: index.php');
  exit();
}

require_once "connect.php";

if($polaczenie->connect_errno!=0)
{
  echo "Error: ".$polaczenie->connect_errno;
  exit();
}


$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "SELECT * FROM uczen
        LEFT JOIN klasy on uczen.id_klasy = klasy.id_klasy
        WHERE login='$login' AND haslo='$haslo'";

if ($wynik = @$polaczenie->query($sql))
{
  $ile = $wynik->num_rows;
  //sprawdz czy dostalismy dokladnie 1 usera
  if($ile == 1)
  {
    $wiersz = $wynik->fetch_assoc();

    $_SESSION['zalogowano'] = true;
    $_SESSION['id'] = $wiersz['id_ucznia'];
    $_SESSION['imie'] = $wiersz['imie'];
    $_SESSION['nazwisko'] = $wiersz['nazwisko'];
    $_SESSION['loginzmienna'] = $wiersz['login'];
    $_SESSION['klasa'] = $wiersz['klasa'];
    unset($_SESSION['blad']); //???? co to jest????
    $wynik->free_result();
    header('Location: main.php');
  } else { // dostalismy 0 lub wiecej niz 1 usera
    $_SESSION['blad']='<div class="alert alert-danger" role="alert">
                        <strong>Błąd logowania!</strong> Niepoprawny login i/lub hasło.
                        </div>';
                        header('Location: index.php');
  }
}
$polaczenie->close();
?>
