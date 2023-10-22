<?php

namespace Kontrolor;

class PotvrdaKontrolor {

	use GlavniKontrolor;

	public function index() {
		$orderId = $_GET['order_id']; 
		$this->view("potvrda", ['orderId'=>$orderId]);
	}
}

