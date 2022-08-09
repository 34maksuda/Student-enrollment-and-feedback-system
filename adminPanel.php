<?php
session_start();
if(isset($_SESSION["adminEmail"])){
	require_once("header.php");
	require_once("dbConnection.php");
	?>
	<body>
		<?php 
		require_once("navbar.php");
		
		if(isset($_COOKIE['adminLogS'])){ ?>
			<span id="successful" class="adLog">Logged in successfully!!</span>
			<?php setcookie("adminLogS","qwgbh",time()-(30));;}
			?>
			<section class="adminPbtnSec">
				<a href="adminProfile.php">
					<div id="adminProfile87">
						<?php
						$adminEmail= $_SESSION["adminEmail"]; 
						$selectAdmin = "SELECT * FROM adminregistration WHERE email= '$adminEmail'";
						$runSelectAdmin = mysqli_query($connection,$selectAdmin);
						$admin = mysqli_fetch_array($runSelectAdmin);
						$adminProfilePic = $admin["profilePic"];
						?>
						<img src="profilePicture/<?php echo $adminProfilePic; ?>">
					</div>
				</a>
				<a href="adminEnrollment.php">
					<div class="manageBtn givPMar">
						<span><i class="fas fa-info-circle"></i></i></span>
						<br><span>Manage Enrollment</span>
					</div>
				</a>
				<a href="#">
					<div class="manageBtn">
						<span><i class="fas fa-info-circle"></i></span>
						<br><span>Manage Result</span>
					</div>
				</a>
				<a href="registeredTeacher.php">
					<div class="manageBtn givPMar">
						<span><i class="fa fa-registered"></i></span>
						<br><span>Registered Teachers</span>
					</div>
				</a>
				<a href="registeredStudents.php">
					<div class="manageBtn">
						<span><i class="fa fa-registered"></i></i></span>
						<br><span>Registered Students</span>
					</div>
				</a>
				<br>
				<a href="addTeachers.php">
					<div class="manageBtn givPMar">
						<span><i class="fas fa-plus"></i></span>
						<br><span class="addBtn">Add Teachers</span>
					</div>
				</a>
				<a href="addStudentsForms.php">
					<div class="manageBtn">
						<span><i class="fas fa-plus"></i></span>
						<br><span class="addBtn">Add students</span>
					</div>
				</a>
			</section>
			<!--<div id="dynamicFeedback">
				<form id="dynamicFeedbackForm">
					<p>Give questions to the students</p>
					<span id="numOfQError"></span><br>
					<label>How many questions you want to give your students?</label>
					<br>
					<small class="numOfQError"></small>
					<input type="number" name="numOfQues" id="numOfQues" placeholder="number of questions" required>
					<input type="submit" id="numOfQuesSubBtn" value="add">
				</form>
			</div> -->
		<?php } 
		else{
			setcookie("notLoggedIn","asdfghj",time()+10);
			header("location:homepage.php?notLoggedIn");
		}?>
		<div id="adminPanelFooter">
			<?php
			require_once("footer.php");
			 ?>
		</div>
	</body>