<?php
session_start();
if(isset($_SESSION["teacherId"])){
	require_once("dbConnection.php");
	function clean($string) {
   $string = str_replace(' ', '', $string); // Replaces all spaces

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

$TID= $_SESSION["teacherId"];	
$name=clean($_REQUEST["Tname"]);
$email=$_REQUEST["TEmail"];
$pwd=$_REQUEST["TPassword"];
$gender=$_REQUEST["gender"];
if(is_uploaded_file($_FILES["pPhoto"]["tmp_name"])){
	$profilePic=$_FILES["pPhoto"]["tmp_name"];
	$location="profilePicture/";
	$nameForDb=uniqid();
	if(move_uploaded_file($profilePic, $location."$nameForDb.jpg")){

		$updateQuery="UPDATE teacher SET name ='$name',email='$email',password='$pwd',gender='$gender',profilePic='$nameForDb.jpg' WHERE teacherId='$TID'";
	}
	else{
		echo "moveUploadedFile kaj korenai.";
	}
}
else{
	$updateQuery="UPDATE teacher SET name ='$name',email='$email',password='$pwd',gender='$gender' WHERE teacherId='$TID'";
}
$runUpdateQuery=mysqli_query($connection,$updateQuery);
if($runUpdateQuery==true){
	setcookie("TUprofile","qvgf", time() + (30));
	echo "success";
}
else{
	echo "Error in update query";
}
}
