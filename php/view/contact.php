<h2><div id="contact">Biskot est là pour répondre à vos questions</div></h2>



<form name="bisckotform" action="traitementcontact.php" method="post">

<fieldset>
 <legend> Vos informations : </legend>
   <p> Nom :
        <br/>
        <input type="text"  required="required" name="nom" value="" placeholder="veuillez entrer votre nom"/>
        <br/> 
    </p>
    <p>
       Prénom:
        <br/>
        <input type="text"  required="required" name="prenom" value="" placeholder="veuillez entrer votre prénom"/>
        <br/>
    </p>
    <p>
       Email :
       <br/>
        <input type="text" name="email" value="" placeholder="exemple: azerty@outlook.fr"/>
       <br/>   
    </p>
    <p>
            <select name="profil">
   
                <option value="particulier" selected="selected">Un particulier</option>
                <option value="professionnel">Un professionnel</option>
            </select>
       <br/>
    </p>
    <p>

</fieldset>
<fieldset>
 <legend>Commentaire :</legend>
        Votre message :
        <br/>
        <textarea name="commentaire" rows="6" cols="40" placeholder="Exprimez vous et donnez nous un maximum de détails"></textarea>
</fieldset>
   
    </p>

       <button type="submit" value="Envoyer" name="envoyer">Envoyer</button> 
    
</form>

