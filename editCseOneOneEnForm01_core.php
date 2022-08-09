<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
$adminEmail = $_SESSION["adminEmail"];
$selectAdmin = "SELECT * FROM adminregistration WHERE email = '$adminEmail'";
$runSelectQuery = mysqli_query($connection, $selectAdmin);
$admin = mysqli_fetch_array($runSelectQuery);
$adminId = $admin['adminId'];
$deleteThisAdmin = "DELETE FROM manageenrollment WHERE adminId = '$adminId'";
$runDeleteThisAdmin = mysqli_query($connection, $deleteThisAdmin);
$t=0;
$levelSemester = "Level 1 semester I";
	for($i=0; $i <= count($_REQUEST['fee']); $i++){
		if(isset($_REQUEST['fee'][$i]) && isset($_REQUEST['amount'][$i])){
			$fee1  = $_REQUEST['fee'][$i]; 
			$amount1  = $_REQUEST['amount'][$i]; 
			$feesAndAmount = $fee1."-".$amount1;
			$insertQuery = "INSERT INTO manageenrollment(adminId,levelSemester,feesAndAmount)
			VALUES('$adminId','$levelSemester','$feesAndAmount')"; 

			$runInsertQuery = mysqli_query($connection, $insertQuery);
			if($runInsertQuery == true){
				$t=1;

			}
			else{
				echo "error in insertQuery";
			}
		}
	}
	if($t==1){
		echo "success";
	}
else{
	echo " error in SQL insert query";
}

