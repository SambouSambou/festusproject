 

<?php
ob_start();

session_start();
require_once "dbconfig/config.php";
?>




<?php


if (isset($_POST['out'])){
  
    $depart = $_SESSION['depart'];
   // $id = $_SESSION['ID'];
  $fname = $_SESSION['fullname'];
  $id = $_SESSION['internID'];

$department = "MIS";
  
  $query = "insert into clock_out (InternID, fname, InternDepartment, date_out, time_out) values('$id','$fname','$department', CURRENT_DATE,CURRENT_TIME)";
  //$query = "INSERT into clock_in (InternID, fname, InternDepartment,date_in,time_in) values('$id','$fname','$depart', CURRENT_DATE,CURRENT_TIME)";
    $query_run = mysqli_query($con, $query);
    if($query_run){

      if(mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_assoc($query_run);
                // valid
                  $_SESSION['fullname']= $row['fullname'];
                  $_SESSION['InternEmail']= $row['InternEmail'];
                  $_SESSION['internID']= $row['internID'];
                  echo'<script type="text/javascript"> alert("Login Succesful!!") </script>';
                  header('location:intern_portal.php');
    }


    else{
      //invalid
      echo'<script type="text/javascript"> alert("Wrong Username Or Password") </script>';

  echo '<script type="text/javascript">alert("Wrong Username Or Password")</script>';}

        echo '<script type="text/javascript">alert("Sucess"); </script>';
        header('location: login.php');
    }
    else{
        echo '<script type="text/javascript">alert("Error!"); </script>';
        header('location: clock.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script>
    $a = jQuery.noConflict();
$a(document).ready(function(){
$a("#user").autocomplete("userAuto.php", {
                              selectFirst: true
               });
});
</script>
    <script>
    function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}
                              </script>


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
      <nav class="sidebar sidebar- offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $_SESSION['fullname']; ?></span>
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
            <a href="clock.php" class="nav-link" >
              <span class="menu-title">CLOCK</span>
            
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="emp_report.php">
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
            <?php 
                         if(isset ($_POST['logout']))
                {
                        session_destroy();
                       header('location:login.php');

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
              SUBMIT REPORT
            </h3>
            
          </div>
         
          <div class="row">
          </div>
          <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
      <div class="col-12 grid-margin">
          
              <div class="card">
                <div class="card-body">
                <div class="brand-logo">
            <!--    <img src="images/logo.svg">  -->
              </div>
                  <h4 class="card-title">Report Details</h4>
          <form  method="post">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label >Report Title</label>
                            <input type="text" name="title" class="form-control" autofocus Required/>
                      </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="10" id="comment" name="comment"></textarea>
                    </div> 
                      </div>
                      
                    </div>
                   <br><br>
                    <center>
                    <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit_btn">SUBMIT REPORT</button>
                     </center>
        </form>
                </div>
              </div>
            </div>
          </div>
  
          <?php
      if(isset($_POST['submit_btn'])){
      //echo '<script type="text/javascript">alert("Wrong Username Or Password")</script>';
      $title= $_POST['title'];
      $comment = $_POST['comment'];
      $workerID = $_SESSION['internID'];
      $fullnames = $_SESSION['fullname'];
      
      $query= "INSERT INTO reports (workerID, fullname, title, comment, date, time) values('$workerID','$fullnames','$title','$comment', CURRENT_DATE, CURRENT_TIME)";
                                        
 $query_run = mysqli_query($con, $query);         
 //exit(header("Location: index.php"));
 ob_end_flush();
                
  if($query_run){
    echo '<script type="text/javascript">alert("GOOD JOB"); </script>';   
 
   }

  else{
    echo '<script type="text/javascript">alert("Error"); </script>';
 
  }
                  
                                
             
      }
                                    

  ?>
        </div>
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<?php


if (isset($_POST['in'])){
  
    $depart = $_SESSION['depart'];
   // $id = $_SESSION['ID'];
  $fname = $_SESSION['fullname'];
  $id = $_SESSION['internID'];

$department = "MIS";
  
  $query = "insert into clock_in (InternID, fname, InternDepartment, date_in, time_in) values('$id','$fname','$department', CURRENT_DATE,CURRENT_TIME)";
  //$query = "INSERT into clock_in (InternID, fname, InternDepartment,date_in,time_in) values('$id','$fname','$depart', CURRENT_DATE,CURRENT_TIME)";
    $query_run = mysqli_query($con, $query);
    if($query_run){

        echo '<script type="text/javascript">alert("Sucess"); </script>';
        header('location: clock.php');
    }
    else{
        echo '<script type="text/javascript">alert("Error!"); </script>';
        header('location: clock.php');
    }
}


if (isset($_POST['out'])){
  
  $depart = $_SESSION['depart'];
 // $id = $_SESSION['ID'];
$fname = $_SESSION['fullname'];
$id = $_SESSION['internID'];

$department = "MIS";

$query = "insert into clock_out (InternID, fname, InternDepartment, date_in, time_in) values('$id','$fname','$department', CURRENT_DATE,CURRENT_TIME)";
//$query = "INSERT into clock_in (InternID, fname, InternDepartment,date_in,time_in) values('$id','$fname','$depart', CURRENT_DATE,CURRENT_TIME)";
  $query_run = mysqli_query($con, $query);
  if($query_run){

      echo '<script type="text/javascript">alert("Sucess"); </script>';
      header('location: clock.php');
  }
  else{
      echo '<script type="text/javascript">alert("Error!"); </script>';
      header('location: clock.php');
  }
}

?>


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
