<?php
session_start();
session_destroy();
header('Location: /?stranica=prijava');  
exit;
?>
