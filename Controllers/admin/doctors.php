<?php


require "../../functions.php";
require "../../database.php";



// to reload the page
$pagePath = "../admin/doctors.php";

// this used for the title page and also in the view
$PageName = "Doctors Displayer";

// creating classes


$stmt = new database();

$result = $stmt->query("SELECT * FROM doctors");
$result->execute();
$doctors = $result->fetchAll(PDO::FETCH_ASSOC); 





// this is the error messages
$error = "";
$error2 = "";


// vars for vaildation knowing if the user entered a vaild argument
// this is for adding a new doctor 
// i added a just to now it's adding
$user_id = "";
$ayearsexp = "";
$asummery = "";

// vars for vaildation knowing if the user entered a vaild argument
// this is for adding a new doctor 
// i added e just to now it's editing
$doctor_id = "";
$eyearsexp = "";
$esummery = "";






if($_SERVER['REQUEST_METHOD'] == "POST"){

        for ($i=0; $i < count($doctors); $i++) { 
            
            if (isset($_POST['delete' . $doctors[$i]['id']])) { 
                
                $sql = "delete FROM doctors WHERE id = " . $doctors[$i]['id'] ;
                $result = $stmt->query($sql);
                $result->execute();
                reloadthepage($pagePath);

            }
        
            

        }


        if (isset($_POST['userid'])) {
            
            $user_id = $_POST['userid'];
            $ayearsexp = $_POST['addyearsexp'];
            $asummery = $_POST['addsummery'];
        }
       
       



        if (!(isEmpty($user_id))) {
            

            if(!(isEmpty($ayearsexp))){

                if(!(isEmpty($asummery))){

                    try {
                        $result = $stmt->query("INSERT INTO doctors (user_id,years_exp,Summray) VALUES (:user_id,:years_exp,:Summray)");
                        $result->execute([
                        ':user_id' => ReturnIfnotnull($user_id),
                        ':years_exp' => ReturnIfnotnull($ayearsexp),
                        ':Summray' => ReturnIfnotnull($asummery)
                        
                    ]);

                    reloadthepage($pagePath);

                    

                    


                    } catch (\Throwable $th) {
                        $error = "we facing an error make sure that all the fileds are true";
                    }
                   
                    


                }
                else{
                    $error = "Summry is required!";
                }
            } 
            else{
                $error = "the years experince is required!";
            }


        }
        else{
            $error = "the user id is required!";
        }

        
        if (isset($_POST['doctorid'])) {
            $doctor_id = $_POST['doctorid'];
            $eyearsexp = $_POST['edityearsexp'];
            $esummery = $_POST['editsummry'];
        }

        if (!(isEmpty($doctor_id))) {
            
            if (!(isEmpty($eyearsexp))) {

                if (!(isempty($esummery))) {
                    try {

                        $result = $stmt->query("UPDATE doctors SET years_exp = :yearsexp, Summray = :Summray WHERE id = :id");
                        $result->execute([
                        ':id' => ReturnIfnotnull($doctor_id),
                        ':yearsexp' => ReturnIfnotnull($eyearsexp),
                        ":Summray" => ReturnIfnotnull($esummery)
                        
                        
                    ]);
                    //this method will refresh the page so the vars will be empty 
                    reloadthepage($pagePath);


                        
                    } catch (\Throwable $th) {
                        $error2 = "we facing an error make sure that all the fileds are true";
                        
                    }    




                }
                else {
                    $error2 = "summry is required!";
                }
            }else{
                $error2 = "tears experince is required!";
            }
        }
        else{
            $error2 = "doctor id is required!";
        }

}










require '../../Views/Pages/adminPages/doctors.php';