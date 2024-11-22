<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") {

$izina=$_POST['name'];
$umubyeyi=$_POST['parent'];
$nbr=$_POST['phone'];
$imyaka=$_POST["birth"];
$intara=$_POST["province"];
$akarere=$_POST["district"];
$umurenge=$_POST["sector"];
$akagari=$_POST["cell"];
$vil=$_POST["village"]; 
$sex=$_POST["gender"];
 }
?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Your Data</title>
</head>
<body>
 
    
   
   <table class="table" border="1" cellspacing="0">
    <style>
        *{
            font-family: "Quicksand" , sans-serif;
         }
        .table{
            font-size:0.9em;
            border-collapse:collapse;
            margin: 25px 0;
            min-width: 400px;
        }
           
            
            
            
        .table tr th{
            background-color: #009879;
            color:white;
            text-align: left;
            font-weight: bold;

            }  
        .table  tr  td{
            padding: 12px 15px;
            
            }
        .table tr{
            border-bottom:  1px solid grey;
            background-color: #f3f3f3;
            border-radius: 5px 5px ;
            overflow: hidden;
            box-shadow:  0  0 20px rgba(0,0,0,0.15);
            
            }
        .table tr.active{
            font-weight:bold;
            color:#009879;
            }    
        

    </style>
    <tr >
        <th colspan="2">Names</th>
        <th colspan="2">Parent's names</th>
        <th colspan="2">Telephone </th>
        <th colspan="2">Birth</th>
        <th colspan="2" >Province</th>
        <th colspan="2">District</th>
        <th colspan="2">Sector</th>
        <th  colspan="2">Cell</th>
        <th colspan="2">Village</th>
        <th colspan="2">Gender</th>
    </tr>
    <tr class="active">
        <td colspan="2"><?php echo "$izina";?></td>?>
        <td colspan="2"> <?php echo "$umubyeyi";?> </td>
        <td colspan="2"><?php echo "$nbr";?>  </td>
        <td colspan="2"><?php echo"$imyaka"; ?> </td>
        <td colspan="2"><?php echo "$intara";?></td>
        <td colspan="2"> <?php echo"$akarere"; ?></td>
        <td colspan="2"> <?php echo"$umurenge"; ?></td>
        <td colspan="2"> <?php echo"$akagari"; ?></td>
        <td colspan="2"> <?php echo"$vil";?> </td>
        <td colspan="2"><?php echo "$sex"; ?> </td>

    </tr>
   </table>  
    
</body>
</html>  
