<?php
function odjava()
{
	session_start();
	session_destroy();
	header('Location: /prijava');  
	exit;
}