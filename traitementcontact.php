<?php
$pdo = new PDO("mysql:host=localhost;dbname=biskot;charset=utf8;", "root", "");
//$pdoStatement = $pdo->prepare($requeteSQL);
//$pdoStatement->execute($tabAssoColonneValeur);

var_dump($_POST);

if(isset($_POST['envoyer']))
{
    if (empty($_POST['nom']) || empty($_POST['prenom']))
    {
        echo" Veuillez remplir tout les champs du formulaire";
    }
    else{
$nom= ($_POST['nom']);
$prenom= ($_POST['prenom']);
$email= ($_POST['email']);
$profil= ($_POST['profil']);
$commentaire= ($_POST['commentaire']);
echo " nom : ".$nom." prenom : ".$prenom." email : ".$email." profil : ".$profil." commentaire : ".$commentaire." ";
}
}
else{
    echo "Vous n'avez pas encore validé le formulaire";
}



?>