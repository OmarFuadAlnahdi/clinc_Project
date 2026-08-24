<?php




$PageName = "Register";


$db =  new database();


$error = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $stmt = $db->query("INSERT INTO users (name,reg_date,email,password) 
    VALUES (:name,:reg_date, :email, :password) ");




$data = [
    ':name' => $_POST['name'],
    ':reg_date' => date("y-m-d"),
    ':email' => $_POST['email'],
    ':password' => $_POST['pass']
] ;


   
if (isDatafilled($data)) 
{
    
    if ($_POST['pass'] == $_POST['Repass']) {
        $result = $stmt->execute($data);


        if ($result) {
            $error = "All good!";
            header("Location:login.php");
        } 
    }
    else{
        $error = "Check the password please!";
    }
}
else{
    $error = "Fill the data first!";
}






}














require_once 'Views/register.view.php';

