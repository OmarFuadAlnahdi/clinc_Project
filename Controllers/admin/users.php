<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY Doctors</title>
</head>


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
    .names{
        border: none;
        outline: none;
        transition: 0.3s ease;
    }
    .emails{
        border: none;
        outline: none;
        transition: 0.3s ease;
    }
    .subs{
        border:none;
        outline:none;
        transition: 0.3s ease;
        
        
    }
    
    .names:hover,.emails:hover,.subs:hover,.subs td:hover{
        background-color: black;
    }



    .saveButton{
        border:black solid 1px;
        margin: 10px 0 ;
        justify-content:end;
        transition: 0.3s ease;
        background-color: black;
        color: white;
        padding: 12px 35px;
        border-radius: 20px;
        font-size: 14px;
        
        
    }
    .saveButton:active{
        transform: scale(0.95);
    }
    .saveButton:hover{
        background-color: white;
        color: black;
    }
    .crud-for-doctors{
        box-sizing: content-box;
        width: 625px;
        padding:20px;
        border: 5px solid black;
    }

    

</style>
<body>
    <div class="crud-for-doctors">

    
    <form action="../../admin/doctors" method="post">

         <table style="border: 1px solid black;">
            <th>name</th>
            <th>email</th>
            <th>subscription</th>

            <tr>
                <td class="names" ><input class="names" aria-label="name" name="nameid-edit" type="text" value="omar"> </td> 
                <td  class="emails" ><input class="emails" aria-label="email" name="email-edit" type="text" value="omar@email.com"></td>
                <td class="subs" ><input class="subs" aria-label="subs" value="paid" type="text"></td>

            </tr>

            <tr>
                <td><input class="names" aria-label="name" name="nameid-edit" type="text" value="osama"></td> 
                <td><input class="emails" aria-label="email" name="email-edit" type="text" value="osama@email.com"></td>
                <td><input class="subs" aria-label="subs" name="subs-edit" value="pending" type="text"></td>
                
            </tr>

            <tr>
                <td><input class="names" aria-label="name" name="nameid-edit" type="text" value="ahmed"></td>
                 <td><input class="emails" aria-label="email" type="text" name="email-edit" value="ahmed@email.com"></td>
               <td><input class="subs" aria-label="subs" name="subs-edit" value="cancelled" type="text"></td>
                
            </tr>
        </table>

        <button class="saveButton" type="submit">Save</button>



    </form>
    </div>
       
</body>
</html>