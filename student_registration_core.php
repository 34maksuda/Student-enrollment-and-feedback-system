<?php
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
if(!empty($_REQUEST["name"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["password"]) && (strlen($_REQUEST["password"]) >= 8) && !empty($_REQUEST["cnfrmPwd"]) && !empty($_REQUEST["gender"]) && !empty($_REQUEST["insName"]) && !empty($_REQUEST["deptName"]) && !empty($_REQUEST["conNum"]) && is_numeric($_REQUEST["conNum"]) &&is_uploaded_file($_FILES["profilePic"]["tmp_name"])){
	$name =clean($_REQUEST["name"]);
	$email =$_REQUEST["email"];
	$pwd =$_REQUEST["password"];
	$encryptedPwd=sha1(md5($pwd));
	$cnfrmPwd =$_REQUEST["cnfrmPwd"];
	$encryptedCnfrmPwd=sha1(md5($cnfrmPwd));
	$gender =$_REQUEST["gender"];
	$insName =clean($_REQUEST["insName"]);
	$deptName = $_REQUEST["deptName"];
	$contact =$_REQUEST["conNum"];
	$profilePic= $_FILES["profilePic"]["tmp_name"];
	$location = "profilePicture/";
	$picNameForDB=uniqid();
	move_uploaded_file($profilePic,$location."$picNameForDB.jpg");
	$teacherId=$email.uniqid();
	$selectQuery = "SELECT * FROM teacherregistration WHERE email = '$email'";
	$runSelectQuery = mysqli_query($connection,$selectQuery);
	$numOfRows = mysqli_num_rows($runSelectQuery);
	if($runSelectQuery == true){
		if($numOfRows == 0){
		 if($encryptedPwd === $encryptedCnfrmPwd){
		 	$insertData = "INSERT INTO teacherregistration(teacherId,name,email,password,gender,instituteName,departmentName,contactNumber,profilePic) VALUES ('$teacherId','$name','$email','$encryptedPwd','$gender','$insCode','$deptCode','$contact','$picNameForDB.jpg')";
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
			echo "You have already registered.please Log in!";
		}
	}
	else{
		echo "you have an error in SQL Query";
	}
}
else
{
	echo "please fill out all fields with proper constraints";
}
?>