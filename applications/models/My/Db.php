<?php

class My_Db
{
    
    
    static function getDb() // créer un
    {
    $dns = 'mysql:host=localhost;dbname=iia';
    $dbUser = 'root';
    $dbPass = '';
    $odb =new PDO($dns, $dbUser,$dbPass);   // creer un objet de connexion 
    
    return $odb;
        
    }
}