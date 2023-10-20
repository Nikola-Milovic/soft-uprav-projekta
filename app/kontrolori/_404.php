<?php 

namespace Kontrolor;

class _404Kontrolor
{

	use GlavniKontrolor;
	public function index()
	{
		$this->view('404');
	}
}
