<?php
require 'partials/header.php'; 



?>

<style>
    table,th,td{
        border: 1px solid black;
        border-collapse:collapse;
    }
    th,td {
        padding: 10px;
    }
    .crud-form{
        border: 1px solid black;
        
    }
    label{
        font-size: large;
    }
    .pages{
        display: flex;
        justify-content: center;
        border: 1px solid black;
        flex-direction: row;
        flex-wrap: nowrap;
    }
    

</style>

<body>

    <div class="pages">
        <h3><a href="../../../index.php">log out</a></h3>
        <h2><a href="../../../Controllers/admin/home.php">Admin page</a></h2>
    </div>


<h1>display doctors</h1>

<?php
    if(count($doctors) > 0){ ?>
   <table style="width: 100%">
        <tr>
            <th>doctor id</th>
            <th>years Experince</th>
            <th>Summray</th>
            <th>delete</th>
        </tr>
        
           
            <?php

            
                

                for ($i = 0; $i < count($doctors); $i++) { ?>
                   <tr> 
                    <td>  <?= $doctors[$i]['id'] ?> </td>
                    <td>  <?= $doctors[$i]['years_exp'] ?> </td>
                    <td>  <?= $doctors[$i]['Summray'] ?> </td>
                    <form method="post">
                        <td> <button type="submit"   name= <?= "delete" . $doctors[$i]['id'] ?>>delete</button></td>
                    </form>
                    

                    </tr> 


                <?php
                }}
                else{
                    ?>
                    <h3>you don't have any doctors</h3>
                    <?php
                }
            
            
            
            ?>
            </table>

            <div class="crud-form">
                
                
            <div class ="form">
                <form method="post">

                    <h1>Add new doctors</h1>

                    <label for="user_id">User_id</label>
                    <input type="text" name="userid">

                    <label for="years experince">Years experince</label>
                    <input type="text" name="addyearsexp">

                    <label for="summery">Summery</label>
                    <input type="text" name="addsummery">

                    <button type="submit" onclick="window.location.reload();">SUBMIT</button>

                    
                        <?php 
                        if ($error != "") { 
                        
                        ?>
                        <h3> 
                            <?=$error;?>
                            
                            
                            
                        </h3>
                        
                        <?php
                            
                            
                        }
                        ?>    
                     

                </form>
            </div>
            <button id="showandhide">Show edit</button>
            <div class ="form">
                    <form id="form" style="display: none;" method="post">

                    <h1>edit doctor propertys</h1>

                    <label for="doctorid">Doctor id</label> 
                    <input type="text" name="doctorid">

                    <label for="yearsExp">Years Experince</label>
                    <input type="text" name="edityearsexp">

                    <label for="summery">Summery</label>
                    <input type="text" name="editsummry">

                    <button type="submit">SUBMIT</button>

                    <h3>
                    <?php 
                        if ($error2 != "") { ?>
                            <h3><?= $error2 ?></h3>
                            <?php
                            $error2 = "";
                        }
                    ?>    
                    </h3>

                    </form>
                </div>



            </div>

            
    <script>
       const button = document.getElementById("showAndHide");
       const form =document.getElementById("form");

       button.addEventListener("click", function(){
        form.style.display = "block";
       });
        
    </script>

       







</body>
</html>