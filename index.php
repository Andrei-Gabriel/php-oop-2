<?php
    require_once __DIR__.'/classes/utenti.php';
    require_once __DIR__.'/classes/prodotti.php';
    require_once __DIR__.'/classes/tipi-prodotti.php';

    $utenti = [
        new Utenti("Michael", "Cash", "M"),
        new Utenti("Sara", "Banda", "F"),
        new Utenti("Guido", "Piano", "M"),
    ];

    $prodotti = [
        'FruttaVerdura' => new Prodotto("Mela", 1),
        'Pesce' => new Prodotto("Salmone", 9),
    ];
    $prodotti['FruttaVerdura'] = new TipiProdotto;
    $prodotti['FruttaVerdura']->setTipo("Frutta");
    $prodotti['Pesce'] = new TipiProdotto;
    $prodotti['Pesce']->setTipo("Pesce");

    var_dump($utenti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="#">
    <title>Document</title>
</head>
<body>
    
    <h1>Funge?</h1>

</body>
</html>