<?php






$PageName = "Employees Displayer";


$stmt = new database();

$result = $stmt->query("SELECT * FROM employees");
$result->execute();
$employees = $result->fetchAll(PDO::FETCH_ASSOC);
// fetching the employees table 

$usersResult = $stmt->query("SELECT * FROM users");
$usersResult->execute();
$users = $usersResult->fetchAll(PDO::FETCH_ASSOC);

// fetching the users table


//creating the vars down below

$auserid = "";
$aname = "";
$aworkingdays = "";
$aposition = "";
$awarning = "";



//creating the vars down below for editing

$euserid = "";
$ename = "";
$eworkingdays = "";
$eposition = "";
$ewarning = "";


// errors for the forms
$error = "";
$error2 = "";



if($_SERVER['REQUEST_METHOD'] == "POST"){

        for ($i=0; $i < count($employees); $i++) { 
            
            if (isset($_POST['delete' . $employees[$i]['id']])) { 
                echo "selete is set";
                $sql = "DELETE FROM employees WHERE id = " . $employees[$i]['id'] ;
                $result = $stmt->query($sql);
                $result->execute();
                reloadthepage($pagePath);

                }
        
            

        }


        if (isset($_POST['userid'])) {
            $auserid = $_POST['userid'];
            $aname = $_POST['aname'];
            $aposition = $_POST['aposition'];
            $aworkingdays = $_POST['aworkdays'];
            $awarning = $_POST['awarnings'];
            echo "done!";
        }
       
       



        if (!(isEmpty($auserid))) {
            echo $auserid;

            if(!(isEmpty($aname))){
                echo $aname;

                if(!(isEmpty($aposition))){
                echo $aposition;


                    if (!(isEmpty($aworkingdays))) {
                        echo $aworkingdays;
                        
                        if (!(isEmpty($awarning))) {
                            try {
                                $result = $stmt->query("INSERT INTO employees (position,working_days,warnings,user_id) VALUES (:position,:working_days,:warnings,:user_id)");
                                $result->execute([
                                ':position' => ReturnIfnotnull($aposition),
                                ':working_days' => ReturnIfnotnull($aworkingdays),
                                ':warnings' => ReturnIfnotnull($awarning),
                                ':user_id' => ReturnIfnotnull($auserid)

                                

                        
                                ]);
                            echo "last test";

                            reloadthepage($pagePath);
                            echo "your submit is saved ";

                    

                    


                            } catch (\Throwable $th) {
                                $error = "we facing an error make sure that all the fileds are true";
                                echo $th->getMessage();
                            }


                        }else{
                            $error = "the warning is required!";
                        }

                    }else{
                        $error = "working days is required";
                    }
                   
                    


                }
                else{
                    $error = "position is required!";
                }
            }  
            else{
                $error = "the name is required!";
            }


        }
        else{
            $error = "the user id is required!";
        }

        
        if (isset($_POST['employeeid'])) {
            $euserid = $_POST['employeeid'];
            $ename =  $_POST['ename'];
            $eworkingdays = $_POST['eworkdays'];
            $eposition = $_POST['eposition'];
            $ewarning = $_POST['eawarnings'];
        }

        if (!(isEmpty($euserid))) {
            
            if (!(isEmpty($ename))) {

                if (!(isEmpty($eposition))) {
                    
                    if (!(isEmpty($eworkingdays))) {
                        
                        if (!(isEmpty($ewarning))) {
                            try {

                                $result = $stmt->query("UPDATE employees SET position = :position, working_days = :working_days ,warnings = :warnings WHERE id = :id");
                                $result->execute([
                                ':id' => ReturnIfnotnull($euserid),
                                ':position' => ReturnIfnotnull($eposition),
                                ":working_days" => ReturnIfnotnull($eworkingdays),
                                ":warnings" => ReturnIfnotnull($ewarning),
                                


                        

                                ]);
                                //this method will refresh the page so the vars will be empty 
                                reloadthepage($pagePath);


                        
                                } catch (\Throwable $th) {
                                 $error2 = "we facing an error make sure that all the fileds are true";
                                 echo $th->getMessage();
                        
                                }    
                            }else{
                                $error2 = "warning is required!";
                            }
                        }else{
                            $error2 = "working days is required!";
                        }
                }
                else {
                    $error2 = "position is required!";
                }
            }else{
                $error2 = "name is required!";
            }
        }
        else{
            $error2 = "employee id is required!";
        }

}











require '../../Views/Pages/adminPages/Employees.php';