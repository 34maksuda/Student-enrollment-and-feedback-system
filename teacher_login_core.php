<?php
session_start();
require_once("dbConnection.php");
$TID = $_REQUEST["TID"];
$pwd = $_REQUEST["password"];
//$encryptedPwd = sha1(md5($pwd));
$searchQuery = "SELECT * FROM teacher WHERE TeacherId = '$TID' AND password = '$pwd'";
$runSearchQuery = mysqli_query($connection,$searchQuery);
$numOfRows= mysqli_num_rows($runSearchQuery);
if($runSearchQuery = true){
	if($numOfRows == 1){
		$_SESSION["teacherId"] = $TID;
		$_SESSION["start"] = time();
		$_SESSION["expire"] = $_SESSION["start"] + (30*60);
		setcookie("TLogSuccess","qwerty",time()+30);
		echo "successh";
	}
	else{
		echo "invalid Id or password combination!";
	}
}
else{
	echo "search query te problem.";
}
?>