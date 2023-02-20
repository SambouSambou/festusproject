<?php
session_start();

error_reporting(0);

require_once "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMS -  Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
       
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">                  <?php echo $_SESSION['username'] ?> </span>
                <span class="font-weight-bold mb-2">                  <?php echo $_SESSION['email'] ?>   </span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home1.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <span class="menu-title">Register Employees</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="view_app.php" >

            
              <span class="menu-title">View Employees</span>
            
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="view_report.php">
              <span class="menu-title">View Reports</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_app.php">
              <span class="menu-title">View Workers</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                 <form method="post">        
              </div>
              <button name="logout" type="submit" class="btn btn-block btn-lg btn-gradient-primary mt-4">LOGOUT</button>
             </form>
             <?php 
                         if(isset ($_POST['logout']))
                {
                        session_destroy();
                       header('location:admin.php');

                }
                                 
         
                 ?>
             
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
          </div>
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              APPLICANT'S DETAILS
            </h3>
            
          </div>
          
          <div class="row">
            
           
      
         
         
          
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
<?php

if(isset($_GET['id'])):
$txt = $_GET['id'];
$result3 = mysqli_query($con, "select * from reports where workerID = \"$txt\"");
echo "<table>";
while($row = mysqli_fetch_assoc($result3)):
?>
                 
          <form  method="post">
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Report Title</label>
                          
                            <input type="text" value="<?php echo $row['title']?>"  class="form-control" disabled />
                        
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                        <label for="comment">Comment:</label>
                          <input type="text" value="<?php echo $row['comment']?>"  class="form-control" disabled />
                          
                        </div>
                      </div>
                      
                    </div>
                   
                  
                    </div>
                    </div>
                 
                </div>
                          
                  
        </form>
        
                    
        <?php
endwhile;
endif;

?>
   </div>
                        </div>
                  </div>
                  </div>
     
            
            
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
