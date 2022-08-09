<?php
session_start();
require_once("dbConnection.php");
$email = $_REQUEST["email"];
$pwd = $_REQUEST["password"];
$encryptedPwd = sha1(md5($pwd));
$searchQuery = "SELECT * FROM adminregistration WHERE email = '$email' AND password = '$encryptedPwd'";
$runSearchQuery = mysqli_query($connection,$searchQuery);
$numOfRows= mysqli_num_rows($runSearchQuery);
if($runSearchQuery = true){
	if($numOfRows == 1){
		$_SESSION["adminEmail"] = $email;
		$_SESSION["start"] = time();
		$_SESSION["expire"] = $_SESSION["start"] + (30*60);
		setcookie("adminLogS","qwgbh",time()+(30));
		echo "admin";
	}
	else{
		echo "invalid password or email combination!";
	}
}
?>