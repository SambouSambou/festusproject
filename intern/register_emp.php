<?php
session_start();
ob_start();
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
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
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
              <span class="font-weight-bold mb-2"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?> </span>
                <span class="font-weight-bold mb-2"><?php echo $_SESSION['email'] ?>   </span>
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
            <a class="nav-link" href="register_emp.php">
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
              APPLICANTS
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
                  <h4 class="card-title">Employee Registration Form</h4>
          <form  method="post">
                    <p class="card-description">
                     Please Fill Out The Form With Personal information
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="firstname" class="form-control" autofocus Required/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lastname" class="form-control" autofocus Required/>
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
                          <label class="col-sm-3 col-form-label">First Name</label>
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
                    <div class="row">
                    <button type="submit" class="btn  btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit_btn">REGISTER EMPLOYEE</button>
                  </div>
        </form>
                </div>
              </div>
            </div>
          </div>
  
          <?php
      if(isset($_POST['submit_btn'])){
//echo '<script type="text/javascript">alert("Wrong Username Or Password")</script>';
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
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


      try {
        

        $query= "INSERT INTO employees(firstname,lastname,gender,dob,nationality,number,email,resaddress,school,course,level,specialty,caretaker,fullname,pgender,pemail,pnumber,presaddress) values('$firstname','$lastname','$gender','$dob','$nationality','$number','$email','$resaddress','$school','$course','$level','$specialty','$caretaker','$fullname','$pgender','$pemail','$pnumber','$presaddress')";
                                        
        $query_run = mysqli_query($con, $query);   


        if($query_run){
          echo '<script type="text/javascript">alert("New Employee Added Successfully"); </script>';   

       
         }
      
        else{
          echo '<script type="text/javascript">alert("Error"); </script>';
       
        }

      } catch (Exception $e) {
        $error = $e->getMessage();
        echo '<script type="text/javascript">alert("' . $error . '")</script>';
      }

      finally{
           //exit(header("Location: index.php"));
        ob_end_flush();
      }
       

                

                  
                                
             
      }
                                    

  ?>
        </div>
      </div>
    <!-- page-body-wrapper ends -->
  </div>
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
  <script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>


</body>

</html>
