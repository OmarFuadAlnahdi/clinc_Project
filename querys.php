<?php


class querys{
    
    public $stmt ;
    public function createRow($value)
    {
        echo "new row create!";
        $this->stmt = "stmt is active!";
    }
    public function readRow()
    {
        return $this->stmt;
    }
    public function deleteById($tableName,$id)
    {

    }
    public function getDoctors($tableName,$id)
    {

    }

}