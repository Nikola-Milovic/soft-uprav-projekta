<?php 

defined('POCETNIDIREKTORIJUM') OR exit('Zabranjen pristup');

spl_autoload_register(function($classname){
	$classname = explode("\\", $classname);
	$classname = end($classname);
  $classname = strtolower(str_replace('Model', '', $classname));
	$imeFajla = POCETNIDIREKTORIJUM."/app/modeli/".$classname.".php";
	if(file_exists($imeFajla))
	{
			require $imeFajla;
	}
});

require POCETNIDIREKTORIJUM.'/app/core/baza.php';
require POCETNIDIREKTORIJUM.'/app/core/model.php';
require POCETNIDIREKTORIJUM.'/app/core/funkcije.php';
require POCETNIDIREKTORIJUM.'/app/core/kontrolor.php';
require POCETNIDIREKTORIJUM.'/app/core/app.php';
