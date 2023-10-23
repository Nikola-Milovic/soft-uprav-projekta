<?php

session_start();

if (getenv('USE_DOCKER')) {
	DEFINE("POCETNIDIREKTORIJUM", __DIR__);
} else {
	DEFINE("POCETNIDIREKTORIJUM", "http://usp2022.epizy.com/nikola-milovic");
}

require POCETNIDIREKTORIJUM."/app/core/init.php";
require POCETNIDIREKTORIJUM."/api.php";

$app = new App();
$app->ucitajKontrolor();
?>

