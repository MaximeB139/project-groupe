<?php
$pdo = new PDO("mysql:host=localhost;dbname=biskot;charset=utf8;", "root", "");
//$pdoStatement = $pdo->prepare($requeteSQL);
//$pdoStatement->execute($tabAssoColonneValeur);


if( empty($_POST['prenom']) || empty($_POST['nom']) );
{
    echo "Veuillez remplir tout les champs du formulaire!";
} 
else{
    echo "Merci! Nous faisons au possilbe pour vous répondre dans les plus bref délais.";
}   
 


?>