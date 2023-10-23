<?php

namespace Model;

class KorisnikModel {

    use PocetniModel;

    protected $tabela = 'users_nm1';

    public function kreirajKorisnika($korisnickoIme, $ime, $sifra) {
        $hashovanaSifra = password_hash($sifra, PASSWORD_DEFAULT);
        $this->umetni([
            'username' => $korisnickoIme,
            'name' => $ime,
            'password' => $hashovanaSifra
        ]);

				return $this->prvi(['username' => $korisnickoIme]);
    }

    public function proveraKorisnika($korisnickoIme, $sifra) {
        $korisnik = $this->prvi(['username' => $korisnickoIme]);

        if ($korisnik && password_verify($sifra, $korisnik->password)) {
            return $korisnik;
        }

        return false;
    }

    public function dohvatiProfil($korisnikId) {
        return $this->prvi(['id' => $korisnikId]);
    }
}

