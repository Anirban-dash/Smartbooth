<?php 
require("conn.php");
$id=mysqli_real_escape_string($con,$_POST['id']);
$pass=mysqli_real_escape_string($con,$_POST['pass']);
$sql="SELECT * from users where smart_id='$id' and pass='$pass'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($res)==0){
    header("location:login.php?err=1");
}else{
    session_start();
    $_SESSION['id']=$id;
    header("location:user.php");
}
?>