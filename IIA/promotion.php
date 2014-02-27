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
        <h1> Liste des étudiants </h1>
        
        <p> <a href="index.php">Retour </a></p>        
        
        <?php     
        
        
           $dns = 'mysql:host=localhost;dbname=iia'; // la connexion reste la même
           $dbUser = 'root';
           $dbPass = '';

            $odb =new PDO($dns, $dbUser,$dbPass);   
 /*                  
            catch(Exception $e)         // gère les erreurs
            {
                echo 'Erreur : ' .$e->getMessage().'<br />'; // affiche le message d'erreur
                echo 'N° : '.$e->getCode(); // affiche le num d'erreur
                
                exit();
            }
            $pdo->begintransaction() ; // initialise la transaction
  */             
            
            
            $oResultat = $odb->query('SELECT * FROM etudiant ORDER BY ETU_NOM, ETU_PRE ASC'); 
            $oResultat->setFetchMode(PDO::FETCH_OBJ); // utilisation d'objet
            
            echo 'liste des ', $oResultat->rowCount(), ' etudiant(s) de l\'IIA : ';
            while ($oEtudiant = $oResultat->fetch()) { // boucle qui affiche toutes les lignes
              echo '<p>';
                echo strtoupper($oEtudiant->ETU_NOM), ' ' , $oEtudiant->ETU_PRE; // strtoupper = CAPS LOCK
              echo '</p>';              
            } // fetch bouge le curseur et affiche la ligne
            
            
     
        ?>
    </body>
</html>
