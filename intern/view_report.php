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
         
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
		
                  <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue"></h5>
						</div>
					</div>
				
						<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Worker ID</th>
									<th class="table-plus datatable-nosort">Full Name</th>
									<th class="table-plus datatable-nosort">Title</th>
									<th class="table-plus datatable-nosort">Comment</th>
									<th class="table-plus datatable-nosort">Date</th>
                                    <th class="table-plus datatable-nosort">Time</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
            

							<tbody>
              <?php
 $query = "select workerID, fullname, title, comment, date, time from reports";
$result = mysqli_query($con, $query);


while($row = mysqli_fetch_assoc($result)):
 
?>
								<tr>
									<td><?php echo $row['workerID']?></td>
									<td><?php echo $row['fullname']?></td>
									<td><?php echo $row['title']?></td>
									<td><?php echo $row['comment']?></td>
									<td><?php echo $row['date']?></td>
                 <td><?php echo $row['time']?></td>

									<td>
										<div class="dropdown">
											<a class="btn btn-outline-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="mdi mdi-dots-horizontal"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">

                      
      <a class="dropdown-item" class="btn-block"   href='report_view.php?id=<?php echo "{$row["workerID"]}"?>'><i class="mdi mdi-eye"></i> View Details</a>
               
                        <!-- <a class="dropdown-item" href='assign.php?id=<?php //echo "{$row["id"]}"?>'><i class="mdi mdi-grease-pencil"></i> Assign Department</a> -->
											
											</div>
										</div>
									</td>
								</tr>
							  <?php
 endwhile;
 ?>
					</div>
							</tbody>

             
						</table>
          
				</div>

        <div class="col-md-4 col-sm-12">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						
						
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
