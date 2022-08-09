<?php
session_start();
require_once("dbConnection.php");
$SID = $_REQUEST["SID"];
$pwd = $_REQUEST["password"];
$encryptedPwd = sha1(md5($pwd));
$searchQuery = "SELECT * FROM studentregistration WHERE studentId = '$SID' AND password = '$pwd'";
$runSearchQuery = mysqli_query($connection,$searchQuery);
$numOfRows= mysqli_num_rows($runSearchQuery);
if($runSearchQuery = true){
	if($numOfRows == 1){
		$_SESSION["studentId"] = $SID;
		$_SESSION["start"] = time();
		$_SESSION["expire"] = $_SESSION["start"] + (30*60);
		setcookie("SLogS","dfghy",time()+(30));
		echo "success";
	}
	else{
		echo "invalid Id or password combination!";
	}
}
?>