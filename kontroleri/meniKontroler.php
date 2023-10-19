<?php
class MeniKontroler {

    private $pdo;
    private $model;

    public function __construct($pdo) {
        require 'modeli/meni.php';
        $this->pdo = $pdo;
        $this->model = new MeniModel($pdo);
    }

    public function index() {
        $jela = $this->model->dohvatiJela();
        require 'views/meni.php';
    }
}
?>
