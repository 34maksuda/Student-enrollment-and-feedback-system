<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<form id="courseRegisterForm" class="border">
						<div class="fWrapper">
							<div class="rfhead">
								<h4>Add courses</h4>
							</div>
							<p class="error"></p>
							<p class="required">* required</p>
							<div class="table-responsive">
								<table>
									<tr>
										<td>Enter course Title*</td>
										<td>:</td>
										<td><input class="inputs form-control" type="text" name="courseTitle" required></div>
										</td>
									</tr>
								</div>

								<tr>
									<td>Enter course code*</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="courseCode" required></td>
								</tr>
								<tr>
									<td>Enter department code*</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="deptCode" required></td>
								</tr>

								<tr>
									<td>select level*</td>
									<td>:</td>
									<td>
										<select class="inputs form-control" name="level">
											<option value="1st year">1st year</option>
											<option value="2nd year">2nd year</option>
											<option value="3rd year">3rd year</option>
											<option value="4th year">4th year</option>
											<option value="Masters">Masters</option>
											<option value="Intern">Intern</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>select semester</td>
									<td>:</td>
									<td>
										<select class="inputs form-control" name="semester">
											<option value="I">I</option>
											<option value="II">II</option>
											<option value="III">III</option>
											<option value="IV">IV</option>
											<option value="V">V</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>select section</td>
									<td>:</td>
									<td>
										<select class="inputs form-control" name="section">
											<option value="I">I</option>
											<option value="II">II</option>
											<option value="III">III</option>
											<option value="IV">IV</option>
											<option value="V">V</option>
											<option value="VI">VI</option>
											<option value="VII">VII</option>
											<option value="VIII">VIII</option>
											<option value="IX">IX</option>
											<option value="X">X</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Enter the year*</td>
									<td>:</td>
									<td>
									<?php
									$currentyear=date('Y');
									$startYear=$currentyear-5;
									$endyear = $currentyear+5;
									$yearArray = range($startYear,$endyear);
									?>
									<select class="inputs form-control" name="year">
										<?php
										foreach ($yearArray as $year) {
											$selected = ($year == $currentyear) ? 'selected' : ''; ?>
											<option <?php echo $selected ?> value="<?php echo $year; ?>"><?php echo $year ; ?></option>
										<?php }
										?>									
								</td>
							</tr>

							<tr>
								<td>Enter password*</td>
								<td>:</td>
								<td>
									<input type="password" class="inputs form-control" name="password" id="coursePwd" required>
									<span class="coursePwdError"></span>
								</td>
							</tr>
							<tr>
								<td>confirm password</td>
								<td>:</td>
								<td>
									<input type="password" class="inputs form-control" name="confrmPwd" required>
								</td>
							</tr>
						</table>
						<tr>
							<td><input  class="submitBtn form-control" type="submit" value="Register"></td>
						</tr>
					</div>
				</div>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
</div>
</section>
<?php
require_once("footer.php");
?>
</body>
