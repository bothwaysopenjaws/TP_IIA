<?php          
       
           $dns = 'mysql:host=localhost;dbname=iia'; // la connexion reste la même
           $dbUser = 'root';
           $dbPass = '';

            $odb =new PDO($dns, $dbUser,$dbPass);   
                            
            $oResultat = $odb->prepare('SELECT *'
                                . ' FROM etudiant'
                                . ' WHERE pro_id = :param'
                                . ' ORDER BY ETU_NOM, ETU_PRE ');                     
           
            $oResultat->execute(array(':param' => ($_GET['PRO_ID'])));

