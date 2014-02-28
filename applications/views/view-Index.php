<!DOCTYPE html >
<html>
    <head>
        <meta charset="UTF-8">
        <title> IIA </title>
        
    </head>
    <body>
        <h1> Liste des promotions </h1>
        
        
          ajouter une classe  : <form method="post" action="" />
            <input type="text" />
             <input type="Submit" />         
            
        </form>           
        
        <?php

            echo 'liste des ', $oResultat->rowCount(), ' promotions de l\'IIA : ';
            
            while ($oPromotion = $oResultat->fetch()) { // boucle qui affiche toutes les lignes
              echo '<p>';
                echo '<a href="Promotion.php?PRO_ID=', $oPromotion->PRO_ID, '">';
                    echo $oPromotion->PRO_NOM;
                echo '</a>'; // href creer un lien hypertexte
              echo '</p>';              
            } // fetch bouge le curseur et affiche la ligne
   
            

        
            
        ?>  

 
    </body>
</html>

