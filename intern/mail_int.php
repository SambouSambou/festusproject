<?php
session_start();
require_once "dbconfig/config.php";
 

 function redirect_to($new_location)
 {
                    header("location:". $new_location);

                   }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMS - Admin reset password</title>
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
              <h4>Hello! Welcome Adminstrator,</h4>
              <h6 class="font-weight-light">Enter Your Email.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
               
                <div class="mt-3">
                  <button type="submit"  name="login" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  
                </div>
              
               
              </form>

              <?php
if(isset($_POST['login'])){

    $email =$_POST['email'];

    $query1="select * from interns WHERE InternEmail='$email'";

    $query_runs = mysqli_query($con, $query1);
    if(mysqli_num_rows($query_runs))
    {
  
                  echo'<script type="text/javascript"> alert("EMAIL FOUND!!") </script>';

                  
            
         

               redirect_to("reset_int.php?InternEmail=$email");
            
               
    }


    else{
      //invalid
      echo'<script type="text/javascript"> alert("EMAIL NOT FOUND!!!") </script>';
    }

}







?>




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
