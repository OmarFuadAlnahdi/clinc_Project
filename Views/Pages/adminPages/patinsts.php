<?php
require 'partials/header.php';
$PageName = "patients";
?>

<style>
        table,th,td{
                border: 1px solid black;
                border-collapse: collapse;

        }
        td,th{
                padding: 10px;
        }
</style>


    


<h1>Welcome to the <?= $PageName ?> page</h1>


        <table style ="width:100%;" >
                
                <tr>
                        <th>name</th>  
                        <th>patints id</th>
                        <th>gender</th>
                        <th>height by cm</th>
                        <th>life style</th>
                </tr>
                <?php 
                        for ($i=0; $i < count($patints); $i++) { 
                               
                                echo "<tr>";
                                echo "<td>" . FindValueByid("name",$users,$patints[$i]['user_id']) . "</td>";
                                echo "<td>" . $patints[$i]['id']. "</td>";
                                echo "<td>" . $patints[$i]['gender']. "</td>";
                                echo "<td>" . $patints[$i]['height_cm']. "</td>";
                                echo "<td>" . $patints[$i]['lifestyle']. "</td>";
                                echo "</tr>";
                        }




                ?>
               

                
        </table>





<?php
require 'partials/footer.php';
?>