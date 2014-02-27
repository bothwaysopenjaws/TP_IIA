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
            
            
            
            $promotion = $oResultat->fetch(); // fetch bouge le curseur et affiche la ligne
            
            
            echo '<p>', $promotion['PRO_NOM'], '</p>';
        
            
        ?>
    </body>
</html>
