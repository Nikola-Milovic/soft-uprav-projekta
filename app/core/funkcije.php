<?php

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

function odjava(){
	session_start();
	session_destroy();
}

function dodajUKorpu($id, $meni){
  $jelo = $meni->prvi(['id' => $id]);
	$_SESSION['korpa'][$id] = $jelo;
	session_write_close();
}

function ukloniIzKorpe($id){
	unset($_SESSION['korpa'][$id]);
	session_write_close();
}

function poruci($korpa, $korisnik, $narudzbina) {
	$id = $narudzbina->poruci($korpa, $korisnik, $narudzbina);
	unset($_SESSION['korpa']);
	return $id;
}
