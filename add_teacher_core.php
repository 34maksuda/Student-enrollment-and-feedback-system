<?php
/*kaj choltese...database a table creation a problem hochce...*/
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
if(!empty($_REQUEST["TID"]) && !empty($_REQUEST["password"]) && (strlen($_REQUEST["password"])) >=6 && !empty($_REQUEST["Cnfrmpassword"]) && !empty($_REQUEST["numOfTeacher"])){

	$currentUser = $_SESSION["adminEmail"];
	$TID =clean($_REQUEST["TID"]);
	$pwd =$_REQUEST["password"];
	$cnfrmPwd =$_REQUEST["Cnfrmpassword"];
	$numOfTeachers = $_REQUEST["numOfTeacher"];
	$selectAdminTable = "SELECT * FROM adminregistration WHERE email='$currentUser'";
	$runAdminTable = mysqli_query($connection, $selectAdminTable);
	if($runAdminTable == true){
		$admin =  mysqli_fetch_array($runAdminTable);
		$adminId = $admin['adminId'];
		$instituteName = $admin['instituteName'];
		$registerId = $instituteName.$TID;
		$checkDuplicateQuery = "SELECT * FROM teacher WHERE registerId = '$registerId'";
		$runCheckDuplicateQuery = mysqli_query($connection,$checkDuplicateQuery);
		$numOfRows = mysqli_num_rows($runCheckDuplicateQuery);
		if($runCheckDuplicateQuery == true){
			if($numOfRows == 0){
				if($pwd === $cnfrmPwd){
					$i = 0;
					while($i < $numOfTeachers){
						$newTID = intval($TID) + $i;
						$registerId = $instituteName.$newTID;
						$insertData = "INSERT INTO teacher(registerId,teacherId,adminId,password) VALUES ('$registerId','$newTID','$adminId','$pwd')";
						$runInsertQuery= mysqli_query($connection,$insertData);
						if($runInsertQuery == true){
							$t = 1;
						}
						else{
							echo "insert data query te problem";
						}
						$i = $i + 1;
					}
					if($t == 1){
						echo 1;
					}
				}
				else{
					echo "password and confirm password combination is wrong!!";
				}
			}
			else{
				echo "A teacher with this student Id is already existed!";
			}

		}
		else{
			echo "SQL query error.";
		}

	}
	else{
		echo "Select admin table query is wrong!";
	}

}
else
{
	echo "please fill out all fields with proper constraints";
}
?>

