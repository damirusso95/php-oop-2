<?php

class Cibo extends Prodotto {
    public $scadenza;
    public $ingredienti;

    public function __construct($id, $nome, $descrizione, $prezzo, Categoria $categoria, $immagine, $scadenza, $ingredienti) {
        parent::__construct($id, $nome, $descrizione, $prezzo, $categoria, $immagine);
        $this->scadenza = $scadenza;
        $this->ingredienti = $ingredienti;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

    public function getIngredienti() {
        return $this->ingredienti;
    }

    public function descrizione() {
        return parent::descrizione() . " - Scadenza: " . $this->scadenza . " - Ingredienti: " . implode(", ", $this->ingredienti);
    }
}
