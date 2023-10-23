<?php 

namespace Kontrolor;

Trait GlavniKontrolor
{
	public function view($name, $data = [])
	{
		
    extract($data);
		
		$imeFajla = BASE_DIR."/app/pogledi/".$name.".pogled.php";
		if(file_exists($imeFajla))
		{
			require $imeFajla;
		}else{
			$imeFajla = BASE_DIR."/app/pogledi/404.pogled.php";
			require $imeFajla;
		}
	}
}
