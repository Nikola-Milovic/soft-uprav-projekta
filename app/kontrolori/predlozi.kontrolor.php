<?php

namespace Kontrolor;

class PredloziKontrolor {

    use GlavniKontrolor;

    public function index() {
        $this->view("predlozi");
    }
}
