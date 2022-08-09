<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<div class="container" id="profile">
		<img id="profilePic" src="images/avatar.png">
		<p>Maksuda</p>
		<table class="table table-bordered" id="profileTable">
			<tr>
				<th>Name</th>
				<td>Maksuda</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>maksudabilkis@gmail.com</td>
			</tr>
			<tr>
				<th>Password</th>
				<td>........</td>
			</tr>
			<tr>
				<th>Contact No.</th>
				<td>01723490762</td>
			</tr>
			<tr>
				<th>Department Name</th>
				<td>CSE</td>
			</tr>
			<tr>
				<th>Profession</th>
				<td>Student</td>
			</tr>
			<tr>
				<th>Level</th>
				<td>3rd</td>
			</tr>
			<tr>
				<th>Semester</th>
				<td>II</td>
			</tr>
			<tr>
				<th>DOB</th>
				<td>01/01/1998</td>
			</tr>
			<tr>
				<th>Gender</th>
				<td>Female</td>
			</tr>
		</table>
	</div>
	<?php
	require_once("footer.php");
	?>
</body>