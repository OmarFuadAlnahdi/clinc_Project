<?php





function router($uri,$router)
{
    if (isset($router[$uri])) {
        return $router[$uri];
    }
    else{
        return "";
    }
    
   
}
   