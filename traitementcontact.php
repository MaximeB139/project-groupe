<?php
$pdo = new PDO("mysql:host=localhost;dbname=biskot;charset=utf8;", "root", "");
//$pdoStatement = $pdo->prepare($requeteSQL);
//$pdoStatement->execute($tabAssoColonneValeur);


if( empty($prenom) || empty($nom) );
{
    echo "Veuillez remplir tout les champs du formulaire!";
} 
else{
   echo "Envoyer ! Nous faisons au mieux afin de vous répondre dans les plus brefs délais."; 
}
 


?>