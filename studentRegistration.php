<?php
session_start();
require_once("header.php");
require_once("dbConnection.php");
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
					<form id="studentRegisterForm" class="border">
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
										<input class="inputs form-control" type="password" name="password" id="tpassword" required>
										<span class="tpwdError"></span>
									</td>
								</tr>
								<tr>
									<td>confirm password *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="password" name="cnfrmPwd" required></td>
								</tr>
								<tr>
									<td>In which year are you read in? *</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
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
									<td>In which semester are you read in? *</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
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
									<td>Select your session *</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
											<?php 
											for($i = 2000; $i <= 2005; $i++){ ?> 
											<option><?php echo $i."-".$i+1 ?></option> 
										<?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Select Your gender: *</td>
									<td>:</td>
									<td>
										<input type="radio" name="gender" value="Male" required> Male
										<input type="radio" name="gender" value="Female"required> Female
									</td>
								</tr>
								<tr>
									<td>Select your educational Institution*</td>
									<td>:</td>
									<td>
										<select class="inputs form-control" name="insName" required="">
										<?php
										$slectUVname= "SELECT  DISTINCT instituteName FROM adminregistration";
										$runSelectUVname = mysqli_query($connection,$slectUVname);
										if($runSelectUVname == true){ 
											while ($insName = mysqli_fetch_array($runSelectUVname)) { ?>
												<option><?php echo $insName["instituteName"] ?></option>											<?php }
										} 
										else{
											echo "error in institute name select query.";
										}?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Enter your department name *</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" name="deptName" placeholder="Suggestion:Computer Science & Engineering(CSE)" required></td>
								</tr>
								<tr>
									<td>Enter Your contact number *</td>
									<td>:</td>
									<td>
										<input class="inputs form-control" type="tel" name="conNum" id="tcontact" required>
										<span class="tcontactError"></span>
									</td>
								</tr>								<tr>
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
