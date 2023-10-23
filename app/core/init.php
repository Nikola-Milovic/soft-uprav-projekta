<?php 

spl_autoload_register(function($classname){
	$classname = explode("\\", $classname);
	$classname = end($classname);
  $classname = strtolower(str_replace('Model', '', $classname));
	$imeFajla = BASE_DIR."/app/modeli/".$classname.".php";
	if(file_exists($imeFajla))
	{
			require $imeFajla;
	}
});

require BASE_DIR."/app/core/baza.php";
require BASE_DIR."/app/core/model.php";
require BASE_DIR."/app/core/funkcije.php";
require BASE_DIR."/app/core/kontrolor.php";
require BASE_DIR."/app/core/app.php";
