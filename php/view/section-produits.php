<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biskot</title>
</head>
<body>
    <header>
         CODE A INCREMENTER PAR BAPTISTE
    </header>
    <main> -->

        <section id="produits">
            <h1>Nos produits</h1>
                <p>Du petit déjeuner au goûter, en passant par le dessert, nos produits vous accompagne dans toutes vos envies gourmandes.</p>
                <img class="imagePrincipal" src="assets/img/Biscottes.png" alt="Types de Biscottes">
                <div class="container">
<?php

$listeGalerie = glob("assets/img/Biskot*.png");
foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>        
           </div> 
        </section>
        
<!-- </main>
    <footer>
         CODE A INCREMENTER PAR MELODIE
    </footer>
</body>
</html> -->