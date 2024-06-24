<?php

// Includo il file data.php che contiene i dati dei prodotti
include __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Pet Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Pet Shop Products</h1>
    <div class="product-cards">
        <?php foreach ($prodotti as $prodotto) { ?>
            <div class="card">
                <img src="<?= $prodotto->getImmagine() ?>" alt="<?= $prodotto->getNome() ?>">
                <h2><?= $prodotto->getNome() ?></h2>
                <p><?= $prodotto->descrizione() ?></p>
                <?php if ($prodotto instanceof Cuccia) { ?>
                    <p>Dimensioni: <?= $prodotto->getDimensioni() ?></p>
                    <p>Materiale: <?= $prodotto->getMateriale() ?></p>
                <?php } ?>
                <p class="price">€<?= $prodotto->getPrezzo() ?></p>
            </div>
        <?php } ?>
    </div>
    </body>

</html>
    
