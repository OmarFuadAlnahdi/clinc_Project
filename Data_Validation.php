<?php
class DataValidation {

   
    
    
    
    private function isLong($name,$max){

        if (strlen($name) > $max) {
            return true;
        }
        return false;
    }
    private function isSyntext($name){
        
        if(preg_match('/[^a-zA-Z]/',$name) === 1){
            return true;
        }

        return false;
    }
    private function isNumber($name){
        
        if(preg_match('/[0-9]/',$name) === 1){
            return true;
        }

        return false;
    }
    private function convertToLowerCase(&$email)
    {
        $email = strtolower($email);
        //developers need to debug this
    }
    private function IsEmailEnding($email)
    {

        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
        
    }
    private function checkIfEmailExist($email)
    {
        $db = new database();

        $users = $db->getTable("users");

        for ($i=0; $i < count($users); $i++) { 
            if ($users[$i]['email'] == $email) {
                return true;
            }
        }

        return false;

    }
  
    private function HasAtSign($email){
        
        for ($i=0; $i <strlen($email) ; $i++) { 
            if ($email[$i] == '@') {
                return true;
            }

        }

        return false;
    }
   




    public function name($name)
    {
        $Oname[0] = false;
        $Oname[1] = "empty"; 
        $Oname[2] = $name;

        if (empty($name)) {
            $Oname[1] = "empty";
            return $Oname;
        }
        if ($this->isLong($name,15)) {
            $Oname[1] = "long";
            return $Oname;
        }
        if ($this->isSyntext($name)) { 
            $Oname[1] = "syntext";
            return $Oname;
        }
        if ($this->isNumber($name)) {
            $Oname[1] = "number";
            return $Oname;
        }
        

        $Oname[0] = true ; 
        return $Oname;

    }
    public function email($email){

       $this->convertToLowerCase($email);
       //so I can minimize the times of checking in the database

       $arrEmail[0] = false ;
       $arrEmail[1] = "Empty";
       $arrEmail[2] = $email;


        if (empty($email)) {
            return $arrEmail;            
        }
        if (!($this->HasAtSign($email))) {
            $arrEmail[1] = "Email";
            return $arrEmail;
        }
        if ($this->checkIfEmailExist($email)){
            $arrEmail[1] = "exist";
            return $arrEmail;

        }
        if (!($this->IsEmailEnding($email))) {
            $arrEmail[1] = "domain";
            return $arrEmail;

        }
        if ($this->isLong($email,25)) {
            $arrEmail[1] = "long";
            return $arrEmail;            
        }
       
        
        



        $arrEmail[0] = true;

        return $arrEmail;

    }

    private function setLimits($value)
    {   
        if (strlen($value) < 8) 
            return "short";
        
        if (strlen($value) > 16) 
            return "long";
        
        
    }

    public function checkPassword($userPassword,&$errorMessage)
    {
        
        
    }
    

    
   





}