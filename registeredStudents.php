<?php
session_start();
if(isset($_SESSION["adminEmail"])){
	require_once("header.php");
	require_once("dbConnection.php");
	?>
	<body style="overflow-x: scroll;">
		<?php 
		require_once("navbar.php");
		?>
		<section id="studentInfo">
			<?php
			$adminEmail = $_SESSION["adminEmail"];
			$selectAdminId = "SELECT adminId FROM adminregistration WHERE email = '$adminEmail'";
			$runSelectAdminId = mysqli_query($connection,$selectAdminId);
			if($runSelectAdminId == true){
				$admin= mysqli_fetch_array($runSelectAdminId);
				$adminId = $admin["adminId"];
				$selectTeachers = "SELECT * FROM teacher WHERE adminId ='$adminId'";
				$selectStudents = "SELECT * FROM studentregistration";
				$runSelectStudents = mysqli_query($connection,$selectStudents);
				$numOfRows = mysqli_num_rows($runSelectStudents);
				if($runSelectStudents == true && $numOfRows >= 0){ ?>
					<table id="studentT">
						<tr>
							<th>Serial No.</th>
							<th>student's Id</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Level</th>
							<th>Semester</th>
							<th>Section</th>
							<th>Session</th>
							<th>attendance</th>
							<th>Gender</th>
						</tr>
						<?php
						$i=1;
						while($student = mysqli_fetch_array($runSelectStudents)){ ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $student['studentId']; ?></td>
								<td><?php if($student['Name'] != NULL) {echo $student['Name'];} else{
									echo "Not provided";
								} ?></td>
								<td><?php if($student['email'] != NULL) {echo $student['email'];} else{
									echo "Not provided";
								} ?></td>
								<td><?php if($student['Level'] != NULL) {echo $student['Level'];} else{
									echo "Not provided";
								} ?></td>

								<td><?php if($student['semester'] != NULL) {echo $student['semester'];} else{
									echo "Not provided";
								} ?></td>

								<td><?php if($student['section'] != NULL) {echo $student['section'];} else{
									echo "Not provided";
								} ?></td>

								<td><?php if($student['session'] != NULL) {echo $student['session'];} else{
									echo "Not provided";
								} ?></td>
								<td><?php if($student['attendance'] != NULL) {echo $student['attendance'];} else{
									echo "Not provided";
								} ?></td>

								<td><?php if($student['gender'] != NULL) {echo $student['gender'];} else{
									echo "Not provided";
								} ?></td>
							</tr>
						<?php }
					} 
					else{
						echo "Error in SQL query";
					}
				}
				else{
					echo "adminId selection query wrong.";
				}
			}
			else{
				setcookie("notLoggedIn","asdfghj",time()+10);
				header("location:homepage.php?notLoggedIn");
			} ?>
		</table>
	</section>