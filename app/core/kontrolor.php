<?php 

namespace Kontrolor;

Trait GlavniKontrolor
{
	public function view($name, $data = [])
	{
		
    extract($data);
		
		$loginovan = isset($_SESSION['loginovan']) && $_SESSION['loginovan'] == true;
		$korisnik = $_SESSION['korisnik'] ?? NULL;

		$imeFajla = "../app/pogledi/".$name.".pogled.php";
		if(file_exists($imeFajla))
		{
			require $imeFajla;
		}else{

			$imeFajla = "../app/pogledi/404.pogled.php";
			require $imeFajla;
		}
	}
}
