<!DOCTYPE html >

Front Controller

<?php


require '../library/param.php';
require '../applications/models/My/Db.php';
require '../applications/models/My/Entity/Promotions.php';


$controller =  '../applications/controllers/ctrl-' . $_GET['page'] . '.php';
$view =  '../applications/views/view-' . $_GET['page'] . '.php';


if (is_file($controller) == true ) {
    require $controller;
    if (is_file($view) == true){
        require $view;
    }
} else{
    
    // sinon page d'erreur
}

?>

