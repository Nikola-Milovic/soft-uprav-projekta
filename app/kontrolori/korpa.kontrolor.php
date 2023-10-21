<?php

namespace Kontrolor;

class KorpaKontrolor {

		use GlavniKontrolor;

    public function index() {
			$this->view("korpa");
    }
}
?>
