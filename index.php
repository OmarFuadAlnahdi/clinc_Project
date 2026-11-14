<?php
require 'database.php';
require 'functions.php';
require 'router.php';
require 'Data_Validation.php';
require 'authin.php';



$router = [
    
    '/' => 'Views/index.view.php',
    '/register' => 'Controllers/register.php',
    '/login' => 'Controllers/login.php',
    '/404.php' => 'Views/StatusCodes/404.php',
    '/adminPage' => 'Controllers/admin/home.php',
    '/receptionistPage' => 'Controllers/receptionist/home.php',
    '/add_appoint' => 'Controllers/receptionist/home.php',
    '/adminPage' => 'Controllers/admin/home.php',
    '/AdminEmployeePage' => 'Controllers/admin/employees.php'
];

$ProjectName = "Scoppa HIT";
$name = "Home";



$DV = new DataValidation();

$Obj_email = $DV->password("Aa133133");
echo $Obj_email[0];
echo $Obj_email[1];
echo $Obj_email[2];








// $uri = $_SERVER['REQUEST_URI'];
// require router($uri,$router);





















