<?php
require 'partials/header.php'; 



?>

<style>
    table{
        width: 100%;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th,td{
        padding: 10px;
    }
    
    
</style>



<body>
    

    <a href="/">Log out</a>
    <a href="/AdminEmployeePage">Admin</a>


<table>
    <tr>
    <th>employee id</th>
    <th>name</th>
    <th>position</th>
    <th>working days</th>
    <th>warnings</th>
    <th>delete</th>
    </tr>
    <h2>display employees </h2>
    
    <?php 
    
    for ($i=0; $i < count($employees); $i++) {?>
     
        <tr>
        <td><?= $employees[$i]['id'] ?></td>
        <td> <?=  FindValueByid("name",$users,$employees[$i]['user_id']) ?></td>
        <td> <?=   $employees[$i]['position'] ?> </td>
        <td> <?=   $employees[$i]['working_days'] ?> </td>
        <td> <?=   $employees[$i]['warnings'] ?></td>
        <form method="post" >
             <td> <button type="submit" name=<?= "delete" . $employees[$i]['id'] ?> >delete</button> </td>
        </form>
       

        </tr>

       
    <?php
    }
    
    ?>


</table>

<div class="adding">
    <h3>Add a new employee</h3>
    <form method="post">

        <label>user id</label>
        <input type="text" name="userid">

        <label for="name">name</label>
        <input type="text" name="aname">


        <label for="position">position</label>
        <input type="text" name="aposition">


        <label for="working days">working days</label>
        <input type="text" name="aworkdays">


        <label for="warning">warning</label>
        <input type="text" name="awarnings" >


        <button type="submit">SAVE</button>

        <h3> 
            <?php 
                if (!(isEmpty($error))) {
                    echo $error;
                    $error = "";
                }
            ?>
        </h3>
</form>

</div>


<div class="editing">
    <h3>edit an employee</h3>
    <form method="post">

        <label>employee id</label>
        <input type="text" name="employeeid">

        <label for="name">name</label>
        <input type="text" name="ename">


        <label for="position">position</label>
        <input type="text" name="eposition">


        <label for="working days">working days</label>
        <input type="text" name="eworkdays">


        <label for="warning">warning</label>
        <input type="text" name="eawarnings" >


        <button type="submit">SAVE</button>

        <h3> 
            <?php 
                if (!(isEmpty($error2))) {
                    echo $error2;
                    $error2 = "";
                }
            ?>
        </h3>
</form>

</div>



</body>





</html>