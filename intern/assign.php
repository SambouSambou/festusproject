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
            <a class="nav-link"  href="view_app.php" >
              <span class="menu-title">View Applicants</span>
            
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="view_inter.php">
              <span class="menu-title">View Interns</span>
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
              ACCEPT AND ASSIGN APPLICANT
            </h3> 
          </div>
    
         
     
          
           
              <div class="col-md-8 grid-margin stretch-card ">
              <div class="card">
                <div class="card-body ">


                <?php

if(isset($_GET['id'])):
$txt = $_GET['id'];

//$result3 ="INSERT INTO  interns (internID, fullName, DepartName,DepartSection,Specialty,InternEmail,InternPassword,startDate,endDate) values('$txt'$id','$fname','$depart','$section','$specialty','$email','$password','$sDate','$eDate')";

$result3 = mysqli_query($con, "select * from students where ID = \"$txt\"");
echo "<table>";
while($row = mysqli_fetch_assoc($result3)):

  //THIS UNDER CODES HELPS TO PUT THE CALLED DATA INTO THE DATABASE
    $id=$row['ID'];
    $fname = $row['fname'];
    $Specialty = $row['specialty'];
    $email=$row['email'];
   $Department = "Management Information System";


  //this for the entries
                
             

                // this is the end.



                ?>
                 
                 
                  <form class="form-control-lge" method="POST">
                  <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">ID</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['ID']?>" name="id"  disabled/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Full Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['fname']?>" name="fname"  disabled/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Intern's Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['email']?>" name="email" disabled />
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Assign Password</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="password" placeholder="Enter Password" Required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Specialty</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['specialty']?>" name="specialty" disabled />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Department</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Email" Value="Managment Information System" name="depart" disabled/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Section</label>
                      <div class="col-sm-9">
                      <select name="section" class="form-control" >
                              <option>Adminstration</option>
                              <option>Client Services And Training</option>
                              <option >Business Solution</option>
                              <option>ICT Infrastructure</option>
                              <option>Documents Management</option>
                              
                            </select>
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                      <input  class="form-control" name="sDate" type="date" placeholder="dd/mm/yyyy" Required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-9">
                      <input  class="form-control" name="eDate" type="date" placeholder="dd/mm/yyyy" Required/>
                      </div>
                    </div>
                  <center>
                    <button type="submit" class="btn btn-gradient-info mr-2" name="submit">Submit</button>
                   
                </center>
                  </form>





















                </div>
            
                  


                       
                <?php





 

//if(isset($_GET['id'])){
//$txt = $_GET['id'];

//$result3 ="INSERT INTO  interns (internID, fullName, DepartName,DepartSection,Specialty,InternEmail,InternPassword,startDate,endDate) values('$txt'$id','$fname','$depart','$section','$specialty','$email','$password','$sDate','$eDate')";

//$result3 = mysqli_query($con, "INSERT into interns from students where ID = \"$txt\"");
//echo "<table>";
//}


  //this for the entries
                
             

                // this is the end.



                



endwhile;
endif;

?>


<?php




   if(isset($_POST['submit'])){


    //if(isset($_GET['id'])){
//$txt = $_GET['id'];

//$result3 ="INSERT INTO  interns (internID, fullName, DepartName,DepartSection,Specialty,InternEmail,InternPassword,startDate,endDate) values('$txt'$id','$fname','$depart','$section','$specialty','$email','$password','$sDate','$eDate')";

//$result3 = mysqli_query($con, "INSERT * from students where ID = \"$txt\"");
//echo "<table>";

//while($row = mysqli_fetch_assoc($result3));}


                  
                 // $fname=$row['fname'];
                  //$depart=$row['depart'];
                  $section=$_POST['section'];
                  //$specialty=$row['specialty'];
                  $password=$_POST['password'];
                  $sDate=$_POST['sDate'];
                  $eDate=$_POST['eDate'];
                  


              $sql="INSERT INTO  interns (internID, fullName, DepartName,DepartSection,Specialty,InternEmail,InternPassword,startDate,endDate) values('$id','$fname','$Department','$section','$Specialty','$email','$password','$sDate','$eDate')";

              $query=mysqli_query($con,$sql);


                  if($query){

                     echo'<script type="text/javascript"> alert("Succesful!!") </script>';                                                                                                                                                                                                                                  
                  }else {
                    # code...
                      mysqli_error($sql);
                    echo'<script type="text/javascript"> alert(" Failed!!") </script>';
                  }



                
              }
              

?>












               
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
