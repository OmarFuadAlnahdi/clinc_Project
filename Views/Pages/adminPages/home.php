<?php
require 'partials/header.php'; 
?>


<style>

    .con-items{
        
        display: flex;
        justify-content: end;
       
        
        
        
       

    }
    a,h1,h2,h3,h4,h5,h6,p{
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }
    .items{
        display: flex;
        border: 1px solid black;
       
        padding:0px 10px ;
        padding-top: 10px;

        flex-direction: column;
        height:1200px;
    }
    .item {
        border: 1px solid black;
        border-radius: 10px;
        background-color: blue;
        transition: 0.3s;
        margin: 5px;
    }
    .item a {
        padding:12px;
        color: blueviolet;
        text-decoration: none;
        color: black;
        
    }
    .item:hover{
        background-color: cornflowerblue;
    }
    .homenav{
        border: 5px solid black;
       
        
    }
    .homenav a{
        font-size: 1.5rem;

       
        
    }
    

    
</style>


<body>
    <div class="container">


    <div class="homenav">

         <a href="#"><?= $PageName ?></a>

         <a href="/">Log out</a>




    </div>
    

   

   

    

    <div class="con-items" >


        <div class="items" >

                        <div class="item">
                             <a href="../../../Controllers/admin/doctors.php">doctors</a>
                        </div>


                        <div class="item">
                            <a href="../../../Controllers/admin/employees.php">Employees</a>
                        </div>

                        <div class="item">
                            <a href="../../../Controllers/admin/patient.php">patinsts</a>
                        </div>
        </div>
    </div>

       
       
            





    </div>
    

   

        
    

   

        
    

   

        
    

   

        
    

   

        
    

   

        
    

   

        
    

   

        
    

    <script>
        document.getElementById("showDoctors").addEventListener("click", function() {
            document.getElementById("data").style.display = "block";
        });
    </script>
    <!-- reseptions -->

     <script>
        document.getElementById("showReceptionst").addEventListener("click", function() {
            document.getElementById("data").style.display = "block";
        });
    </script>
  <!-- patinets -->   
    <script>
        document.getElementById("showPatients").addEventListener("click", function() {
            document.getElementById("Patients").style.display = "block";
        });

    </script>
    
    <!-- employees -->

    <script>
        document.getElementById("showEmployees").addEventListener("click", function() {
            document.getElementById("data").style.display = "block";
        });
    </script>




    
    
</body>
</html>