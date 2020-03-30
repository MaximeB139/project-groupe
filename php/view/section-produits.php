<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> CHANGEMENT EFFECTUER CHEZ Baptiste
    <title>Biskot</title>
</head>
<body>
    <header>
         CODE A INCREMENTER PAR BAPTISTE
    </header>
    <main> -->

        <section id="produits">
            <h2><div id="Nos produits">Nos produits</div></h2>
                <p>Du petit déjeuner au goûter, en passant par le dessert, nos produits vous accompagne dans toutes vos envies gourmandes.</p>
                <img class="imagePrincipale" src="assets/img/Biscottes.png" alt="Types de Biscottes">
                <div class="container">
         



                
    
    <div class="image">


        <?php

        $tableau = glob("assets/img/Biskot*.png");
        $panier = ["bibi", "koko", "ttt","tt"];

        foreach ($tableau as $i => $image) {
         
            echo
<<<CODEHTML
     
<div>
<p>$panier[$i]</p>
<img src="$image">
</div>
CODEHTML;
        }

        ?>
