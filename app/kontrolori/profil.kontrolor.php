<?php

namespace Kontrolor;

class ProfilKontrolor {

    use GlavniKontrolor;

    private $narudzbinaModel;

    public function __construct() {
        $this->narudzbinaModel = new \Model\NarudzbinaModel();
    }

    public function index() {
        $userId = $_SESSION['korisnik']->id;
        $narudzbine = $this->narudzbinaModel->dohvatiNarudzbePoUserId($userId);
        $this->view("profil", ['narudzbine' => $narudzbine]);
    }
}
