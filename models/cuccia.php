<?php

class Cuccia extends Prodotto {
    public $dimensioni;
    public $materiale;

    public function __construct($id, $nome, $descrizione, $prezzo, Categoria $categoria, $dimensioni, $materiale) {
        parent::__construct($id, $nome, $descrizione, $prezzo, $categoria);
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
    }

    public function getDimensioni() {
        return $this->dimensioni;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function descrizione() {
        return parent::descrizione() . " - Dimensioni: " . $this->dimensioni . " - Materiale: " . $this->materiale;
    }
}
