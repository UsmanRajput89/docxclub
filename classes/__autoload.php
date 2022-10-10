<?php 

    // function __autoload($class){
    //     require  $class . ".php";
    // }      
    
    spl_autoload_register(function($class) {
        require  $class . ".php";
        // include 'classes/' . $class . '.class.php';
    });
?>