<?php 

defined('POCETNIDIREKTORIJUM') OR exit('Zabranjen pristup');

spl_autoload_register(function($classname){
	$classname = explode("\\", $classname);
	$classname = end($classname);
  $classname = strtolower(str_replace('Model', '', $classname));
	$imeFajla = "../app/modeli/".$classname.".php";
	if(file_exists($imeFajla))
	{
			require $imeFajla;
	}
});

require 'baza.php';
require 'model.php';
require 'funkcije.php';
require 'kontrolor.php';
require 'app.php';
