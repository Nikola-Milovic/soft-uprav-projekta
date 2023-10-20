<?php

namespace Model;

class MeniModel {

		use PocetniModel;

		protected $tabela = 'menu';

    public function dohvatiJela() {
			return $this->nadjiSve();
    }
}
?>
