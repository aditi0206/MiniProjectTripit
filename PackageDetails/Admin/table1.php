<?php

include_once('config.php');
$result=mysqli_query($mysqli,"select* from pack order by sno asc");

?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:crimson;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:burlywood;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>PACKAGE DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th style="padding:5px">Sno</th>
        <th style="padding:5px">PlaceName</th>
        <th style="padding:5px">City</th>
        <th style="padding:5px">State</th>
        <th style="padding:5px">Pincode</th>
        <th style="padding:5px">Opening-Hours</th>
        <th style="padding:5px">Price</th>
        <th style="padding:5px" >ADD</th>
        <th style="padding:5px">Remove</th>
     
         
    </tr>
    <a href="AdminLogin.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
    <a href="addpackage.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:80%">Insert &downarrow;</a>

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['sno'].'</td>';
     echo '<td>' .$res['placename'].'</td>';
     echo '<td>' .$res['city'].'</td>';
     echo '<td>' .$res['state'].'</td>';
     echo '<td>' .$res['pincode'].'</td>';
     echo '<td>' .$res['open'].'</td>';
     echo '<td>' .$res['price'].'</td>';
     
     
     echo "<td> <a href=\"edit.php?sno=$res[sno]\"><input type='submit' value='Edit'></a>";
     echo "<td> <a href=\"delete.php?sno=$res[sno]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete'></a></td>";

     echo '</tr>';
    
    }
    

?>
 
 
</table>

</body>
</html>