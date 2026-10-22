<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageName ?></title>
</head>
<style>
    body{
        background-color: #cbcdd4f7;
    }
    .continar{
        display: flex;
        flex-direction: row;
        gap: 800px;
        background-color: rgb(6, 70, 109);
        border: 1px solid black;
        border-radius: 20px;
        

    }
    .items{
        margin: 10px;
        
    }
    .item{
        text-decoration: none;
        color: #fffffff7;
        padding: 6px;
        margin-left: 16px;

        

    }
    .brand{
        margin: 10px;
    }
    .brand-name{
        text-decoration: none;
        color: white;
        font-size: 20px;

    }
    .item:hover{
        color: #b2aeaef7;
    }

    
</style>
<body>
    
<div class="continar">

    <div class="brand">
        <a class="brand-name" href="">brand</a>
    </div>

    <div class="items">
        <a class="item" href="">Documentation</a>
        <a class="item" href="">about us</a>
       

    </div>

</div>


        








    
