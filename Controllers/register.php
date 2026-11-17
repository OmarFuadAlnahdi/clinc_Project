<?php





$PageName = "Register";


$error = "";
$RegisterErrors = "";
$typerequest = "";



$db = new database();
$authin = new authin();
$DV = new DataValidation();


//initalaizing the classes 

$REQName = "O9ma3r";
$REQemail ="devumar0@gmail.com";
$REQpassword = "Aa133133";
$REQpasswordSEC = "";



if ($_SERVER['REQUEST_METHOD'] == "post" && $typerequest == "") {

        if (isset($_POST['type_request']) == "register") {
            $typerequest = "register";
        //this will search for the form that was submited
}

// to check if the user submited the registeration form ot another
// form (just in case if we need to add more forms )
if ($_SERVER['REQUEST_METHOD'] === 'post' && $typerequest == "register") {

    echo $typerequest;

    // these methods will return an object with three values (bool,type of error,name or a message);
    $name = $DV->name($REQName); 
    //check the name string is it valid to use this name as person
    $email = $DV->email($REQemail);
    
    // checking the email and returning 3 values inside an array.

    $password = $DV->password($REQpassword);
    $passwordSEC = $DV->password($REQpasswordSEC);

    if ($name[0]) {
        echo $name[2];
    }
    if ($email[0]) {
        echo $email[2];
    }
    if ($password[0]) {
        echo $password[2];
    }
    if ($passwordSEC[0]) {
        echo $passwordSEC[2];
    }

    // these methods will return an object with two values (bool,name or a message);
    $Result = $authin->checkEmailExist($email);
    $SamePass = Samepass($password,$passwordSEC);


    $authin->Check_Email_exist($email);

    if ($Result) {
        $RegisterErrors = "Email is exist!";
    }

    
    if (!($name[0])) {
        if ($name[1] == "empty") {
            $RegisterErrors = "name is requred!";
        }
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

        if ($email[1] == "Email") {
            $RegisterErrors = "It's not an email!";
        }
        if ($email[1] == "long") {
            $RegisterErrors = "your email is too long!";
        }
        if ($email[1] == "domain") {
            $RegisterErrors = "the domain is not correct!";

        }if ($email[1] == "exist") {
            $RegisterErrors = "the email is aleardy signed in!";
        }
    }





    if (!($SamePass)) {
        $RegisterErrors = "inccorect password!"; 
    }
    elseif ($SamePass) {
        $user = [
        'name' => $name[2],
        'email' => $email,
        'password' => $SamePass
    ];
        $db->addUser($user);
    }
    

    
}


// if ($_SERVER['REQUEST_METHOD'] === 'post' && $typerequest == "register") {

// }






























// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $stmt = $db->query("INSERT INTO users (name,reg_date,email,password) 
//     VALUES (:name,:reg_date, :email, :password) ");




// $data = [
//     ':name' => $_POST['name'],
//     ':reg_date' => date("y-m-d"),
//     ':email' => $_POST['email'],
//     ':password' => $_POST['pass']
// ] ;


   
// if (isDatafilled($data)) 
// {
    
//     if ($_POST['pass'] == $_POST['Repass']) {
//         $result = $stmt->execute($data);


//         if ($result) {
//             $error = "All good!";
//             header("Location:login");
//         } 
//     }
//     else{
//         $error = "Check the password please!";
//     }
// }
// else{
//     $error = "Fill the data first!";
// }






// }














require_once 'Views/register.view.php';

