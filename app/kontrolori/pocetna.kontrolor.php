<?php

namespace Kontrolor;

class PocetnaKontrolor {

		use GlavniKontrolor;

    public function index() {
			$this->view("pocetna");
    }
}
?>
