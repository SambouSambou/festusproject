   
<?php
ob_start();

session_start();

require 'dbconfig/config.php';



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMS -  Intern</title>
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
                <span class="font-weight-bold mb-2"><?php echo $_SESSION['InternEmail']; echo $_SESSION['internID'];?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="intern_portal.php">
              <span class="menu-title">DASHBOARD</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="clock.php" >
              <span class="menu-title">CLOCK</span>
            
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">
              <span class="menu-title">SUBMIT REPORT</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title">ACCOUNT SETTINGS</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        
         
         
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                             
              </div>
              <a href="login.php"><button class="btn btn-block btn-lg btn-gradient-primary mt-4" name="logout">LOGOUT</button></a>

            
             
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
              SUBMIT REPORT
            </h3>
            
          </div>


         
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                 

                  <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" name="submit">Submit Report </h4>

                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <div class="form-group">
                      
                      <textarea class="form-control" id="exampleTextarea1" rows="10" name="report" placeholder="Enter your report here " "></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-info mr-2" name="Submit">Submit</button>
                    <form action="upload.php" enctype="multipart/form-data">
                    <button class="btn btn-danger" type="file" name="fileToUpload" id="fileToUpload">Upload</button>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                    <form>
                  </form>
                      </p>
                    </div> 
                  </div>
                </div>


<?php 

  
if (isset($_POST['Submit'])){
 
   // $id = $_SESSION['ID'];
   $id = $_SESSION['internID'];
  $fname = $_SESSION['fullname'];
  $department = "MIS";
  $report= $_POST['report'];
  
  $sql = "insert into intern_r (internID, fname,report,InternDepartment) values('$id','$fname','$report','$department')";
  //$query = "INSERT into clock_in (InternID, fname, InternDepartment,date_in,time_in) values('$id','$fname','$depart', CURRENT_DATE,CURRENT_TIME)";
    $query = mysqli_query($con, $sql);
    if($query){

        echo '<script type="text/javascript">alert("Sucess"); </script>';
        header('location:intern_portal.php');
    }
    else{
        echo '<script type="text/javascript">alert("Error!"); </script>';
        header('location:clock.php');
    }
}

?>





                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019</a>VOLTA RIVER AUTHORITY </span>
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




<?php 

  require 'dbconfig/config.php';

if (isset($_POST['fileToUpload'])){
 
 
   
  //$query = "INSERT into clock_in (InternID, fname, InternDepartment,date_in,time_in) values('$id','$fname','$depart', CURRENT_DATE,CURRENT_TIME)";
    $query1 = mysqli_query($con, $sql1);
    if($query1){

        echo '<script type="text/javascript">alert("Sucess"); </script>';
        header('location:intern_portal.php');
    }
    else{
        //echo '<script type="text/javascript">alert("Error!"); </script>';
        //header('location:clock.php');
    }
      }





$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != ".docx" && $imageFileType != ".xlsx"  ) {
//&& $imageFileType != "" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



?>


</body>

</html>
