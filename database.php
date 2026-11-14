<?php

class database {


private $pdo;
private $date;
 



public function __construct()
{
    $host = "localhost";
    $dbname = "Hospital";
    $username = "root";
    $password = "Aa133133";
    
   

try {
    $this->pdo = new PDO (
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $date = new DateTime();


    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection has been activated!";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


}

private function query($query)
{
    return $this->pdo->prepare($query);

}
public function getTable($tablename)
{   
    $result =  $this->pdo->prepare("SELECT * FROM " . $tablename);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
}
public function getrow($tableName,$id)
{
    $result =  $this->pdo->prepare("SELECT " . $id . " FROM " . $tableName);
    $result->execute();
    return $result->fetch(PDO::FETCH_ASSOC);
}
public function addUser($user) {
    
    $stmt = $this->query("INSERT INTO users (name,reg_date,email,password) 
    VALUES (:name,:reg_date, :email, :password)");

    $stmt->execute([
        ':name' => $user['name'],
        ':reg_date' => date("y-m-d"),
        ':email' => $user['email'],
        'password' => $user['password']
    ]);

    



}





}





