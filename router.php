<?php


function ShowStatusCode($statuscode = 404)
{
    return "Views/StatusCodes/" . $statuscode . ".php";
}


function router($uri,$router)
{
    if (isset($uri,$router)) 
        return $router[$uri];
    else
        return ShowStatusCode();
    
}

   