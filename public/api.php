<?php 

require_once '../app/core/baza.php';
require_once '../app/core/model.php';
require_once '../app/modeli/meni.php';
require_once '../app/core/funkcije.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'odjava') {
	odjava();
	echo json_encode(['success' => true]);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submitrecept') {
    $ime = $_POST['ime'];
    $opis = $_POST['opis'];
    $slika = $_FILES['slika'];
    
		// Negde sacuvamo recept
    echo json_encode(['success' => true]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'dodajUKorpu') {
	$id = $_POST['jeloId'];
	$meni = new \Model\MeniModel();
	dodajUKorpu($id, $meni);
	echo json_encode(['success' => true]);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'ukloniIzKorpe') {
	$id = $_POST['jeloId'];
	ukloniIzKorpe($id);
	echo json_encode(['success' => true]);
	exit;
}
