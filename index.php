<?php

// Includo il file data.php che contiene i dati dei prodotti
include __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Pet Shop Products</h1>
    <ul>
        <?php foreach ($prodotti as $prodotto) {
            echo "<li>" . $prodotto->descrizione() . "</li>";
        } ?>
    </ul>

    <h2> prodotti</h2>
    <pre>
        <?= var_dump($prodotti) ?>
    </pre>

</body>

</html>
