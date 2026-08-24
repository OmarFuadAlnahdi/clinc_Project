<?php 

function FindValueByid($value,$PK,$FK)
{
    $result = "Null";

    for ($i=0; $i < count($PK); $i++) { 
        if ($PK[$i]['id'] == $FK) {
           $result = $PK[$i][$value];
        }
        
    }

    return $result; 
}

function ReturnIfnotnull($value)
{
    if ($value != "") {
        return $value;
    }
}

function isEmpty($value)
{
    if ($value == "") {
        return true;
    }
    return false;
}

function reloadthepage($location){
    header("Location:" . $location);         
}

function isDatafilled($Data)
{
     foreach ($Data as $key) {
        if($key == null){
            return false;
        }
    }
    return true;
}

