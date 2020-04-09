<?php

session_start();
if(isset($_SESSION[`ID`]) )
{

    $request=$base->query('SELECT * FROM utilisateur');
    $tab = $request->fetchAll(PDO::FETCH_ASSOC);

    echo' <table class="table table-striped">
    <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">email</th>
        <th scope="col">commentaire</th>e
        <th scope="col">mdp</th>
        <th scope="col">pseudo</th>
        <th scope="col">admin</th>

    </tr>';
    foreach (tab as $key => $value) {

?>
<tr>
    <th scope="col" align="center"><?php echo $value['id'];?></th>
    <td scope="col" align="center"><?php echo $value['nom'];?></th>
    <td scope="col" align="center"><?php echo $value['prenom'];?></th>
    <td scope="col" align="center"><?php echo $value['email'];?></th>
    <td scope="col" align="center"><?php echo $value['commentaire'];?></th>
    <td scope="col" align="center"><?php echo $value['mdp'];?></th>
    <td scope="col" align="center"><?php echo $value['pseudo'];?></th>
    <td scope="col" align="center"><?php echo $value['admin'];?></th>
   <?php if ($value['admin']=="0"){
       /*Ne pas oublier de changer a href*/
    echo '<td scope="col"align="center"><a href="droitsadmin.php?id = '.$value['id'].'"button type="button" class="btn-outline-success">Donner les droits admins</button></a> </td>';   
   }
 else{
    echo '<td scope="col"align="center"><a href="droitsadmin.php?id = '.$value['id'].'"button type="button" class="btn-outline-danger">Retirer les droits admins</button></a> </td>';
 }
 ?>
 <?php if ($value['actif']=="0"){
    echo '<td scope="col"align="center"><a href="droitsadmin.php?id = '.$value['id'].'"button type="button" class="btn-outline-danger">Compte bloquer</button></a> </td>';
 }
 else{
    echo '<td scope="col"align="center"><a href="droitsadmin.php?id = '.$value['id'].'"button type="button" class="btn-outline-success">Compte débloquer</button></a> </td>';
 }
 ?>

</tr>

<?php
    }}
    ?>