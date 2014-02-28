<?php

    class My_Entity_Promotion
    {
        /*
         * Retourne toutes les promotions
         * @return \PDOstatements
         */
        static function findall()
        {
            $odb = My_Db::getDb() ; // appel de la fonction renvoyant la méthode My_DB
            $oResultat = $odb->query('SELECT *'
                    . ' FROM promotion'
                    . ' ORDER BY PRO_NOM ASC'); 
            $oResultat->setFetchMode(PDO::FETCH_OBJ); // utilisation d'objet    


            return $oResultat;
        }
    }

?>