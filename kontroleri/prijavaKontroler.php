<?php
class PrijavaKontroler {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $greske = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
						$greske = [];
            $korisnickoIme = $_POST['korisnickoIme'];
            $sifra = $_POST['sifra'];

            // Validacija
            if(empty($korisnickoIme)) {
                $greske[] = 'Korisničko ime je obavezno.';
            }

            if(empty($sifra)) {
                $greske[] = 'Šifra je obavezna.';
            }

            if(empty($greske)) {
								// Provera baze
							try {
                $stmt = $this->pdo->prepare('SELECT * FROM users_pr1 WHERE username = ?');
                $stmt->execute([$korisnickoIme]);
                $korisnik = $stmt->fetch();

                if($korisnik && password_verify($sifra, $korisnik['password'])) {
                    $_SESSION['loginovan'] = true;
                    $_SESSION['korisnik'] = $korisnik;
                    header('Location: ?stranica=pocetna');
                    exit;
                } else {
                    $greske[] = 'Pogrešno korisničko ime ili šifra.';
                }
							} catch (\PDOException $e) {
								$greske[] = 'Serverska greska: ' . $e->getMessage();
							}
            }
        }

        require 'views/prijava.php';
    }
}
?>
