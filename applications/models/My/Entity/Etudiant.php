<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class My_Entity_Etudiant
    {
        /*
         * Retourne toutes les promotions
         * @return \PDOstatements
         */
        static function findallEtu()
        {
            $odb = My_Db::getDb() ; // appel de la fonction renvoyant la méthode My_DB
            $oResultat = $odb->query('SELECT *'
                    . ' FROM promotion'
                    . ' ORDER BY PRO_NOM ASC'); 
            $oResultat->setFetchMode(PDO::FETCH_OBJ); // utilisation d'objet    


            return $oResultat;
        }


      
        
    }