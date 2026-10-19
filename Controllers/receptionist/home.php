<?php




$pageName = "receptionist page";


// first of all the recpentonist will see the users
//then he will pick up one or search for one then he will 
// add an apponitment for that user when he add the page will ask for info that info is for apoointments orders then
//the infos are doctor id, time,date,turn number,id appointment

$db = new database();
$date = new DateTime();

$users = $db->getTable("users");
$doctors = $db->getTable("doctors");
// $user = $db->getrow("users",1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['userid'];
    $doctor =  $_POST['doctorid'];
    $time =  convertToInt($_POST['time']);

    $stmt = $db->query("INSERT INTO appoiments (user_id,from,To,doctor_id,date) VALUES(:user_id,:from,:To,:doctor_id,:date)");
    $result = $stmt->execute([
        ':user_id' => ReturnIfnotnull($user),
        ':from' => TimeFormatForHours(ReturnIfnotnull($time)),
        ':To' => TimeFormatForHours(ReturnIfnotnull($time + 1)),
        ':doctor_id' => ReturnIfnotnull($doctor),
        ':date' => date('y-m-d')
        
    ]);

}
else{
    echo "failed!";
}







require 'Views/Pages/receptionistPages/home.view.php';
