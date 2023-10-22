<?php


define('POCETNIDIREKTORIJUM', __DIR__ . DIRECTORY_SEPARATOR);

session_start();

require "../app/core/init.php";
require "./api.php";

$app = new App();
$app->ucitajKontrolor();
?>

