<?php
require("conn.php");
session_start();
if(!isset($_SESSION['id'])){
  header("location:index.php")
;}
$id=$_SESSION['id'];
$sql="select * from users where smart_id='$id'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cardView.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>Smart Booth</title>
</head>

<body>
<div class="center">
    <div class="id-card-holder" id="content">
    <div class="id-card">
                        <img class="demo-bg" src="1.png" alt="">
                        <h3>Smart Booth Card</h3>
                        <div class="header">
                            <img src="img/logo.png">
                        </div>
                        <div class="photo">
                            <img style="border-radius:50%" src="./admin/uploads/<?php echo $row['photo'] ?>">
                        </div>
                        <h2><?php echo $row['name']; ?></h2>
                        <div id="qrcode"  class="qr-code">
                        </div>
                        <h3><strong><?php echo $row['smart_id']; ?></strong></h3>
                        
                        <hr>
                        <p><?php echo strtoupper($row['gender']); ?></p>
                        <p><?php echo $row['city']; ?>,<?php echo $row['state']; ?> | Pin: <?php echo $row['pincode']; ?> </p>
                        <p>Ph: <?php echo $row['mobile']; ?> | Email: <?php echo $row['mail']; ?></p>
                        

        </div>
    </div>
</div>
<div class="hidden">
    <a style="text-decoration: none;" href="cardShow.php"><button>Go back</button></a>
</div>
    <script src='./js/easy.qrcode.js'></script>
    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: "<?php echo $row['name']; ?>",
    height:60,
    width:60,
    logo: "logo.png",
    logoWidth: undefined,
    logoHeight: undefined,
    logoBackgroundColor: '#ffffff',
    logoBackgroundTransparent: false
});
function display() {
            window.print();
         }
         display();
// qrcode.resize(30,30);
    </script>
</body>

</html>