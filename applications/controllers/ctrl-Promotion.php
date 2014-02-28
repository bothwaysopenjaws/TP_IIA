


        <?php          
       
           $odb = My_Db::getDb();
                            
            $oResultat = $odb->prepare('SELECT *'
                                . ' FROM etudiant'
                                . ' WHERE PRO_ID = :param'
                                . ' ORDER BY ETU_NOM, ETU_PRE ASC'); 
            
           $aParametre = array(':param' => $_GET['PRO_ID']);
            $oResultat->execute($aParametre);
            $oResultat->setFetchMode(PDO::FETCH_OBJ);
  ?>
