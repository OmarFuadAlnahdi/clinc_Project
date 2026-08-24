<?php 


$error = "";


$pageName = "Log in";

$db = new database();



if ($_SERVER['REQUEST_METHOD'] == "POST") 
{

    $stmt = $db->query("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
        ':email' => $_POST['email']
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        if ($user['password'] != $_POST['password']) {
            
            $error = "The password is incorrect!";
        }

        if ($user['password'] == $_POST['password']) {
            
           if ($user['prio'] == 1) {

            header("Location:adminPage");
               echo "the user is logged in ";
               
           }
           if ($user['prio'] == 2) {

            header("Location:receptionistPage");
               echo "the user is logged in ";
               
           }
           if ($user['prio'] == 3) {

            header("Location:doctorPage");
               echo "the user is logged in ";

               
           }
           if ($user['prio'] == 4) {

            header("Location:patientPage");
               echo "the user is logged in ";

               
           }


        }

        
    }
    else {
        $error = "The email is inccorect";
    }
}








require 'Views/login.view.php';
