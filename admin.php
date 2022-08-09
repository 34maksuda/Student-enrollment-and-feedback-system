<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<div id="admin">
		<div class="row">
			<div class="col-2" id="admenus">
				<div id="fmwrapper">
					<a href="admin.php"><i class="fas fa-user"></i>manage users</a>
					<a href="change_password.php"><i class="fa fa-key" aria-hidden="true"></i>change password</a>
					<a href="feedback.php"><i class="far fa-thumbs-up"></i>feedback</a>
				</div>
			</div>
			<div class="col-10 users">
				<div id="showFeedback">
					<table class="table table-bordered">
						<thead>
							<tr class="bg">
								<th>User's Name</th>
								<th>User's Email</th>
								<th>Password</th>
								<th>Contact No.</th>
								<th>Department Name</th>
								<th>Profession</th>
								<th>Reading Year(Level)</th>
								<th>Semester</th>
								<th>DOB</th>
								<th>Gender</th>
								<th>ProfilePic</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Maksuda</td>
								<td>maksudabilkis69@gmail.com</td>
								<td>studentsSpeak</td>
								<td>01722839326</td>
								<td>CSE</td>
								<td>Student</td>
								<td>3rd</td>
								<td>II</td>
								<td>09/06/1998</td>
								<td>Female</td>
								<td>ami.png</td>
								<td><a href="#">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
	require_once("footer.php");
	?>
</body>