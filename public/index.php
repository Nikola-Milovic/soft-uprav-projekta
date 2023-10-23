<?php

session_start();

define('BASE_DIR', dirname(__DIR__));

require "../app/core/init.php";

$app = new App();
$app->ucitajKontrolor();
?>

