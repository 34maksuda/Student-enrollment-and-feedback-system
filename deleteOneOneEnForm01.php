<?php
session_start(); 
require_once("dbConnection.php");
$adminEmail = $_SESSION["adminEmail"];
$selectAdmin = "SELECT * FROM adminregistration WHERE email = '$adminEmail'";
$runSelectQuery = mysqli_query($connection, $selectAdmin);
$admin = mysqli_fetch_array($runSelectQuery);
$adminId = $admin['adminId'];
$deleteQuery="DELETE FROM manageenrollment WHERE adminId='$adminId' AND levelSemester='Level 1 semester I'";
$runDeleteQuery=mysqli_query($connection,$deleteQuery);
if($runDeleteQuery==true){
	setcookie("delL1S1Fee", "wer5tg", time() + 10);
	header("location:cse_oneOne.php");
}
?>