<?php
class RegistracijaKontroler {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        session_start();

        $greske = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $korisnickoIme = $_POST['korisnickoIme'];
            $ime = $_POST['ime'];
            $sifra = $_POST['sifra'];

            if(empty($korisnickoIme)) {
                $greske[] = 'Korisničko ime je obavezno.';
            }

            if(empty($ime)) {
                $greske[] = 'Ime je obavezno.';
            }

            if(empty($sifra)) {
                $greske[] = 'Šifra je obavezna.';
            }

            if(empty($greske)) {
                $hashovanaSifra = password_hash($sifra, PASSWORD_DEFAULT);

                $stmt = $this->pdo->prepare('INSERT INTO users_pr1 (username, name, password) VALUES (?, ?, ?)');
                $stmt->execute([$korisnickoIme, $ime, $hashovanaSifra]);

                $stmt = $this->pdo->prepare('SELECT * FROM users_pr1 WHERE username = ?');
                $stmt->execute([$korisnickoIme]);
                $korisnik = $stmt->fetch();
								$_SESSION['loginovan'] = true;
								$_SESSION['korisnik'] = $korisnik;
								header('Location: ?stranica=pocetna');
								exit;
            }
        }

        require 'views/registracija.php';
    }
}
?>
