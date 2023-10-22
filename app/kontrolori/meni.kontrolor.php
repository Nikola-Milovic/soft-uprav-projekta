<?php

namespace Kontrolor;

class MeniKontrolor {

		use GlavniKontrolor;

		private $meni;

	function __construct() {
			$this->meni = new \Model\MeniModel();
		}

    public function index() {
		  $jela = $this->meni->dohvatiJela();
			$korpa = $_SESSION['korpa'] ?? NULL;
			$korisnik = $_SESSION['korisnik'] ?? NULL;
			$this->view("meni", ['jela' => $jela, 'korpa' => $korpa, 'korisnik' => $korisnik]);
    }
}
?>

