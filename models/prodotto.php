<?php

class Prodotto {
    public $id;
    public $nome;
    public $descrizione;
    public $prezzo;
    public $categoria;
    public $immagine;  

    public function __construct($id, $nome, $descrizione, $prezzo, Categoria $categoria,$immagine) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->immagine = $immagine;  
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
    
    public function getImmagine() {
        return $this->immagine;
    }

    public function getClasseProdotto() {
        return get_class($this);
    }

    public function descrizione() {
        return $this->nome . " (" . $this->categoria->getNome() . "): " . $this->descrizione . " - €" . $this->prezzo;
    }
}
