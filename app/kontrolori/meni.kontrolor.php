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
			$this->view("meni", ['jela' => $jela]);
    }
}
?>

