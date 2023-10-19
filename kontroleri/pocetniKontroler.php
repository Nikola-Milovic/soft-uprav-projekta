<?php
class PocetniKontroler {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        require 'views/pocetna.php';
    }
}
?>
