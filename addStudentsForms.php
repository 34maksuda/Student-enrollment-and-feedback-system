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
					<form id="addStuForm">
						<div id="formHead">
							<p>Add New Students</p>
						</div>
						<span class="error"></span>
						<table>
							<tr>
								<td><label>Enter student Id*</label></td>
								<td>:</td>
								<td><input class="inputs form-control" type="text" name="SID" required></td>
							</tr>
							<tr>
								<td>
									<label>Enter password*</label></td>
									<td>:</td>
									<td>
										<input id="Spassword" class="inputs form-control" type="password" name="password" required>
										<span class="stpwdError"></span>
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
									<td><label>Enter Level*</label></td>
									<td>:</td>
									<td>
										<select name="level"  class="inputs form-control">
											<option>1st year</option>
											<option>2nd year</option>
											<option>3rd Year</option>
											<option>4th Year</option>
											<option>5th year</option>
											<option>6th year</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label>Enter semester*</label></td>
									<td>:</td>
									<td>
										<select name="semester" class="inputs form-control">
											<option>I</option>
											<option>II</option>
											<option>III</option>
											<option>IV</option>
											<option>V</option>
											<option>VI</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label>Enter section</label></td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="section"></td>
								</tr>
								<tr>
									<td><label>Enter session*</label></td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="session" required></td>
								</tr>
								<tr>
									<td><label>Enter the percentage of attendance</label></td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="attendance" required=""></td>
								</tr>
								<tr>
									<td><label>How many students you can add?*</label></td>
									<td>:</td>
									<td><input class="inputs form-control" type="number" name="numOfStu" placeholder="student id will be incremented by 1" required></td>
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