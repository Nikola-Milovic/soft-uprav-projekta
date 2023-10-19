<?php
require 'config/baza.php';
require 'kontroleri/pocetniKontroler.php';

$pocetniKontroler = new PocetniKontroler($pdo);
$pocetniKontroler->index();
?>
