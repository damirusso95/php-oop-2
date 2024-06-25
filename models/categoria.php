<?php

class Categoria {
    public $id; // Identificativo della categoria
    public $nome; // Nome della categoria
    public $descrizione; // Descrizione della categoria
    public $icona; // Icona della categoria

    // Costruttore della classe Categoria
    public function __construct($id, $nome, $descrizione, $icona) {
        // Inizializzazione delle proprietà della classe con i parametri passati al costruttore
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->icona = $icona;
    }

    // Metodi getter per le proprietà della classe
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }
    
    public function getIcona() {
        return $this->icona;
    }
}
?>

