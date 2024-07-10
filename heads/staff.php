<?php include('includes_hod/header.php') ?>
<?php include('../includes/session.php') ?>
<?php
if (isset($_GET['delete'])) {
	$delete = $_GET['delete'];
	$sql = "DELETE FROM tblemployees where emp_id = " . $delete;
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Staff deleted Successfully');</script>";
		echo "<script type='text/javascript'> document.location = 'staff.php'; </script>";
	}
}

?>

<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../vendors/images/favicon-32x32.png" alt="" style="height: 100px; width: 100px;"></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<?php include('includes_hod/navbar.php') ?>

	<?php include('includes_hod/right_sidebar.php') ?>

	<?php include('includes_hod/left_sidebar.php') ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="title pb-20">
				<h2 class="h3 mb-0">HOD Breakdown</h2>
			</div>

			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<?php
						$sql = "SELECT emp_id from tblemployees WHERE Department = '$session_depart'";
						$query = $dbh->prepare($sql);
						$query->execute();
						$empcount = $query->rowCount();
						?>
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo $empcount; ?></div>
								<div class="font-14 text-secondary weight-500">Total Faculty in Department <br><br></div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-user-2"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<?php
						$status = 1;
						$sql = "SELECT id from tblleaves WHERE Status = :status AND empid IN (SELECT emp_id FROM tblemployees WHERE Department = '$session_depart')";
						$query = $dbh->prepare($sql);
						$query->bindParam(':status', $status, PDO::PARAM_STR);
						$query->execute();
						$approvedLeaveCount = $query->rowCount();
						?>
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo $approvedLeaveCount; ?></div>
								<div class="font-14 text-secondary weight-500">Approved Leave <br> <br><br></div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><span class="icon-copy fa fa-hourglass"></span></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<?php
						$status = 0;
						$sql = "SELECT id from tblleaves WHERE Status = :status AND empid IN (SELECT emp_id FROM tblemployees WHERE Department = '$session_depart')";
						$query = $dbh->prepare($sql);
						$query->bindParam(':status', $status, PDO::PARAM_STR);
						$query->execute();
						$pendingLeaveCount = $query->rowCount();
						?>
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo $pendingLeaveCount; ?></div>
								<div class="font-14 text-secondary weight-500">Pending Leave <br><br> <br></div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-hourglass-end" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<?php
						$status = 2;
						$sql = "SELECT id from tblleaves WHERE Status = :status AND empid IN (SELECT emp_id FROM tblemployees WHERE Department = '$session_depart')";
						$query = $dbh->prepare($sql);
						$query->bindParam(':status', $status, PDO::PARAM_STR);
						$query->execute();
						$rejectedLeaveCount = $query->rowCount();
						?>
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo $rejectedLeaveCount; ?></div>
								<div class="font-14 text-secondary weight-500">Rejected Leave <br><br> <br></div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><i class="icon-copy fa fa-hourglass-o" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>








			<div class="card-box mb-30">
				<div class="pd-20">
					<h2 class="text-blue h4">ALL EMPLOYEES</h2>
				</div>
				<div class="col-md-5">
					<input type="text" id="searchInput2" class="form-control" placeholder="Search....">
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap" id="table28">
						<thead>
							<tr>
								<th class="table-plus">FULL NAME</th>
								<th>EMAIL</th>
								<th>PHONE NUMBER</th>
								<th>POSITION</th>
								<th>AVE. LEAVE</th>
								<th class="datatable-nosort">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>

								<?php
								//  $teacher_query = mysqli_query($conn,"select * from tblemployees LEFT JOIN tbldepartments ON tblemployees.Department = tbldepartments.DepartmentShortName where tblemployees.role = 'Staff' and tblemployees.Department = '$session_depart' ORDER BY tblemployees.emp_id") or die(mysqli_error());

								$teacher_query = mysqli_query($conn, "select * from tblemployees LEFT JOIN tbldepartments ON tblemployees.Department = tbldepartments.DepartmentShortName where tblemployees.role = 'Staff' and tblemployees.Department = '$session_depart' ORDER BY tblemployees.emp_id") or die(mysqli_error());
								while ($row = mysqli_fetch_array($teacher_query)) {
									$id = $row['emp_id'];
								?>

									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="avatar mr-2 flex-shrink-0">
												<img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" class="border-radius-100 shadow" width="40" height="40" alt="">
											</div>
											<div class="txt">
												<div class="weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
											</div>
										</div>
									</td>
									<td><?php echo $row['EmailId']; ?></td>
									<td><?php echo $row['Phonenumber']; ?></td>
									<td><?php echo $row['role']; ?></td>
									<td><?php echo $row['Av_leave']; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="edit_staff.php?edit=<?php echo $row['emp_id']; ?>"><i class="dw dw-edit2"></i> View Details</a>
												<a class="dropdown-item" href="document.php?edit=<?php echo $row['emp_id']; ?>"><i class="dw dw-edit2"></i>View Document</a>
												<a class="dropdown-item" href="leave_history.php?emp_id=<?php echo $row['emp_id']; ?>"><i class="dw dw-edit2"></i> Leave History</a>

											</div>
										</div>
									</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<div class="weight-500 col-md-6">
						<div class="form-group ">
							<label></label>
							<div class="modal-footer justify-content-center">

								<form method="post" action="includes_hod/data.php">
									<button type="submit" name="export" style="border-radius: 5px; padding: 10px; background-color:#9c94db; ">Download CSV</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include('includes_hod/footer.php'); ?>
	</div>
	</div>
	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#searchInput2").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#table28 tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>


	<?php include('includes_hod/scripts.php') ?>
</body>

</html>