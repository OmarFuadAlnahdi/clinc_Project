<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receptionist Page</title>

</head>
<style>
     table,th,td{
        border: 1px solid black;
        border-collapse:collapse;
    }
    th,td {
        padding: 10px;
    }
   
    .countainer{
        display: flex;
        flex-direction: column;

        margin: 0;
        padding: 0;
    }
    .top-navbar{
        border: black solid 1px;
        border-radius: 15px;
        padding: 10px 20px;
        background-color:#0f4fda;
    }
    .logout-button{
        display: flex;
        justify-content: end;
        color: white;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        position:relative;
       
    }
    .right-navbar{
        display: flex;
        justify-content: end;
        
        

    }
    .items{
        display: flex;
        flex-direction: column;
        margin: 15px 0;
        border: 1px solid black;
        padding-bottom:600px ;
        padding-left: 10px;
        background-color: #4473d9;
        border-radius: 20px;
    }
    .left-navbar-panel{
        color: white;
        margin: 10px 5px;
        border: 1px solid #4473d9;
        padding: 10px;
        font-size: 16px;
    }
    .item{
        text-decoration: none;
        margin: 10px 5px;
        color: aliceblue;
        border: #4473d9;
        border-radius: 10px;
        
    }
    
    

</style>
<body>
    


    <div class="countainer">
        <div class="top-navbar">

            <a href="/">Scoppa HIT</a>
            <a class="logout-button" href="log out"><p>Log Out</p></a> 

        </div>

        <div class="attend-Record">
            <form action="">

                <p >12:40</p>
                <h2 class="attitem">Check-in</h2>
                <button>Mark</button>

            </form>
                <hr>
            </div>

        <div class="right-navbar">



            <div class="items">
                
                <h5 class="left-navbar-panel">Navbar panel</h5>
                <a href="" class="item">add an appointment</a>
                <a href="" class="item">search for apointment</a>
                <a href="" class="item">edit apointment</a>
                



            </div>
           
            
        </div>

       


    </div>
        
       
           
       



      
       



      
       
   
    


</body>
</html>