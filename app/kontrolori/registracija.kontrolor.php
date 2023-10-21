<?php

namespace Kontrolor;

class RegistracijaKontrolor {

		use GlavniKontrolor;

    public function index() {

        $greske = [];
				$korisnikModel = new \Model\KorisnikModel();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        		$greske = [];
            $korisnickoIme = $_POST['korisnickoIme'];
            $ime = $_POST['ime'];
            $sifra = $_POST['sifra'];
            $ponovljenaSifra = $_POST['potvrda_sifra'];

            if(empty($korisnickoIme)) {
                $greske[] = 'Korisničko ime je obavezno.';
            }

            if(empty($ime)) {
                $greske[] = 'Ime je obavezno.';
            }

            if(empty($sifra)) {
                $greske[] = 'Šifra je obavezna.';
            }

						if($sifra != $ponovljenaSifra) {
							$greske[] = 'Sifre se ne podudaraju.';
						}

            if(empty($greske)) {
							try {
								$korisnik = $korisnikModel->kreirajKorisnika($korisnickoIme, $ime, $sifra);
								$_SESSION['korisnik'] = $korisnik;
								header('Location: /');
								exit;
							} catch (\PDOException $e) {
								$greske[] = 'Serverska greska: ' . $e->getMessage();
							}
            }
        }

				$this->view("registracija", ['greske' => $greske]);
    }
}
?>
