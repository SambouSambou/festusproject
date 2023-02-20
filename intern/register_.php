<?php
require 'dbconfig/config.php'; 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMS - Register</title>
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

  <script type="text/javascript">-0
<!--
function alpha(e) {
     var k;
     document.all ? k = e.keyCode : k = e.which;
     return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
}
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
// -->
</script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
      <div class="col-12 grid-margin">
          
              <div class="card">
                <div class="card-body">
                <div class="brand-logo">
           <!--     <img src="images/logo.svg"> -->
              </div>
                  <h4 class="card-title">Employee Registration Form</h4>
          <form  method="post">
                    <p class="card-description">
                     Please Fill Out The Form With Personal information
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" autofocus Required/>
                          </div>
                        </div>
                      </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                          <select name="designation" class="form-control">
                              <option>Administrator</option>
                              <option>User</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="gender" class="form-control" required>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input name="dob" class="form-control" type="date" placeholder="dd/mm/yyyy" Required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nationality</label>
                          <div class="col-sm-9">
                            <input type="text" name="nationality" onkeypress="return alpha(event)" class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="number" onkeypress="return isNumberKey(event)" class="form-control" Required/>
                          </div>
                          <div class="col-sm-5">
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">E-mail Address</label>
                          <div class="col-sm-9">
                            <input name="email" type="email"class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Residential Address</label>
                          <div class="col-sm-9">
                            <input name="resaddress" type="text" class="form-control" Required/>
                          </div>
                          <div class="col-sm-5">
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                     Institution Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name Of Institution</label>
                          <div class="col-sm-9">
                            <input name="school" type="text" onkeypress="return alpha(event)" class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Programme Of Study</label>
                          <div class="col-sm-9">
                            <input name="course" type="text" onkeypress="return alpha(event)" class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Level</label>
                          <div class="col-sm-9">
                          <select name="level" class="form-control">
                              <option>100</option>
                              <option>200</option>
                              <option>300</option>
                              <option>400</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Specialty</label>
                          <div class="col-sm-9">
                          <select name="specialty" class="form-control">
                              <option>Software Development</option>
                              <option>Networking</option>
                              <option>Human Resource/Administration</option>
                              <option>Computer Hardware</option>
                              <option>Engineering</option>
                              <option>Web Development</option>
                              <option>Database Administration</option>
                              <option>Cyber Security</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <p class="card-description">
                     Parent / Guardian Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent / Guardian </label>
                          <div class="col-sm-9">
                          <select name="caretaker" class="form-control">
                              <option>Parent</option>
                              <option>Guardian</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Name</label>
                          <div class="col-sm-12">
                            <input name="fullname" type="text"  onkeypress="return alpha(event)" class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                          <select name="pgender" class="form-control" >
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">E-mail Address</label>
                          <div class="col-sm-9">
                            <input name="pemail" type="email" class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input name="pnumber" type="text"  onkeypress="return isNumberKey(event)"  class="form-control" Required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Residential Address</label>
                          <div class="col-sm-9">
                            <input name="presaddress" type="text" class="form-control" Required/>
                          </div>
                          <div class="col-sm-5">
                           
                          </div>
                        </div>
                  </div>
                  </div>
                   <br><br>
                    <center>
                    <button type="submit" class="btn  btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit_btn">SIGN IN</button>
                     </center>
        </form>
                </div>
              </div>
            </div>
          </div>
  
          <?php
      if(isset($_POST['submit_btn'])){
//echo '<script type="text/javascript">alert("Wrong Username Or Password")</script>';
      $fname= $_POST['fname'];
      $gender = $_POST['gender'];
      $dob =$_POST['dob'];
      $nationality = $_POST['nationality'];
      $number = $_POST['number'];
      $email = $_POST['email'];
      $resaddress =$_POST['resaddress'];
      $school= $_POST['school'];
      $course = $_POST['course'];
      $level = $_POST['level'];
      $specialty = $_POST['specialty'];
      $caretaker = $_POST['caretaker'];
      $fullname =$_POST['fullname'];
      $pgender= $_POST['pgender'];
      $pemail = $_POST['pemail'];
      $pnumber = $_POST['pnumber'];
      $presaddress = $_POST['presaddress'];
  $query= "INSERT INTO students(fname,gender,dob,nationality,number,email,resaddress,school,course,level,specialty,caretaker,fullname,pgender,pemail,pnumber,presaddress) values('$fname','$gender','$dob','$nationality','$number','$email','$resaddress','$school','$course','$level','$specialty','$caretaker','$fullname','$pgender','$pemail','$pnumber','$presaddress')";
                                        
 $query_run = mysqli_query($con, $query);         
 exit(header("Location: index.php"));
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
  <!--script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script-->


</body>

</html>
