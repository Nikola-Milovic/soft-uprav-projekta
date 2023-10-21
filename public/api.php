<?php 
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
