<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> IIA </title>
    </head>
    <body>
        <h1> Liste des étudiants de la promo </h1>
        
          ajouter un élève  : <form method="post" action="" />
            <input type="text" />
             <input type="Submit" />         
            
        </form>       
        
<?php
            echo '<P>liste des ', $oResultat->rowCount(), ' etudiant(s) de l\'IIA : </p>';
            
            while ($oEtudiant = $oResultat->fetch()) { // boucle qui affiche toutes les lignes
              echo '<p>';
                echo strtoupper($oEtudiant->ETU_NOM), ' ' , $oEtudiant->ETU_PRE; // strtoupper = CAPS LOCK
              echo '</p>';              
            } // fetch bouge le curseur et affiche la ligne

?>  
     
        <p> <a href="Index.php"> Retour </a></p>             
          

    </body>
</html>