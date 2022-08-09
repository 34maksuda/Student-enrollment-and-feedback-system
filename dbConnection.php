<?php
	$host="localhost";
	$dbUser="MaksudaBilkis";
	$dbPwd="MaksudaBilkis@2020";
	$dbName="student_feedback41";

	$connection=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
	if($connection==false){
	echo "<h1>Error establishing database connection</h1>";
	}
?>