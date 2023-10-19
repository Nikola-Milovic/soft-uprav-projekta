<?php
class PocetniKontroler {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $loginovan = isset($_SESSION['loginovan']) && $_SESSION['loginovan'] == true;
				$korisnik = $_SESSION['korisnik'];
        require 'views/pocetna.php';
    }
}
?>
