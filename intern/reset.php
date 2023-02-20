<?php
session_start();
require_once "dbconfig/config.php";
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
              <h6 class="font-weight-light">Sign in to Change Your Password.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">

                  
                  
                </div>
                <?php
                if(isset($_GET['email'])){

                $txt = $_GET['email'];
               
                
              
                }?>


              <!-- THIS ARE THE FORMS-->
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-lg" id="exampleInputPassword1" value="<?php echo $txt ?>">
                </div>
                <div class="form-group">
                  <input type="password" name="Npassword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="Cpassword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit_btn">SIGN IN</button>
                  
                </div>
              
               
              </form>

              <?php
if(isset($_POST['submit_btn'])){


    $Npassword = $_POST['Npassword'];
    $Cpassword=$_POST['Cpassword'];

    if($Npassword==$Cpassword){

     $sql = "UPDATE admin set password = '$Npassword' where email= '$txt'";

    $query_run = mysqli_query($con, $sql);
    if($query_run){

      header('location:admin.php');
    }


    else{
      //invalid
      echo'<script type="text/javascript"> alert("Wrong Username Or Password") </script>';
    }

}


}

/*if(isset($_GET['id'])){

$txt = $_GET['id'];
$result3 = mysqli_query($con, "select * from admin where email = \"$txt\"");
echo "<table>";
while($row = mysqli_fetch_assoc($result3));
}*/





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
