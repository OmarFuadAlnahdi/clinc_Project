<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $pageName ?></title>
</head>
<style>
    h1{
        font-weight: bold;
        margin: 0 0 20px 0;
        color: #FFFFFF;
    }
    * {
	box-sizing: border-box;
    }

    body {
	    background: linear-gradient(135deg,
        #f1e9e9,
        #ede8e8,
        #f9f6f6
  );
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
	    font-family: 'Montserrat', sans-serif;
	    height: 100vh;
	    margin: -20px 0 50px;
    }

    a{
        color:#FFFFFF;
        text-decoration: none;
        font-size: 14px;
        margin: 15px 0;
    }
    
    button{
        border-radius: 20px;
        border:1px solid #2007d9;
        background-color: #000000;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px ;
        border-radius: 20px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: 80ms ease-in;
    }
    button:active{
        transform: scale(0.95);
    }
    button:focus{
        outline:none;
    }
    form{
        background-color: #3829de;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height:100%;x: ;
        text-align: center;
    }
    input{
        background-color: #EEE;
        border:none;
        padding:12px 15px;
        outline:none;
        margin: 8px 0;
        width:50%;
    }
    .container{
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-height: 100%;
        min-height: 480px;
    }
    .form-container{
        height: 100%;
    }
    p{
        color: #FF4B2B; 

    }



</style>
<body>

    <div class="container" id="container">
        <div class="form-container sign-in-container">

            <form action="/login" method = "post">

                <h1><?= $pageName ?> </h1>
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <a href="#">Forgot your password?</a>

                <?php 
                     if (!(isEmpty($error))) {
                        ?>
                        <p><?= $error ?> </p>
                        <?php
                                $error = "";
                        }
                        ?>

                <button type="submit">Sign In</button>
        
        
            </form>

        </div>

         


    </div>


   
</body>
</html>