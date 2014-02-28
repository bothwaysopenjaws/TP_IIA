<!DOCTYPE html >

Front controler


<?php


require '../library/param.php';

function __autoload($pClassName) {
    
    $pClassName = str_replace('_', '/', $pClassName); // Remplace les _ par des / ( My_Db -> My/Db
    
    require '../applications/models/' . $pClassName . '.php';
}


$controller =  '../applications/controllers/ctrl-' . $_GET['page'] . '.php';
$view = '../applications/views/view-' . $_GET['page'] . '.php';


if (is_file($controller) == true ) {
    require $controller;
    if (is_file($view) == true){
        require $view;
    }
} else{
    // sinon page d'erreur
}

?>

