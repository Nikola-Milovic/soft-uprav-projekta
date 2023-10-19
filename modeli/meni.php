<?php
class MeniModel {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function dohvatiJela() {
        $stmt = $this->pdo->prepare('SELECT * FROM menu_pr1');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
