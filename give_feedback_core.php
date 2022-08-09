<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	return preg_replace("/[^A-Za-z0-9\-] /","", $string);
}
if(!empty($_REQUEST["courseUniqueId"]) && !empty($_REQUEST["Cmat"]) && !empty($_REQUEST["CO"]) && !empty($_REQUEST["CC"]) && !empty($_REQUEST["TA"]) && !empty($_REQUEST["TI"]) && !empty($_REQUEST["TEx"]) && !empty($_REQUEST["TP"]) && !empty($_REQUEST["TInn"])  && !empty($_REQUEST["TIGC"])  && !empty($_REQUEST["TCO"])  && !empty($_REQUEST["TFI"])  && !empty($_REQUEST["ACC"])){

	$courseUniqueId = $_REQUEST["courseUniqueId"];
	$ques1 = $_REQUEST["Cmat"];
	$ques2 = $_REQUEST["CO"];
	$ques3 = $_REQUEST["CC"];
	$ques4 = $_REQUEST["TA"];
	$ques5 = $_REQUEST["TI"];
	$ques6 = $_REQUEST["TEx"];
	$ques7 = $_REQUEST["TP"];
	$ques8 = $_REQUEST["TInn"];
	$ques9 = $_REQUEST["TIGC"];
	$ques10 = $_REQUEST["TCO"];
	$ques11 = $_REQUEST["TFI"];
	$ques12 = $_REQUEST["ACC"];
	$ques13 = $_REQUEST["like"];
	$ques14 = $_REQUEST["dislike"];
	$SID = $_SESSION['studentId'];
	$selectCourseInfo = "SELECT * FROM courseregistration WHERE courseUniqueId = '$courseUniqueId'";
	$runSelectCourseInfo = mysqli_query($connection,$selectCourseInfo);
	if($runSelectCourseInfo == true){
		$courseInfo = mysqli_fetch_array($runSelectCourseInfo);
		if($courseInfo["courseUniqueId"] == $courseUniqueId){

			$selectQuery = "SELECT * FROM studentregistration WHERE studentId = '$SID'";
			$runSelectQuery = mysqli_query($connection,$selectQuery);
			if($runSelectQuery == true){
				$studentInfo = mysqli_fetch_array($runSelectQuery);
				$stuRegId = $studentInfo["registerId"];
				$selectFeedbackTable = "SELECT * FROM feedback";
				$runSelectFeedbackTable = mysqli_query($connection,$selectFeedbackTable);
				$c=0;
				while($feedback = mysqli_fetch_array($runSelectFeedbackTable)){
					if($feedback["studentRegId"] == $stuRegId && $feedback["courseUniqueId"] == $courseUniqueId){
						$c=1;
					}
				}
				if($c != 1){
					$insertQuery = "INSERT INTO feedback(studentRegId,courseUniqueId,question1,question2,question3,question4,question5,question6,question7,question8,question9,question10,question11,question12,question13,question14) VALUES('$stuRegId','$courseUniqueId','$ques1','$ques2','$ques3','$ques4','$ques5','$ques6','$ques7','$ques8','$ques9','$ques10','$ques11','$ques12','$ques13','$ques14')";

					$runInsertQuery = mysqli_query($connection,$insertQuery);
					if($runInsertQuery == true){
						setcookie("feedbackInserted","asdf",time()+(30));
						echo "inserted";
					}
					else{
						echo "error in insert query";
					}
				}
				else{
					echo "you have already been given feedback for this course";
					
				}
			}
			else{
				echo "error in student selection query.";
			}
		}
		else{
			echo "invalid course id";
		}
	}
	else{
		echo "error in course selection query";
	} 
}
else{
	echo "please fill out all fields.";
}

