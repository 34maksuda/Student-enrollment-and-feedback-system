<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
	$name =clean($_REQUEST["name"]);
	$email =$_REQUEST["email"];
	$pwd =$_REQUEST["password"];
	$gender =$_REQUEST["gender"];
	$insName =($_REQUEST["insName"]);
	$deptName = $_REQUEST["deptName"];
	$deptCode = $_REQUEST["deptCode"];
	$contact =$_REQUEST["conNum"];
	if(is_uploaded_file( $_FILES["profilePic"]["tmp_name"])){
	$profilePic= $_FILES["profilePic"]["tmp_name"];
	$location = "profilePicture/";
	$picNameForDB=uniqid();
	move_uploaded_file($profilePic,$location."$picNameForDB.jpg");}
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
				if(is_uploaded_file( $_FILES["profilePic"]["tmp_name"])){
					$updateData = "UPDATE adminregistration SET adminId = '$adminId', name = '$name',email = '$email',password='$pwd',gender='$gender',instituteName = '$insName',departmentName = '$deptName',departmentCode = '$deptCode',contactNumber='$contact',profilePic = '$picNameForDB.jpg')";
					}
					else{
						$updateData = "UPDATE adminregistration SET adminId = '$adminId', name = '$name',email = '$email',password='$pwd',gender='$gender',instituteName = '$insName',departmentName = '$deptName',departmentCode = '$deptCode',contactNumber='$contact')";
					}
					$runInsertQuery= mysqli_query($connection,$insertData);
					if($runInsertQuery == true){
						setcookie("AUprofile","qvgf123", time() + (30));
						echo "success";
					}
					else{
						echo "wrong!";
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
?>