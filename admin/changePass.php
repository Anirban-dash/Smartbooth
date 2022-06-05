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
    <title>Smartbooth | User update</title>
    <style>


.card{

width: 400px;
border:none;

}




.btr{

border-top-right-radius: 5px !important;
}


.btl{

border-top-left-radius: 5px !important;
}

.btn-dark {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}


.btn-dark:hover {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}


.nav-pills{

display:table !important;
width:100%;
}

.nav-pills .nav-link {
  border-radius: 0px;
      border-bottom: 1px solid #0d6efd40;

}

/* .nav-item{
    display: table-cell;
     background: #0d6efd2e;
} */


.form{

padding: 10px;
    height: 300px;
}

.form input{

margin-bottom: 12px;
border-radius: 3px;
}


.form input:focus{

box-shadow: none;
}


.form button{

margin-top: 20px;
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
          <a class="nav-link"  href="userAdd.php"><i class="fa-solid fa-user-plus"></i> Add Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="update.php"><i class="fa-solid fa-users-gear"></i> Update Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="changePass.php"><i class="fa-solid fa-gear"></i></i> Change Password</a>
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
    


    <div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Change Password</a>
                </li>
               
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  
                  <div class="form px-4 pt-5">

                    <input type="text" name="" class="form-control" placeholder="Old Password">

                    <input type="text" name="" class="form-control" placeholder="New Password">
                    <button class="btn btn-success btn-block">Change</button>

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