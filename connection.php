<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-div">

    <h1> List of applicants at reknot solutions</h1><br><br>

    <div class="centre-div">
    <div class="table-responsive">
        <table>
         <thead>
            <tr>
    
    <th>full_name</th>
    <th>email</th>
    <th>phone_number</th>
    <th>college_name</th>
    <th>address</th>
    <th>skills</th>
    <th>pc</th>
    <th>wifi</th>
    <th>edu</th>
     
   </tr>
</thead>
<tbody>
<?php

include("insert.php");

$selectquery="select * from tab";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
    
    <td><?php echo $res['full_name']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['phone_number']; ?></td>
    <td><?php echo $res['college_name']; ?></td>
    <td><?php echo $res['address']?></td>
    <td><?php echo $res['skills']?></td>
    <td><?php echo $res['pc'] ?></td>
    <td><?php echo $res['wifi'] ?></td>
    <td><?php echo $res['edu'] ?></td>  
   </tr>
   <?php
}
?>
</tbody>
</thead>
</table>
</div>
</div>

</div>
</body>
</html>  