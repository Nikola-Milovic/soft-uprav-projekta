<?php 

defined('POCETNIDIREKTORIJUM') OR exit('Zabranjen pristup');

// spl_autoload_register(function($classname){
// 	$classname = explode("\\", $classname);
// 	$classname = end($classname);
// 	require $filename = "../app/modeli/".ucfirst($classname).".php";
// });

require 'funkcije.php';
require 'baza.php';
require 'kontrolor.php';
require 'app.php';
