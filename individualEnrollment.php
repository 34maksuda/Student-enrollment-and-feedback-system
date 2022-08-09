<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
require_once("header.php");
require_once("dbConnection.php");
?>
<body>
	<div id="stuEnFoSec">
		<?php 
		require_once("navbar.php");
		$studentId = $_REQUEST["stuId"];
		$selectStudent = "SELECT * FROM enrolledstudents WHERE studentId='$studentId'";
		$runSelectStudent = mysqli_query($connection, $selectStudent);
		$studentRow = mysqli_fetch_array($runSelectStudent);
		?>
		<form id="individualEnrollmentForm">
			<div class="InenFormSubError"></div>
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
					I am a candidate of the coming exam 
					<?php if($studentRow["semesterType"] == "Jan-June"){ ?>
					<input type="radio" name="examTime" value="Jan-June" checked ="">Jan-June 
					<input type="radio" name="examTime" value="July-Dec"  disabled>July-Dec 
					<input type="radio" name="examTime" value="Improve"  disabled>Improve.
					<?php } ?>
					<?php if($studentRow["semesterType"] == "July-Dec"){ ?>
					<input type="radio" name="examTime" value="Jan-June" disabled>Jan-June 
					<input type="radio" name="examTime" value="July-Dec"  checked>July-Dec 
					<input type="radio" name="examTime" value="Improve" required disabled>Improve.
					<?php } ?>

					<?php if($studentRow["semesterType"] == "Improve"){ ?>
					<input type="radio" name="examTime" value="Jan-June" disabled="">Jan-June 
					<input type="radio" name="examTime" value="July-Dec" disabled="">July-Dec 
					<input type="radio" name="examTime" value="Improve"  checked>Improve.
					<?php } ?> semester 
					<input type="text" name="examYear" value=" <?php echo $studentRow["examYear"]; ?>" placeholder="exam year" readonly>.<br><br>
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
								<input type="text" name="deptName" value="<?php echo $studentRow["department"]; ?>" required readonly>
							</td>
						</tr>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td><input type="text" name="level" value="<?php echo $studentRow["level"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>Semester</td>
							<td>:</td>
							<td><input type="text" name="semester" value="<?php echo $studentRow["semester"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>Exam</td>
							<td>:</td>
							<td><input type="text" name="examY2" value="<?php
							echo $studentRow["examYear"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>2.Name of the Examinee</td>
							<td>:</td>
							<td><input type="text" name="ExamineeName" value="<?php echo $studentRow["examineeName"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>3.Mobile No</td>
							<td>:</td>
							<td><input type="text" name="MOB" value="<?php echo $studentRow["mobile"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>4.Gmail</td>
							<td>:</td>
							<td><input type="email" name="email" value="<?php echo $studentRow["gmail"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>5.Student Id</td>
							<td>:</td>
							<td><input type="text" name="SID" value="<?php echo $studentRow["studentId"]; ?>" required readonly></td>
						</tr>
						<tr>
							<td>Attached Hall</td>
							<td>:</td>
							<td><input type="text" name="Hall" value="<?php echo $studentRow["Hall"]; ?>" required readonly></td>
					</table>
						<p id="ImproveP">Only for <input type="checkbox" name="isShort" class="isShort" value="Improve"
						<?php if($studentRow["semesterType"] == "Improve"){?>
							checked disabled<?php } else{ ?>
								disabled
							<?php } ?>>Improve examinee</p>
					<div id="short">
						<table>
							<tr>
								<td>6. (A)The level where <br> you read currently
								</td>
								<td>:</td>
								<td><input type="text" name="Clevel" value="<?php echo $studentRow["level"]; ?> " readonly></td>
							</tr>
							<tr>
								<td>Semester</td>
								<td>:</td>
								<td>
									<input type="text" name="Shsemester" value="<?php echo $studentRow["semester"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Year</td>
								<td>:</td>
								<td>
									<input type="text" name="shY" value="<?php echo $studentRow["examYear"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>(B)Course Code:</td>
								<td>:</td>
								<td>
									<input type="text" name="BshCcode" value="<?php echo $studentRow["improveCourseCode1"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Level of this course</td>
								<td>:</td>
								<td>
									<input type="text" name="BSubL" value="<?php echo $studentRow["improveLevel1"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Signature of departmenr head</td>
								<td>:</td>
								<td>
									<input type="file" name="BsigOfDH"
									 <?php 
									 if($studentRow["semesterType"] == "Improve"){ ?> required <?php } ?> >
								</td>
							</tr>
							<tr>
								<td>(C)Course Code</td>
								<td>:</td>
								<td>
									<input type="text"name="CshCcode" value="<?php echo $studentRow["improveCourseCode2"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Level of this course</td>
								<td>:</td>
								<td>
									<input type="text" name="CSubL" value="<?php echo $studentRow["improveLevel1"]; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Signature of departmenr head</td>
								<td>:</td>
								<td>
									<input type="file" name="CsigOfDH" <?php 
									 if($studentRow["semesterType"] == "Improve"){ ?> required <?php } ?> >
								</td>
							</tr>
						</table>
					</div>
						<br><br>
						<label>Date:</label><input type="date" name="shDate" value="<?php echo $studentRow["date"]; ?>" readonly>
						<label>Signature of candidate:</label>
						<?php $sigOfCandidate = $studentRow["sigOfCandidate"]; 
						?>
						<img class="sigOfCandidate" src="candidateSignature/<?php echo $sigOfCandidate; ?>"><br><br>
						Permission is given to the candidate according to the mentioned information of the application.<br><br>
						<label>Signature of Dean:</label><input type="file" name="deanSig" required>
						<label>Signature of Exam controller:</label><input type="file" name="examConSig" required><br>
					</div>
					________________________________________________________________________________________________________________________________________
				</p>
				<div id="accountingManDiv">
					<p>The examinee has been paid total <input type="txt" name="TKAmount" value="<?php echo $studentRow["totalPaid"] ?>" required readonly> by the transaction id <input type="text" name="TID" value="<?php echo $studentRow["transactionId"] ?>" required readonly></p><br>

					<span>Signature of accounting manager</span><input type="file" name="sigOfAman" required>
					__________________________________________________________________________________________________________________________________________
					<p id="givMargin">N.B: 1. The application will be accepted only if it has been submited on time.<br>
					2. incomplete application will not be granted.</p>
				</div>
			</div>
			<div <?php if($studentRow["semesterType"] == "Improve"){?> id="studentSeeEnF3" <?php } else{?> id = "studentSeeEnF2" <?php } ?>>
					<div class="enFWrapper2">
						<div id="headofEnF">
							<p>Department Of Computer Science & Engineering(CSE)</p>
							<small>Level 1 Semester I</small>
						</div enFeeForm>
							<p>list of fees for student</p>
							<div class = "enrollmentFE"></div>
							<table id="cse_oneOneT">
								<?php
								$var = 1;
									$oneRow = $studentRow["fees"];
									//echo $oneRow;
									$explodeOneRow = explode(",",$oneRow);
									for($i=0; $i < count($explodeOneRow)-1;$i++ ){
										$explodeKey = explode("-",$explodeOneRow[$i]);?>
									<tr id="tr<?php echo $var; ?>">
										<td><input type="text" name="fee[]" value="<?php echo $explodeKey[0] ?>" readonly ></td>
										<td>:</td>
										<td class="stuEn56"><input type="text" name="amount[]" value="<?php echo $explodeKey[1] ?>" class="StotalFeeCalc" readonly><input class="checkboxSize" name="checkBoxValue[]"type="checkbox" value="<?php echo $explodeKey[0]."-".$explodeKey[1] ?>" checked disabled>
										</td>

										<?php $var++; ?>
										</tr> <?php }?>
										<tr>
											<td><b><input type="text" name="TotalFees" value="Total" class="totalFees" readonly></b></td>
											<td>:</td>
											<td><input type="text" class="StotalFeesV" readonly></td>								</tr>
										</table>
									<input type="submit" name="s67bmitBtn" id="s67bmitBtn" value="SAVE">
								</form>
								</div>
							</div>
				</div>
				<!--<div id="transaction">
					<p>Please pay your enrollment fees Using <span>Bkash</span> and preserve the Transaction Id.<br>
						<span>Bkash Number : 0178945678.</span></p>
					</div> -->
				<div id="footerOfSEP">
					<?php  
					require_once("footer.php");
					?>
				</div>
			</body>	