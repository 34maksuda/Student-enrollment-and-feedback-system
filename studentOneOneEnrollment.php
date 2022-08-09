<?php
session_start();
require_once("header.php");
require_once("dbConnection.php");
?>
<body>
	<div id="stuEnFoSec">
		<?php require_once("navbar.php");
		$studentId = $_SESSION['studentId'];
		$selectStudent = "SELECT * FROM studentregistration WHERE studentId='$studentId'";
		$runSelectStudent = mysqli_query($connection, $selectStudent);
		$studentRow = mysqli_fetch_array($runSelectStudent);
		echo "Hello";
		?>
		<form id="studentEnrollmentForm">
			<div class="enFormSubError"></div>
			<div class="stuEnFHead">
				<img src="images/HSTU.png">
				<span>Examination Controller Office</span>
				<p>Hajee Mohammad Danesh Science & Technology University, Dinajpur</p>
			</div>
			<div class="stuEnFC">
				<p>Entry Form of honor's semester final/short examination </p>
			</div>
			<div class="application">
				<p id="regular">Examination Controller<br>
					HSTU, Dinajpur<br><br>

					Honorable Sir,<br>
					I am a candidate of the coming exam <input type="radio" name="examTime" class="examTime" value="Jan-June" required>Jan-June <input type="radio" class="examTime" name="examTime" value="July-Dec" required>July-Dec <input type="radio" class="examTime" name="examTime" value="Improve" required>Improve. semester <input type="text" name="examYear" placeholder="exam year" required>.<br><br>
					<table>
						<tr>
							<td>
								1.Examination Name
							</td>
							<td>:</td>
							<td>
								<input type="text" name="examName" value="B.Sc(Engg.) in CSE" readonly>
							</td>
						</tr>
						<tr>
							<td>
								1.Department Name
							</td>
							<td>:</td>
							<td>
								<input type="text" name="deptName" value="<?php echo $studentRow["department"]; ?>" required>
							</td>
						</tr>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td><input type="text" name="level" value="<?php echo $studentRow["Level"]; ?>" required></td>
						</tr>
						<tr>
							<td>Semester</td>
							<td>:</td>
							<td><input type="text" name="semester" value="<?php echo $studentRow["semester"]; ?>" required></td>
						</tr>
						<tr>
							<td>Exam</td>
							<td>:</td>
							<td><input type="text" name="examY2" required></td>
						</tr>
						<tr>
							<td>2.Name of the Examinee</td>
							<td>:</td>
							<td><input type="text" name="ExamineeName" value="<?php echo $studentRow["Name"]; ?>" required></td>
						</tr>
						<tr>
							<td>3.Mobile No</td>
							<td>:</td>
							<td><input type="text" name="MOB" required></td>
						</tr>
						<tr>
							<td>4.Gmail</td>
							<td>:</td>
							<td><input type="email" name="email" value="<?php echo $studentRow["email"]; ?>" required></td>
						</tr>
						<tr>
							<td>5.Student Id</td>
							<td>:</td>
							<td><input type="text" name="SID" value="<?php echo $studentRow["studentId"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>Attached Hall</td>
							<td>:</td>
							<td><input type="text" name="Hall" required></td>
						</tr>
					</table>
					<p id="ImproveP">Only for <input type="checkbox" name="isShort" class="isShort" value="Improve">Improve examinee</p>
					<div id="short">
						<table>
							<tr>
								<td>6. (A)The level where <br> you read currently
								</td>
								<td>:</td>
								<td><input type="text" name="Clevel" value="<?php echo $studentRow["Level"]; ?> "></td>
							</tr>
							<tr>
								<td>Semester</td>
								<td>:</td>
								<td>
									<input type="text" name="Shsemester" value="<?php echo $studentRow["semester"]; ?>">
								</td>
							</tr>
							<tr>
								<td>Year</td>
								<td>:</td>
								<td>
									<input type="text" name="shY" placeholder="year of current semester">
								</td>
							</tr>
							<tr>
								<td>(B)Course Code:</td>
								<td>:</td>
								<td>
									<input type="text" name="BshCcode" placeholder="course code">
								</td>
							</tr>
							<tr>
								<td>Level of this course</td>
								<td>:</td>
								<td>
									<input type="text" name="BSubL">
								</td>
							</tr>
							<tr>
								<td>(C)Course Code</td>
								<td>:</td>
								<td>
									<input type="text"name="CshCcode" >
								</td>
							</tr>
							<tr>
								<td>Level of this course</td>
								<td>:</td>
								<td>
									<input type="text" name="CSubL">
								</td>
							</tr>
						</table>
						</div>
						<br><br>
						<label>Date:</label><input type="date" name="shDate" required="">
						<label>Signature of candidate:</label><input type="file" name="shCSig" required> 
					
					________________________________________________________________________________________________________________________________________
				</p>
				<div id="accountingManDiv">
					<p id="accountingManDivHead">Filled up by accounting manager</p>
					<p>The examinee has been paid total <input type="txt" name="TKAmount" required> by the transaction id <input type="text" name="TID" required></p>
					__________________________________________________________________________________________________________________________________________
					<p id="givMargin">N.B: 1. The application will be accepted only if it has been submited on time.<br>
					2. incomplete application will not be granted.</p>
				</div>

			</div>
			<div id="studentSeeEnF">
				<?php 
				$adminId = $studentRow["adminId"];
				$selectThisAdmin = "SELECT * FROM manageenrollment WHERE adminId = '$adminId'";
				$runSelectThisAdmin = mysqli_query($connection, $selectThisAdmin);
				$numOfRows = mysqli_num_rows($runSelectThisAdmin);
				if($numOfRows > 0){
					?>
					<div class="enFWrapper2">
						<div id="headofEnF">
							<p>Department Of Computer Science & Engineering(CSE)</p>
							<small>Level 1 Semester I</small>
						</div enFeeForm>
						<form  id="cseOneOneForm">
							<p>list of fees for student</p>
							<div class = "enrollmentFE"></div>
							<table id="cse_oneOneT">
								<?php
								$var = 1;
								while($enRow = mysqli_fetch_array($runSelectThisAdmin)){
									$oneRow = $enRow["feesAndAmount"];
									$explodeOneRow = explode("-",$oneRow);
									?>
									<tr id="tr<?php echo $var; ?>">
										<td><input type="text" name="fee[]" value="<?php echo $explodeOneRow[0] ?>" readonly ></td>
										<td>:</td>
										<td class="stuEn56"><input type="text" name="amount[]" value="<?php echo $explodeOneRow[1] ?>" class="StotalFeeCalc" readonly><input class="checkboxSize" name="checkBoxValue[]"type="checkbox" value="<?php echo $explodeOneRow[0]."-".$explodeOneRow[1] ?>" checked>
										</td>

										<?php $var++; ?>
										</tr> <?php } ?>
										<tr>
											<td><b><input type="text" name="TotalFees" value="Total" class="totalFees" readonly></b></td>
											<td>:</td>
											<td><input type="text" class="StotalFeesV" readonly></td>								</tr>
										</table>
									</form>
									<input type="submit" name="s67bmitBtn" id="s67bmitBtn" value="SAVE">
								</div>
							</div>
						</form>
						<?php }
						else{ ?>
							<div id="NoFee1_1">No fees have been added yet! </div>
						<?php } ?>
				</div>
				<div id="transaction">
					<p>Please pay your enrollment fees Using <span>Bkash</span> and preserve the Transaction Id.<br>
						<span>Bkash Number : 0178945678.</span></p>
					</div>
				<div id="footerOfSEP">
					<?php  
					require_once("footer.php");
					?>
				</div>
			</body>	