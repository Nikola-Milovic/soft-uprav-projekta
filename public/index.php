<?php

session_start();

define('POCETNIDIREKTORIJUM', __DIR__ . DIRECTORY_SEPARATOR);

require "../app/core/init.php";

$app = new App();
$app->ucitajKontrolor();
?>

