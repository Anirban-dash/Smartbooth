<?php
require("../conn.php");
$name=mysqli_escape_string($con,$_POST['name']);
$aadhar=mysqli_escape_string($con,$_POST['aadhar']);
$voter=mysqli_escape_string($con,$_POST['voter']);
$dob=mysqli_escape_string($con,$_POST['dob']);
$gender=mysqli_escape_string($con,$_POST['gender']);
$mail=mysqli_escape_string($con,$_POST['mail']);
$number=$_POST['txtEmpPhone'];
$pincode=mysqli_escape_string($con,$_POST['pincode']);
$state=mysqli_escape_string($con,$_POST['state']);
$city=mysqli_escape_string($con,$_POST['city']);
$u_id=$_POST['u_id'];
$insertSql="UPDATE `users` SET `name` = '$name', `aadhar` = '$aadhar', `voter` = '$voter', `dob` = '$dob', `gender` = '$gender', `mail` = '$mail', `mobile` = '$number', `pincode` = '$pincode', `state` = '$state', `city` = '$city' WHERE `users`.`u_id` = '$u_id'";
$res=mysqli_query($con,$insertSql) or die(mysqli_error($con));
echo '<!DOCTYPE html>
<html lang="en">
  <head>  
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="container">
    <h3>Done!</h3>
    <p>Credentials are updated successfully</p>
    <div class="card bg-success text-white">
      <div class="card-body"></div>
    </div><br>
    <div class="card bg-success text-white">
      <div class="card-body"><a href="update.php"><button type="button" class="btn btn-warning">Go back</button></a></div>
    </div>
  </div>
</body>
</html>';
?>