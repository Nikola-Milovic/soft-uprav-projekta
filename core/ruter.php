<?php
class Ruter {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function route() {
        session_start();
        $stranica = isset($_GET['stranica']) ? $_GET['stranica'] : '';

        switch($stranica) {
            case 'prijava':
                require 'kontroleri/prijavaKontroler.php';
                $kontroler = new PrijavaKontroler($this->pdo);
                break;

            case 'registracija':
                require 'kontroleri/registracijaKontroler.php';
                $kontroler = new RegistracijaKontroler($this->pdo);
                break;

            case 'pocetna':
								require 'kontroleri/pocetniKontroler.php';
								$kontroler = new PocetniKontroler($this->pdo);
                break;
        }

        $kontroler->index();
    }
}
?>
