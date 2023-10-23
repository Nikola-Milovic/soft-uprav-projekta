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

require POCETNIDIREKTORIJUM.'/app/baza.php';
require POCETNIDIREKTORIJUM.'/app/model.php';
require POCETNIDIREKTORIJUM.'/app/funkcije.php';
require POCETNIDIREKTORIJUM.'/app/kontrolor.php';
require POCETNIDIREKTORIJUM.'/app/app.php';
