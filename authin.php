<?php


class Authin {
 
  

    public function Check_Email_exist($email_request){

        $DB = new database();

        $users = $DB->getTable("users");
        $result = isset($email_request,$users);

        return $result;

        

    }
}