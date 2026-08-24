<?php





function router($uri,$router,$statuscode = 404)
{
    if (isset($router[$uri])) {
        return $router[$uri];
    }
    else{
        return $statuscode . ".php";
    }
    
   
}
   