<?php

namespace Kontrolor;

class KorpaKontrolor {

		use GlavniKontrolor;

    public function index() {
			$korpa = $_SESSION['korpa'] ?? NULL;
			$this->view("korpa", ['korpa'=>$korpa]);
    }
}
?>
