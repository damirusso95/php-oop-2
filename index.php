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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1>Pet Shop Products</h1>
    <div class="product-cards">
        <?php if (isset($prodotti) && is_array($prodotti)) { ?>
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="card">
                    <!-- Stampa l'immagine del prodotto -->
                    <img src="<?= $prodotto->getImmagine() ?>" alt="<?= $prodotto->getNome() ?>">
                    <!-- Stampa il nome del prodotto -->
                    <h2><?= $prodotto->getNome() ?></h2>
                    <!-- Stampa la descrizione del prodotto -->
                    <p><?= $prodotto->getDescrizione() ?></p>
                    <!-- Stampa la categoria del prodotto -->
                    <p>Categoria: <?= $prodotto->getCategoria()->getNome() ?></p>
                    <!-- Stampa la descrizione della categoria -->
                    <p><?= $prodotto->getCategoria()->getDescrizione() ?></p>
                    <!-- Stampa l'icona della categoria -->
                    <i class="<?= $prodotto->getCategoria()->getIcona() ?>"></i>
                    <!-- Stampa il prezzo del prodotto -->
                    <p class="price">€<?= $prodotto->getPrezzo() ?></p>
                    <!-- Stampa la classe del prodotto -->
                    <p>Questo è un "<?= $prodotto->getNome() ?>", con prezzo €<?= $prodotto->getPrezzo() ?>, di classe <?= $prodotto->getClasseProdotto() ?>.</p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No products found.</p>
        <?php } ?>
    </div>
</body>

</html>

