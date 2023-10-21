<?php

namespace Kontrolor;

class PrijavaKontrolor {

		use GlavniKontrolor;

    public function index() {
        $greske = [];

				$korisnikModel = new \Model\KorisnikModel();

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
							try {
								$korisnik = $korisnikModel->proveraKorisnika($korisnickoIme, $sifra);
                if($korisnik) {
                    $_SESSION['korisnik'] = $korisnik;
                    header('Location: /');
                    exit;
                } else {
                    $greske[] = 'Pogrešno korisničko ime ili šifra.';
                }
							} catch (\PDOException $e) {
								$greske[] = 'Serverska greska: ' . $e->getMessage();
							}
            }
        }

			$this->view("prijava", ['greske' => $greske]);
    }
}
?>
