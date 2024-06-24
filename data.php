<?php

// Includo i file che contengono le definizioni delle classi
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cuccia.php";

// Creo oggetti Categoria per le categorie "Cani" e "Gatti"
$cani = new Categoria(1, "Cani");
$gatti = new Categoria(2, "Gatti");

// Creo un array di prodotti con oggetti di diverse sottoclassi di Prodotto
$prodotti = [
    new Cibo(1, "Crocchette per cani", "Deliziose crocchette per il tuo cane", 29.99, $cani,"./IMG/crocchette.jpg", "2024-12-31", ["carne", "riso"]),
    new Gioco(2, "Palla per gatti", "Una palla colorata per il tuo gatto", 9.99, $gatti, "./IMG/download.jpg", "plastica", "10cm"),
    new Cuccia(3, "Cuccia per cani", "Una comoda cuccia per il tuo cane", 49.99, $cani, "./IMG/cucce-per-cani-300x300.jpg", "80x60x60cm", "legno")
];

?>
