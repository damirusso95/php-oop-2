<?php

class Gioco extends Prodotto {
    public $materiale;
    public $dimensioni;

    public function __construct($id, $nome, $descrizione, $prezzo, Categoria $categoria, $materiale, $dimensioni) {
        parent::__construct($id, $nome, $descrizione, $prezzo, $categoria);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function getDimensioni() {
        return $this->dimensioni;
    }

    public function descrizione() {
        return parent::descrizione() . " - Materiale: " . $this->materiale . " - Dimensioni: " . $this->dimensioni;
    }
}
