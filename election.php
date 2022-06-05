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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Booth</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./CSS/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./CSS/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./CSS/style.css">
  </head>
  <body >
    <div class="container-scroller">
      <!-- partial:./partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <!-- <a class="sidebar-brand brand-logo" href="./user.php" style="text-decoration: none; color: white;">SMART Booth</a> -->
          <a class="navbar-brand brand-logo-mini" href="./user.php"><img style="height: 45px; width: 70px;" src="./assets/images/logo.png" alt="logo" /></a>
          <!-- <a class="sidebar-brand brand-logo" href="./user.php"><img src="./assets/images/logo.png" alt="logo" /></a> -->
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="./admin/uploads/<?php echo $row['photo'] ?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $row['name']; ?></h5>
                  <span>Voter</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="./user.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/buttons.php">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/typography.php">Typography</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="./election.php">
              <span class="menu-icon">
                <i class="mdi mdi-briefcase"></i>
              </span>
              <span class="menu-title">Your Booth</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="cardShow.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title">Smart Card</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="./livecount.php">
              <span class="menu-icon">
                <i class="mdi mdi-access-point"></i>
              </span>
              <span class="menu-title">Live count</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="./changepass.php">
              <span class="menu-icon">
                <i class="mdi mdi-wrench"></i>
              </span>
              <span class="menu-title">Change Password</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="./logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-logout"></i>
              </span>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="./user.php"><img style="height: 45px; width: 70px;" src="./assets/images/logo.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
            </ul>
            <ul class="navbar-nav navbar-nav-right">
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" id='cont'>
                      <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                          <h4 class="card-title mb-1">Ongoing Elections</h4>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="preview-list">
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                  <div class="preview-icon bg-primary">
                                    <i class="mdi mdi-file-document"></i>
                                  </div>
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject">Loksabha</h6>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <button type="button" class="btn btn-success btn-rounded btn-fw">Vote</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>


          </div>
          <!-- content-wrapper ends -->
          <!-- partial:./partials/_footer.php -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <a href="https://anirbandash.netlify.app" target="_blank">Anirban</a> 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
  
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  
  </body>
</html>