<?php
class PocetniKontroler {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        session_start();

        $loginovan = isset($_SESSION['loginovan']) && $_SESSION['loginovan'] == true;

        require 'views/pocetna.php';
    }
}
?>
