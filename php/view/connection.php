<?php

try{
$base = new PDO('mysql:host=localhost; dbname=biskot','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

}
catch(exception $e) {
    die('Erreur'.$e->getMessage());
}
?>

<?php
session_start();
$requete = $base->query('SELECT * FROM equipe WHERE pseudo="'.$_POST["pseudo"].'" AND mdp="'.$_POST["MDP"].'"');

    $tab2 = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($tap2);

    if(!empty($tab2)){
    foreach ($tab2 as $key => $value) {

        $_SESSION["id"]=$value["id"];
        $_SESSION["prenom"]=$value["prenom"];
        $_SESSION["pseudo"]=$value["prenom"];
        $_SESSION["mdp"]=$value["mdp"];
        $_SESSION["admin"]=$value["admin"];

    }
        //if
        //else
        







    }
