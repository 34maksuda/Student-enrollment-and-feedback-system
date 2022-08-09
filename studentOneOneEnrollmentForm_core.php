<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}

	$semesType = $_REQUEST["examTime"];
	$examYear = $_REQUEST["examYear"];
	$examName = $_REQUEST["examName"];
	$dept = $_REQUEST["deptName"];
	$level = $_REQUEST["level"];
	$semester= $_REQUEST["semester"];
	$ExamineeName = $_REQUEST["ExamineeName"];
	$MOB = $_REQUEST["MOB"];
	$email = $_REQUEST["email"];
	$SID = $_REQUEST["SID"];
	$Hall =$_REQUEST["Hall"];
	$improveCourseCode1 = $_REQUEST["BshCcode"];
	$improveLevel1 = $_REQUEST["BSubL"];
	$improveCourseCode2 = $_REQUEST["CshCcode"];
	$improveLevel2 = $_REQUEST["CSubL"];
	$enrollmentDate = $_REQUEST["shDate"];
	$totalPaid = $_REQUEST["TKAmount"];
	$TID = $_REQUEST["TID"];
	$s = 0;
	$candidateSig= $_FILES["shCSig"]["tmp_name"];
	$location = "candidateSignature/";
	$CandidateSigId=uniqid();
	move_uploaded_file($candidateSig,$location."$CandidateSigId.jpg");
	$selectQuery = "SELECT * FROM enrolledStudents WHERE studentId = '$SID' AND department = '$dept' AND level = '$level' AND semester = '$semester' AND examYear = '$examYear'";
	$runSelectQuery= mysqli_query($connection,$selectQuery);
	$numOfRows1 = mysqli_num_rows($runSelectQuery);
	if($runSelectQuery == true){
			if($numOfRows1 == 0){
					$insertData = "INSERT INTO enrolledStudents(studentId,department,semesterType,examName,level,semester,examYear,examineeName,mobile,gmail,Hall,improveCourseCode1, improveLevel1, improveCourseCode2,improveLevel2,date,sigOfCandidate,totalPaid,transactionId,enrolledStatus) VALUES ('$SID','$dept','$semesType','$examName','$level','$semester','$examYear','$ExamineeName','$MOB','$email','$Hall','$improveCourseCode1','$improveLevel1','$improveCourseCode2','$improveLevel2','$enrollmentDate','$CandidateSigId.jpg','$totalPaid','$TID','unenrolled')";
					$runInsertQuery= mysqli_query($connection,$insertData);
					if($runInsertQuery == true){
						$s = 1;
					}
					else{
						echo "wrong!";
					}
				
			}
			else{
				echo "You have already been sent an enrollment request";
			}
			$selectEnrolledStu = "SELECT fees FROM enrolledstudents Where studentId = '$SID'";
			$runSelectEnrolledStu = mysqli_query($connection, $selectEnrolledStu);
			$numOfRows = mysqli_num_rows($runSelectEnrolledStu);
			//echo $numOfRows;
			if($runSelectEnrolledStu == true && $numOfRows == 1){

				$studentFee = mysqli_fetch_array($runSelectEnrolledStu);
				$studentFeeInd = $studentFee["fees"];
				//echo $studentFeeInd;

				for($i=0; $i <= count($_REQUEST['checkBoxValue']); $i++){
					if(isset($_REQUEST['checkBoxValue'][$i])){ 
						$feesAndAmount = $_REQUEST['checkBoxValue'][$i];
						if($i == 0){

							$newFee = $feesAndAmount.","; 
						}
						else{
							$newFee = $newFee.$studentFeeInd.$feesAndAmount.",";
						}
						

					}
				}
				//echo $newFee;
				$updateQuery1 = "UPDATE enrolledstudents SET fees =
				'$newFee' WHERE studentId = '$SID'"; 
				$runUpdateQuery1 = mysqli_query($connection, $updateQuery1);
				if($runUpdateQuery1 == true && $s == 1){
					$s = 2;

				}
				else{
					echo "error in updateQuery";
				}

				if($s==2){
					echo "success";
				}
			}
			else{
				echo "wrong2";
			}
	}
	else{
		echo "Wrong SQL query.";
	}