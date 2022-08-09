	<?php
		session_start();
		require_once("header.php");
		require_once("dbConnection.php");
		?>
		<body>
			<?php
			if(isset($_SESSION["adminEmail"])){ 
			require_once("navbar.php");
			?>
			<section class="adminPbtnSec">
				<div id="form">
					<form id="addTeacherForm">
						<div id="formHead">
							<p>Add New Teachers</p>
						</div>
						<span class="error"></span>
						<table>
							<tr>
								<td><label>Enter Teacher Id*</label></td>
								<td>:</td>
								<td><input class="inputs form-control" type="text" name="TID" required></td>
							</tr>
							<tr>
								<td>
									<label>Enter password*</label></td>
									<td>:</td>
									<td>
										<input id="Tpassword" class="inputs form-control" type="password" name="password" required>
										<span class="TpwdError"></span>
									</td>
								</tr>
								<td>
									<label>Confirm password*</label></td>
									<td>:</td>
									<td>
										<input class="inputs form-control" type="password" name="Cnfrmpassword" required>
									</td>
								</tr>
								<tr>
									<td><label>How many Teachers you want to add?*</label></td>
									<td>:</td>
									<td><input class="inputs form-control" type="number" name="numOfTeacher" placeholder="Teachers id will be incremented by 1" required></td>
								</tr>
								<tr>
									<td>
										<br>
										<input class="submitBtn23" type="submit" name="submitBtn">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</section>
				<div id="footer2">
					<?php
					require_once("footer.php");
					?>
				</div>
			</body>
			<?php } ?>