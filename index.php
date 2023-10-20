<?php
require 'core/baza.php';
require 'core/ruter.php';

$ruter = new Ruter($pdo);
$ruter->route();
?>

