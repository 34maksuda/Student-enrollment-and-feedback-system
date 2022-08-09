<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
if(!empty($_REQUEST["name"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["password"]) && (strlen($_REQUEST["password"]) >= 8) && !empty($_REQUEST["cnfrmPwd"]) && !empty($_REQUEST["gender"]) && !empty($_REQUEST["insName"]) && !empty($_REQUEST["deptName"]) && !empty($_REQUEST["deptCode"]) && !empty($_REQUEST["conNum"]) && is_numeric($_REQUEST["conNum"]) &&is_uploaded_file($_FILES["profilePic"]["tmp_name"])){
	$name =clean($_REQUEST["name"]);
	$email =$_REQUEST["email"];
	$pwd =$_REQUEST["password"];
	$encryptedPwd=sha1(md5($pwd));
	$cnfrmPwd =$_REQUEST["cnfrmPwd"];
	$encryptedCnfrmPwd=sha1(md5($cnfrmPwd));
	$gender =$_REQUEST["gender"];
	$insName =($_REQUEST["insName"]);
	$deptName = $_REQUEST["deptName"];
	$deptCode = $_REQUEST["deptCode"];
	$contact =$_REQUEST["conNum"];
	$profilePic= $_FILES["profilePic"]["tmp_name"];
	$location = "profilePicture/";
	$picNameForDB=uniqid();
	move_uploaded_file($profilePic,$location."$picNameForDB.jpg");
	$adminId=$insName.$deptCode;
	$selectQuery = "SELECT * FROM adminregistration WHERE adminId = '$adminId'";
	$runSelectQuery = mysqli_query($connection,$selectQuery);
	$numOfRows = mysqli_num_rows($runSelectQuery);
	$selectQueryUsingEmail = "SELECT * FROM adminregistration WHERE email = '$email'";
	$runSelectQueryUsingEmail= mysqli_query($connection,$selectQueryUsingEmail);
	$numOfRows1 = mysqli_num_rows($runSelectQueryUsingEmail);
	if($runSelectQuery == true && $runSelectQueryUsingEmail == true){
		if($numOfRows == 0){
			if($numOfRows1 == 0){
				if($encryptedPwd === $encryptedCnfrmPwd){
					$insertData = "INSERT INTO adminregistration(adminId,name,email,password,gender,instituteName,departmentName,departmentCode,contactNumber,profilePic) VALUES ('$adminId','$name','$email','$pwd','$gender','$insName','$deptName','$deptCode','$contact','$picNameForDB.jpg')";
					$runInsertQuery= mysqli_query($connection,$insertData);
					if($runInsertQuery == true){
						setcookie("adRegS","rtyuy",time()+(30));
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
				echo "You have already an account as an admin";
			}
		}
		else{
			echo "An admin from your department already registered!<br>please register as a teacher or student.";
		}
	}
	else{
		echo "Wrong SQL query.";
	}
}
else
{
	echo "please fill out all fields with proper constraints";
}
?>