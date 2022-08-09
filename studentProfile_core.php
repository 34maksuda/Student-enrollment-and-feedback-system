<?php
session_start();
if(isset($_SESSION["studentId"])){
	require_once("dbConnection.php");
	function clean($string) {
   $string = str_replace(' ', '', $string); // Replaces all spaces

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
$SID= $_SESSION["studentId"];	
$Sname=clean($_REQUEST["Sname"]);
$Semail=$_REQUEST["SEmail"];
$pwd=$_REQUEST["SPassword"];
$dept=$_REQUEST["Sdept"];
//echo $dept;
$level = $_REQUEST["level"];
$semester = $_REQUEST["semester"];
$section = $_REQUEST["section"];
$session = $_REQUEST["session"];
$attendance = $_REQUEST["attendance"];
$gender=$_REQUEST["gender"];
if(is_uploaded_file($_FILES["pPhoto"]["tmp_name"])){
	$profilePic=$_FILES["pPhoto"]["tmp_name"];
	$location="profilePicture/";
	$nameForDb=uniqid();
	if(move_uploaded_file($profilePic, $location."$nameForDb.jpg")){

		$updateQuery="UPDATE studentregistration SET Name ='$Sname',email='$Semail',password='$pwd',department = '$dept', Level = '$level',semester = '$semester', section='$section', session='$session', attendance ='$attendance', gender='$gender',profilePic='$nameForDb.jpg' WHERE studentId='$SID'";
	}
	else{
		echo "moveUploadedFile kaj korenai.";
	}
}
else{
	$updateQuery="UPDATE studentregistration SET Name ='$Sname',email='$Semail',password='$pwd',department = '$dept', Level = '$level',semester = '$semester', section='$section', session='$session', attendance ='$attendance', gender='$gender' WHERE studentId='$SID'";
}
$runUpdateQuery=mysqli_query($connection,$updateQuery);
if($runUpdateQuery==true){
	setcookie("SUprofile","qvgf", time() + (30));
	echo "success";
}
else{
	echo "Error in update query";
}
}
