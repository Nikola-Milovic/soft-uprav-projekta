<?php

session_start();

if (getenv('USE_DOCKER')) {
	// DEFINE("POCETNIDIREKTORIJUM", "/mnt/hddstorage/files/skola/3.god/2. sem/upravljanje/proj");
	DEFINE("POCETNIDIREKTORIJUM", "/app");
} else {
	DEFINE("POCETNIDIREKTORIJUM", "/home/vol5_8/epizy.com/epiz_31121671/htdocs/nikola-milovic");
}

require POCETNIDIREKTORIJUM."/app/core/init.php";

$app = new App();
$app->ucitajKontrolor();
?>

