<section>
        <h2><div id="Nos Points De Ventes"> Points De Ventes</div></h2>

<<<<<<< HEAD
        <!--<div style="position:relative; height:400px">
            <div style="position:absolute;z-index:1">
=======
        <div style="position:relative; height:400px">
            <div style="position:absolute; z-index:1; height:100%">
>>>>>>> 500e7517504662cdedc68015b5daa540a7b4d502
               <img src="assets/img/carte1.jpg" alt="carte france">
               <img src="assets//img/carte2.png" alt="carte USA">
            </div>
            <!-- <div style="position:absolute;top:360px; width:600px; height:400px; z-index:2;font-size:200%">
            </div> --> 
        </div>
<<<<<<< HEAD
        </section><!-->

        <div class="container"> 
<?php
    $tableau    = [ "carte1.jpg", "carte2.png"];
    $tableauAlt = ["alt1", "alt2" ];
    for($i=0; $i < count($tableau); $i++)
    {
        echo
    <<<CODEHTML
                <img src="assets/img/$tableau[$i] " alt="$tableauAlt[$i]">
     
    CODEHTML;    
    }
?>    
</div>
=======
</section>
>>>>>>> 500e7517504662cdedc68015b5daa540a7b4d502
