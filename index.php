<?php
require 'database.php';
require 'functions.php';
require 'router.php';


$router = [
    
    '/' => 'Views/index.view.php',
    '/register' => 'Controllers/register.php',
    '/login' => 'Controllers/login.php',
    '/404.php' => 'Views/StatusCodes/404.php',
    '/adminPage' => 'Controllers/admin/home.php',
    '/receptionistPage' => 'Controllers/receptionist/home.php'


];

$ProjectName = "Scoppa HIT";
$name = "Home";



$uri = $_SERVER['REQUEST_URI'];


require router($uri,$router);




























