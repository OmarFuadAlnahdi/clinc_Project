<?php





function router($uri,$router)
{
    if (isset($router[$uri])) {
        return $router[$uri];
    }
    else{
        return "404.php";
    }
}
function ShowStatusCode($statuscode = 404)
{
    require "StatusCodes/Views/S" . $statuscode . ".php";
}
   