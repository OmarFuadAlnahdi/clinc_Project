<?php





$PageName = "Register";


$error = "";
$RegisterErrors = "";



$db = new database();
$authin= new authin();
$DV = new DataValidation();


//initalaizing the classes 





$typerequest = "";

$typerequest = $_POST['type_request'];


// data vaidation 


$Result = $authin->checkEmailExist($email);

if ($Result) {
    $error = "exist";
    //this data will be used in the view of the registration page using it means when 
    //error = exist i will make an <a/> element that will lead the user to the login 
    //page after asking him
}


if ($_SERVER['REQUEST_METHOD'] == "post" && $typerequest == "") {
        
}


if ($_SERVER['REQUEST_METHOD'] === 'post' && $typerequest == "register") {
    $name = $DV->name($REQName); // these methods will return an object with three values (bool,type of error,name or a message);
    $email = $DV->email($REQemail);
    $password = $DV->password($REQpassword);
    $passwordSEC = $DV->password($REQpasswordSEC);
    // these methods will return an object with two values (bool,name or a message);

    $SamePass = Samepass($password,$passwordSEC);

    if (!($name[0])) {
        if ($name[1] == "long") {
            $RegisterErrors = "your name is too long!";
        }
        if ($name[1] == "number") {
            $RegisterErrors = "your name has a number!";

        }if ($name[1] == "syntext") {
            $RegisterErrors = "your name don't make sense!";
            
        }
    }
    if (!($email)[0]) {
        
    }





    if (!($SamePass)) {
        $RegisterErrors = "inccorect password!"; 
    }
    elseif (!($SamePass)) {
       $user = [
        'name' => $name,
        'email' => $email,
        'password' => $SamePass
    ];

    $db->addUser($user);

    }
    

    
}


// if ($_SERVER['REQUEST_METHOD'] === 'post' && $typerequest == "register") {

// }






























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
            header("Location:login");
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

