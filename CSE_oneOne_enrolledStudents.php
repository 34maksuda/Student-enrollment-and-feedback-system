<?php
session_start();
if(isset($_SESSION["adminEmail"])){
	require_once("header.php");
	require_once("dbConnection.php");
	?>
	<body>
		<?php 
		$adminEmail = $_SESSION["adminEmail"];
		require_once("navbar.php");
		?>
		<div class="wrapper row">
			<div class="col-md-3 menus">
				<ul>
					<a href="adminEnrollment.php"><li>Manage Enrollment</li></a>
					<a href="enrolledStudents.php"><li>Enrolled Students</li></a>
				</ul>
			</div>
			<div class="col-md-8 enrolledStudents">
				<p>Department of Computer Science & Engineering</p>
				<span>Level 1 Semester I</span>
				<?php 
				$selectEnrolledStudents = "SELECT * FROM enrolledstudents WHERE department = 'CSE' AND level = '1st year' AND semester = 'I' order by enrolledStatus DESC"; 
				$runSelectEnrolledStudents = mysqli_query($connection, $selectEnrolledStudents); ?>
				<table>
					<tr>
						<th>Student ID</th>
						<th>Enrollment Status</th>
					</tr>
				<?php 
				while ($enrolledStudents = mysqli_fetch_array($runSelectEnrolledStudents)) { 
					$SID = $enrolledStudents["studentId"];
					$enStatus =  $enrolledStudents["enrolledStatus"];
					?>
					<tr>
					<td><a href="<?php if($enStatus == "enrolled"){ ?>confirmEnrollment.php?stuId=<?php echo $SID; } else{ ?>individualEnrollment.php?stuId=<?php echo $SID; } ?>"
						><?php echo $SID; ?></a></td>
						<td><?php echo $enrolledStudents["enrolledStatus"]; ?></td>
					</tr>
				<?php }
				?>
			</div>
			<div class=" col-md-1 blank">
			</div>
		</div>
	</body>
	<?php } ?>