<?php

defined('POCETNIDIREKTORIJUM') OR exit('Zabranjen pristup');

class App
{
	private $kontrolor = 'pocetna';
	private $metoda 	= 'index';

	private function podeliURL()
	{
		$URL = $_SERVER['REQUEST_URI'] ?? '/pocetna';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}

	public function ucitajKontrolor()
	{
		$URL = $this->podeliURL();

		if ($URL[0] == '') {
			$URL[0] = 'pocetna';
		}

		/** Izaberi kontrolor **/
		$imeFajla = "../app/kontrolori/".$URL[0].".kontrolor.php";
		if(file_exists($imeFajla))
		{
			require $imeFajla;
			$this->kontrolor = ucfirst($URL[0]);
			unset($URL[0]);
		}else{

			$imeFajla = "../app/kontrolori/_404.php";
			require $imeFajla;
			$this->kontrolor = "_404";
		}

		$imeKlase = '\Kontrolor\\' . ucfirst($this->kontrolor) . 'Kontrolor';
		$kontrolor = new $imeKlase;

		/** Izaberi metodu **/
		if(!empty($URL[1]))
		{
			if(method_exists($kontrolor, $URL[1]))
			{
				$this->metoda = $URL[1];
				unset($URL[1]);
			}	
		}

		call_user_func_array([$kontrolor,$this->metoda], $URL);
	}	

}
