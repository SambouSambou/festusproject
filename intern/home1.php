<?php
        session_start();
        require 'dbconfig/config.php';
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
                <span class="font-weight-bold mb-2">                  <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?> </span>
                <span class="font-weight-bold mb-2">                  <?php echo $_SESSION['designation'] ?>   </span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>


            <?php
$result = mysqli_query($con, "select * from students");
$result2 = mysqli_query($con,"select count(*) as total from students where YEARWEEK(createdDate)=YEARWEEK(NOW())");
$net = mysqli_query($con, "select count(*) as net from students where specialty = 'Networking'");
$eng = mysqli_query($con, "select count(*) as eng from students where specialty = 'Engineering'");
$cmh = mysqli_query($con, "select count(*) as cmh from students where specialty = 'Computer Hardware'");
$wdev = mysqli_query($con, "select count(*) as wdev from students where specialty = 'Web Development'");
$sdev = mysqli_query($con, "select count(*) as sdev from students where specialty = 'Software Development'");
$hres = mysqli_query($con, "select count(*) as hres from students where specialty = 'Human Resource'");
$cyb = mysqli_query($con, "select count(*) as cyb from students where specialty = 'Cyber Security'");
$dat= mysqli_query($con, "select count(*) as dat from students where specialty = 'Database Administration'");

$num_rows = mysqli_num_rows($result);


?>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="home1.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adduser.php">
              <span class="menu-title">Add New User</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <span class="menu-title">Register New Student</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
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
                             
              </div>
              <a href="index.php"><button class="btn btn-block btn-lg btn-gradient-primary mt-4" name="logout">LOGOUT</button></a>
              <?php 
                         if(isset ($_POST['logout']))
                {
                        session_destroy();
                       header('location:index.php');

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
              APPLICANTS SPECIALITIES 
            </h3>
            
          </div>
          <?php
$result = mysqli_query($con, "select * from students");
$result2 = mysqli_query($con,"select count(*) as total from students where YEARWEEK(createdDate)=YEARWEEK(NOW())");
$num_rows = mysqli_num_rows($result);
?>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php echo $num_rows;?></h2>
                  <h4 class="font-weight-normal mb-3"><b>Total Employees</b>
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php //echo $num_rows; //THIS IS WHERE I WILL ADD UP THE CONNECTION TO SHOW WHETHER THE SPECIALIATIES ARE ADDED OR NOT.?></h2>
                
                </div>
              </div>
            </div>

             <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                    $row = mysqli_fetch_array($result2);
                                        echo $row['total'];
                                
                                    ?></h2>
                                    <span 
                  <h4 class="font-weight-normal mb-3"><b>APPLICANT THIS WEEK</b>
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php //echo $num_rows;//THIS IS WHERE I WILL ADD UP THE CONNECTION TO SHOW WHETHER THE SPECIALIATIES ARE ADDED OR NOT.?></h2>
                
                </div>
              </div>
            </div>

             <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php $row1 = mysqli_fetch_array($sdev); 
                                    echo $row1['sdev']; ?></h2>
                  <h4 class="font-weight-normal mb-3">Software Development
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php //echo $num_rows; //THIS IS WHERE I WILL ADD UP THE CONNECTION TO SHOW WHETHER THE SPECIALIATIES ARE ADDED OR NOT.?></h2>
                
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                    $row2 = mysqli_fetch_array($net); 
                                    echo $row2['net']; 
                                
                                    ?></h2>                  
                  <h4 class="font-weight-normal mb-3">Networking
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                  <?php 

                  //THIS IS WHERE I WILL ADD UP THE CONNECTION TO SHOW WHETHER THE SPECIALIATIES ARE ADDED OR NOT. 
                                   // $row = mysqli_fetch_array($result2);
                                        //echo $row['total'];
                                
                                    ?>
                  </h2>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                   
                                   $row3 = mysqli_fetch_array($hres); 
                                   echo $row3['hres'];
                                
                                    ?></h2>                                    
                  <h4 class="font-weight-normal mb-3">Human Resource/Administration
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  
              
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                                   
                                   
                                <h2 class="number"><?php 
                                    
                                    $row4 = mysqli_fetch_array($cmh); 
                                    echo $row4['cmh'];
                                
                                    ?></h2>                                    
                  <h4 class="font-weight-normal mb-3">Computer Hardware
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  
              
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                   
                                   
                                  $row5 = mysqli_fetch_array($eng); 
                                    echo $row5['eng'];
                                
                                    ?></h2>                                    
                  <h4 class="font-weight-normal mb-3">Engineering
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  
              
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                   
                                   
                                  $row6 = mysqli_fetch_array($wdev); 
                                    echo $row6['wdev'];
                                
                                    ?></h2>                                    
                  <h4 class="font-weight-normal mb-3">Web Development
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  
              
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php 
                                   
                                   
                                  $row7 = mysqli_fetch_array($dat); 
                                    echo $row7['dat'];
                                
                                    ?></h2>                                    
                  <h4 class="font-weight-normal mb-3">Database Administration
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  
              
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="number"><?php $row8 = mysqli_fetch_array($cyb); 
                                    echo $row8['cyb'];?></h2>
                  <h4 class="font-weight-normal mb-3">Cyber Security
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  

          </div>
          <div class="row">
            
           
          </div>
          </div>
           <div class="col-md-4 stretch-card grid-margin">
             
              
                </div>
              </div>
            </div>
         
         
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 </a>Purple Systems, Inc. <a href="#"span>
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
