<?php

namespace Model;

class MeniModel {

		use PocetniModel;

		protected $tabela = 'menu_nm1';

    public function dohvatiJela() {
			return $this->nadjiSve();
    }

	public function dohvatiJeloPoId($id) {
		return $this->prvi(['id' => $id]);
	}
}
?>
