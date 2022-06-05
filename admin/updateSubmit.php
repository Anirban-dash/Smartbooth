<?php

require("../conn.php");
$id=$_POST['id'];
$sql="select * from users where smart_id='$id'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($res);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../img/favicon.ico" rel="icon">
    <title>Smartbooth | User add</title>
    <style>
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
       
    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
    cursor: pointer;
    position: relative;
}
.custom-file-upload img{
    display: block;
}
.custom-file-upload .fa-edit{
    position: absolute; bottom:0; left:0;
}

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="#">
        <img src="../img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Smartbooth
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="userAdd.php"><i class="fa-solid fa-user-plus"></i> Add Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php"><i class="fa-solid fa-users-gear"></i> Update Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="changePass.php"><i class="fa-solid fa-gear"></i></i> Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a> -->
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
    
    </div>
    </nav>

<?php 
if(mysqli_num_rows($res)==0){
    echo '<div class="container">
    <h3>Sorry</h3>
    <div class="card bg-warning">
      <div class="card-body">This Smart id is not found!</div>
    </div>
  </div>';
  die();
}
?>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="./uploads/<?php echo $row['photo'] ?>" alt=""/>
                        <h3>Welcome</h3>
                        <p>Update user details</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">User Update</h3>
                                <div class="row register-form">
                                    <form action="usereditSubmit.php" method="post">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" placeholder="Full Name *" name="name" value="<?php echo $row['name']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="number" class="form-control" placeholder="Aadhar Number *" name="aadhar" value="<?php echo $row['aadhar']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" placeholder="Voter ID *" name="voter" value="<?php echo $row['voter']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="date" class="form-control"  placeholder="Date of birth *" name="dob" value="<?php echo $row['dob']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group my-3">
                                            <input type="email" class="form-control" name="mail" placeholder="Your Email *" value="<?php echo $row['mail']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="<?php echo $row['mobile']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="number" name="pincode" class="form-control" placeholder="Enter your PIN or ZIP code *" value="<?php echo $row['pincode']; ?>" required/>
                                        </div>
                                        <div class="form-group my-3">
                                            <!-- <input type="text" name="state" class="form-control" placeholder="State *" value="" /> -->
                                            <select name="state" id="state" class="form-control">

                                            <option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" name="city" class="form-control" placeholder="City *" value="<?php echo $row['city']; ?>" />
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" name="u_id" class="form-control" placeholder="City *" value="<?php echo $row['u_id']; ?>" hidden/>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Add user"/>
                                    </div>
                                </form>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>