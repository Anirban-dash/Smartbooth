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
$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
$pass="";
for ($i = 0; $i < 8; $i++) {
    $n = rand(0,strlen($alphabet));
    $pass=$pass.$alphabet[$n];
}
$code=array("Arunachal Pradesh"=>"APR","Assam"=>"AS","Bihar"=>"BH","Chandigarh"=>"CHN","Chhattisgarh"=>"CHT","Dadar and Nagar Haveli"=>"DNH","Daman and Diu"=>"DAD","Delhi"=>"DL","Lakshadweep"=>"LKH","Puducherry"=>"PD","Goa"=>"GOA","Gujarat"=>"GJ","Haryana"=>"HR","Himachal Pradesh"=>"HP","Jammu and Kashmir"=>"JAK","Jharkhand"=>"JH","Karnataka"=>"KAN","Kerala"=>"KAR","Madhya Pradesh"=>"MP","Maharashtra"=>"MAH","Manipur"=>"MAN","Meghalaya"=>"MEG","Mizoram"=>"MIZ","Nagaland"=>"NAG","Odisha"=>"OD","Punjab"=>"PUNB","Rajasthan"=>"RAJ","Sikkim"=>"SIK","Tamil Nadu"=>"TAN","West Bengal"=>"WB");
$sql="SELECT * FROM users ORDER BY u_id DESC LIMIT 1";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($res);
$smart_id="2022".$code[$state].($row["u_id"]+1).rand(10,99);

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            // $image_sql="INSERT into images (file_name, us_id) VALUES ('$fileName', '$u_id')";
            // $image_query=mysqli_query($con,$image_sql) or die(mysqli_error($con));
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $fileName="User-Profile.png";
    // $image_sql="INSERT into images (file_name, us_id) VALUES ('User-Profile.png', '$u_id')";
    // $image_query=mysqli_query($con,$image_sql) or die(mysqli_error($con));
}


$insertSql="INSERT INTO `users` (`name`, `aadhar`, `voter`, `dob`, `gender`, `mail`, `mobile`, `pincode`, `state`, `city`, `smart_id`, `photo`, `pass`) VALUES ('$name', '$aadhar', '$voter', '$dob', '$gender', '$mail', '$number', '$pincode', '$state', '$city', '$smart_id', '$fileName', '$pass')";
$res=mysqli_query($con,$insertSql) or die(mysqli_error($con));

echo '<!DOCTYPE html>
<html lang="en">
  <head>  
    <title>Smart Booth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <style>
  @media print {
    .noPrint{
      display:none;
    }
  }
  </style>
<body>
  <div class="container">
    
   
    <div class="card bg-success text-white">
    <h3 class="noPrint">User added Successfully</h3>
      <div class="card-body"></div>
    </div><br>
    <div class="card bg-success text-white">
    <p>Smartbooth ID: '.$smart_id.'</p><br>
    <p>Smartbooth Password: '.$pass.'</p><br>
      <div class="card-body"><a href="userAdd.php"><button class="noPrint" type="button" class="btn btn-warning">Go back</button></a></div>
    </div>
  </div>
  <button class="noPrint" onclick="display()">Click to Print</button>
      <script>
         function display() {
            window.print();
         }
      </script>
</body>
</html>';
?>





