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
        
          ajouter un élève  : <form method="post" action="" />
            <input type="text" />
             <input type="Submit" />         
            
        </form>
        
        <?php          
       
           $dns = 'mysql:host=localhost;dbname=iia'; // la connexion reste la même
           $dbUser = 'root';
           $dbPass = '';

            $odb =new PDO($dns, $dbUser,$dbPass);   
            $pdo->begintransaction() ; // initialise la transaction
                            
            $proID = $odb->quote($_GET['PRO_ID']); //protège le paramètre reçu en paramètre contre les injections (pas optimalà
                   
            $oResultat = $odb->query('SELECT * '
                    . 'FROM etudiant '
                    . 'WHERE PRO_ID=' . $odb->quote($_GET['PRO_ID'])
                    . 'AND PRO_NOM = :PRO_NOM'
                    . ' ORDER BY ETU_NOM, ETU_PRE'); 
            
            $oResultat->setFetchMode(PDO::FETCH_OBJ); // utilisation d'objet

            $odb->prepare( ' SELECT * '
                    . 'FROM etudiant '
                    . 'WHERE promotion_id = :param '. $odb->quote($_GET['PRO_ID'])
                    . 'ORDER BY ETU_NOM, ETU_PRE)'
                    . ' ORDER BY ETU_NOM, ETU_PRE');                     
            
            $oResultat->execute( 'PRO_ID' => ($_GET['PRO_ID']),
                    'PRO_NOM' => ($_GET['PRO_NOM']));

  
            echo 'liste des ', $oResultat->rowCount(), ' etudiant(s) de l\'IIA : ';
            while ($oEtudiant = $oResultat->fetch()) { // boucle qui affiche toutes les lignes
              echo '<p>';
                echo strtoupper($oEtudiant->ETU_NOM), ' ' , $oEtudiant->ETU_PRE; // strtoupper = CAPS LOCK
              echo '</p>';              
            } // fetch bouge le curseur et affiche la ligne
            
           
     
        ?>
          
          
        <p> <a href="index.php">Retour </a></p>             
          
    </body>
</html>
