<?php

require 'dbconfig/config.php';
session_start();



if(isset($_POST['submit_btn'])){

    $username = $_POST['username'];
   // $email =$_POST['email'];
    $password = $_POST['password'];


    $query="select * from users WHERE username='$username' AND initialpassword='$password'";
   

    $query_run = mysqli_query($con, $query);
  
    
    if(mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_assoc($query_run);
                // valid
                //  $_SESSION['fullname']= $row['fullname'];
                  $_SESSION['username']= $row['username'];
                  $_SESSION['firstname'] = $row['firstname'];
                  $_SESSION['lastname'] = $row['lastname'];
                  $_SESSION['userID'] = $row['userID'];
                  $designation = $row['designation'];
                  

                  if($designation = 'Administrator'){
                    echo'<script type="text/javascript"> alert("New user added successfully") </script>';
                  header('location:home1.php');
                  }

                 elseif($designation = 'User'){
                    echo'<script type="text/javascript"> alert("Login Succesful!!") </script>';
                 header('location:intern_portal.php');
                  }
                  
                  
    }


    else{
      //invalid
      echo'<script type="text/javascript"> alert("Wrong Username Or Password") </script>';

  echo '<script type="text/javascript">alert("Wrong Username Or Password")</script>';}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMS - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/logo.svg">
              </div>
              <h4>Hello! Welcome</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit_btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                
                  <a href="mail_int.php" class="auth-link text-black">Forgot password? / Reset</a>
                </div>
               
              </form>



            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->


</body>

</html>
