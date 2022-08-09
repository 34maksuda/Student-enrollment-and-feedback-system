<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<form id="adminRegisterForm" class="border">
						<div class="fWrapper">
							<div class="rfhead">
								<h4>Registration Form</h4>
							</div>
							<p class="error"></p>
							<p class="required">* required</p>
							<div class="table-responsive">
								<table>
									<tr>
										<td>Enter Your name *</td>
										<td>:</td>
										<td><input class="inputs form-control" type="text" name="name" required></div>
										</td>
									</tr>
								</div>

								<tr>
									<td>Enter Your email *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="email" name="email" required></td>
								</tr>
								<tr>
									<td>Enter Your password *</td>
									<td>:</td>
									<td>
										<input class="inputs form-control" type="password" name="password" id="password" required>
										<span class="pwdError"></span>
									</td>
								</tr>
								<tr>
									<td>confirm password *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="password" name="cnfrmPwd" required></td>
								</tr>
								<tr>
									<td>Select Your gender: *</td>
									<td>:</td>
									<td>
										<input type="radio" name="gender" value="Male" required> Male
										<input type="radio" name="gender" value="Female" required> Female
									</td>
								</tr>
								<tr>
									<td>Select your educational Institution*</td>
									<td>:</td>
									<td>
										<select class="inputs form-control" name="insName" required="">
											<option>
											Hajee Mohammad Danesh Science & Technology University(HSTU)
											</option>
										</select>
										<!-- <input class="inputs form-control" type="text" name="insCode" required>-->
									</td>
								</tr>
								<tr>
									<td>Enter Your department name *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="deptName" required></td>
								</tr>
								<tr>
									<td>Enter Your department code *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="deptCode" required></td>
								</tr>
								<tr>
									<td>Enter Your contact number *</td>
									<td>:</td>
									<td>
										<input class="inputs form-control" type="tel" name="conNum" id="contact" required>
										<span class="contactError"></span>
									</td>
								</tr>
								<tr>
									<td>Upload Your image*</td>
									<td>:</td>
									<td><input class="Uimage" type="file" accept="image/*" name="profilePic" required></td>
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
