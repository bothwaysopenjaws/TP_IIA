<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
           $dns = 'mysql:host=localhost;dbname=iia';
           $dbUser = 'root';
           $dbPass = '';

            $odb =new PDO($dns, $dbUser,$dbPass);   // creer un objet de connexion  
 /*                  
            catch(Exception $e)         // gère les erreurs
            {
                echo 'Erreur : ' .$e->getMessage().'<br />'; // affiche le message d'erreur
                echo 'N° : '.$e->getCode(); // affiche le num d'erreur
                
                exit();
            }
            $pdo->begintransaction() ; // initialise la transaction
  */             
            
            
            $oResultat = $odb->query('SELECT * FROM promotion ORDER BY PRO_NOM ASC'); 
            $oResultat->setFetchMode(PDO::FETCH_OBJ); // utilisation d'objet
            
            echo 'liste des ', $oResultat->rowCount(), ' promotions de l\'IIA : ';
            while ($oPromotion = $oResultat->fetch()) { // boucle qui affiche toutes les lignes
              echo '<p>';
                echo '<a href="promotion.php?PRO_ID=', $oPromotion->PRO_ID, '">';
                    echo $oPromotion->PRO_NOM;
                echo '</a>'; // href creer un lien hypertexte
              echo '</p>';              
            } // fetch bouge le curseur et affiche la ligne
            
            

        
            
        ?>
    </body>
</html>
