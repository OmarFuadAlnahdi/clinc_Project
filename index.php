<?php
require 'database.php';
require 'functions.php';
require 'router.php';


$router = [
    
    '/' => 'Views/index.view.php',
    '/register' => 'Controllers/register.php',
    '/login' => 'Controllers/login.php',

];

$ProjectName = "Scoppa HIT";
$name = "Home";



$uri = $_SERVER['REQUEST_URI'];


require router($uri,$router);




























