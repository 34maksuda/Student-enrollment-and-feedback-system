<?php
session_start();
if(isset($_SESSION["adminEmail"])){
	require_once("header.php");
	require_once("dbConnection.php");
	?>
	<body>
		<?php 
		require_once("navbar.php");
		?>
		<section id="teacherInfo">
			<?php
			$adminEmail = $_SESSION["adminEmail"];
			$selectAdminId = "SELECT adminId FROM adminregistration WHERE email = '$adminEmail'";
			$runSelectAdminId = mysqli_query($connection,$selectAdminId);
			if($runSelectAdminId == true){
				$admin= mysqli_fetch_array($runSelectAdminId);
				$adminId = $admin["adminId"];
				$selectTeachers = "SELECT * FROM teacher WHERE adminId ='$adminId'";
				$runSelectTeachers = mysqli_query($connection,$selectTeachers);
				$numOfRows = mysqli_num_rows($runSelectTeachers);
				if($runSelectTeachers == true && $numOfRows >= 0){ ?>
					<table id="registeredT">
						<tr>
							<th>Serial No.</th>
							<th>Teacher's Id</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Gender</th>
						</tr>
						<?php
						$i=1;
						while($teacher = mysqli_fetch_array($runSelectTeachers)){ ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $teacher['teacherId']; ?></td>
								<td><?php if($teacher['name'] != NULL) {echo $teacher['name'];} else{
									echo "Not provided";
								} ?></td>
								<td><?php if($teacher['email'] != NULL) {echo $teacher['email'];} else{
									echo "Not provided";
								} ?></td>
								<td><?php if($teacher['gender'] != NULL) {echo $teacher['gender'];} else{
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
					echo "error in adminId selection query.";
				}
			}
			else{
				setcookie("notLoggedIn","asdfghj",time()+10);
				header("location:homepage.php?notLoggedIn");
			} ?>
		</table>
	</section>