<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	return preg_replace("/[^A-Za-z0-9\-] /","", $string);
}
if(!empty($_REQUEST["courseTitle"]) && !empty($_REQUEST["courseCode"]) && !empty($_REQUEST["deptCode"]) && !empty($_REQUEST["level"]) && !empty($_REQUEST["semester"]) && !empty($_REQUEST["section"]) && !empty($_REQUEST["year"]) && !empty($_REQUEST["password"]) && 
	(strlen($_REQUEST["password"]) >=8) && !empty($_REQUEST["confrmPwd"])){

	$courseTitle =clean($_REQUEST["courseTitle"]);
$courseCode =$_REQUEST["courseCode"];
$deptCode = $_REQUEST["deptCode"];
$level =$_REQUEST["level"];
$semester =clean($_REQUEST["semester"]);
$section = $_REQUEST["section"];
$year =$_REQUEST["year"];
$pwd =$_REQUEST["password"];
$encryptedPwd=sha1(md5($pwd));
$cnfrmPwd =$_REQUEST["confrmPwd"];
$encryptedCnfrmPwd=sha1(md5($cnfrmPwd));
$TID=$_SESSION["teacherId"];
$string = "shjkl";
$courseUniqueId = $TID.str_replace(' ','',$courseCode).str_shuffle($string);
$selectQuery = "SELECT * FROM teacher WHERE teacherId = '$TID'";
$runSelectQuery = mysqli_query($connection,$selectQuery);
$row = mysqli_fetch_array($runSelectQuery);
$teacherEmail = $row["email"];
$adminId = $row["adminId"];
$selectAdmin = "SELECT instituteName FROM adminregistration WHERE adminId='$adminId'";
$runSelectAdmin = mysqli_query($connection,$selectAdmin);
if($runSelectAdmin == true){
	$adminT= mysqli_fetch_array($runSelectAdmin);
	$instituteName = $adminT["instituteName"];
	$teacherRegId = $instituteName.$TID;
	$insCode = substr($instituteName,strpos($instituteName,"(")+1);	
	$uniCode = trim($insCode,")");
	$courseId = $uniCode.$deptCode.$courseCode.$year;
	$searchQuery = "SELECT * FROM courseregistration WHERE courseId = '$courseId'";
	$runSearchQuery = mysqli_query($connection,$searchQuery);
	$numOfRows = mysqli_num_rows($runSearchQuery);
	if($runSearchQuery == true){
		if($numOfRows == 0){
			if($encryptedPwd === $encryptedCnfrmPwd){
				$insertData = "INSERT INTO courseregistration(courseId,teacherRegId,courseUniqueId,courseTitle,courseCode,deptCode,levels,semester,section,years,passwords) VALUES ('$courseId','$teacherRegId','$courseUniqueId','$courseTitle','$courseCode','$deptCode','$level','$semester','$section','$year','$encryptedPwd')";
				$runInsertQuery= mysqli_query($connection,$insertData);
				if($runInsertQuery == true){
					echo "success";
				}
				else{
					echo "wrong!";
				}
			}
			else{
				echo "please confirm Your password";
			}
		}
		else{
			echo "This course is already registered!";
		}
	}
	else{
		echo "you have an error in SQL Query";
	}
}
else{
	echo "instituteName selection query is wrong.";
}
}
else
{
	echo "please fill out all fields with proper constraints";
}
?>