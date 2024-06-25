<?php

class Categoria {
    public $id;
    public $nome;
    public $descrizione; 
    public $icona; 

    public function __construct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->icona = $icona;
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
    
    public function getIcona() {
        return $this->icona;
    }
}
