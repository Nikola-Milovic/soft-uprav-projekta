<?php
require 'config/baza.php';
require 'kontroleri/pocetniKontroler.php';
require 'kontroleri/prijavaKontroler.php';

session_start();

$loginovan = isset($_SESSION['loginovan']) && $_SESSION['loginovan'] == true;

if($loginovan) {
    $pocetniKontroler = new PocetniKontroler($pdo);
    $pocetniKontroler->index();
} else {
    $loginKontroler = new LoginKontroler($pdo);
    $loginKontroler->index();
}
?>
