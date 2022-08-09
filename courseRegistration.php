<?php
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
								<h4>Add Courses</h4>
							</div>
							<div class="table-responsive">
								<table>
									<tr>
										<td>Enter course Title</td>
										<td>:</td>
										<td><input class="inputs form-control" type="text" required></div>
										</td>
									</tr>
								</div>

								<tr>
									<td>Enter course code</td>
									<td>:</td>
									<td><input class="inputs form-control" type="text" required></td>
								</tr>
								<tr>
									<td>select level</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
											<option>1st year</option>
											<option>2nd year</option>
											<option>3rd year</option>
											<option>4th year</option>
											<option>Masters</option>
											<option>Intern</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>select semester</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
											<option>I</option>
											<option>II</option>
											<option>III</option>
											<option>IV</option>
											<option>V</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>select section</td>
									<td>:</td>
									<td>
										<select class="inputs form-control">
											<option>I</option>
											<option>II</option>
											<option>III</option>
											<option>IV</option>
											<option>V</option>
											<option>VI</option>
											<option>VII</option>
											<option>VIII</option>
											<option>Ix</option>
											<option>X</option>
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Enter password</td>
									<td>:</td>
									<td>
										<input type="password" class="inputs form-control" required>
									</td>
								</tr>
								<tr>
									<td>confirm password</td>
									<td>:</td>
									<td>
										<input type="password" class="inputs form-control" required>
									</td>
								</tr>
							</table>
							<tr>
								<td><input  class="submitBtn form-control" type="submit" value="save"></td>
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
