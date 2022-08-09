<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
if(!empty($_REQUEST["SID"]) && !empty($_REQUEST["password"]) && (strlen($_REQUEST["password"])) >=6 && !empty($_REQUEST["Cnfrmpassword"]) && !empty($_REQUEST["level"]) && (!empty($_REQUEST["semester"])) && !empty($_REQUEST["session"]) && !empty($_REQUEST["numOfStu"])){

	$currentUser = $_SESSION["adminEmail"];
	$SID =clean($_REQUEST["SID"]);
	$pwd =$_REQUEST["password"];
	$cnfrmPwd =$_REQUEST["Cnfrmpassword"];
	$level =$_REQUEST["level"];
	$semester =($_REQUEST["semester"]);
	$session = $_REQUEST["session"];
	$attendance =$_REQUEST["attendance"];
	$numOfStudents = $_REQUEST["numOfStu"];
	if(isset($_REQUEST["section"])){
		$section = $_REQUEST["section"];
	}
	$selectAdminTable = "SELECT * FROM adminregistration WHERE email='$currentUser'";
	$runAdminTable = mysqli_query($connection, $selectAdminTable);
	if($runAdminTable == true){
		$admin =  mysqli_fetch_array($runAdminTable);
		$adminId = $admin['adminId'];
		$instituteName = $admin['instituteName'];
		$registerId = $instituteName.$SID;
		$checkDuplicateQuery = "SELECT * FROM studentregistration WHERE registerId = '$registerId'";
		$runCheckDuplicateQuery = mysqli_query($connection,$checkDuplicateQuery);
		$numOfRows = mysqli_num_rows($runCheckDuplicateQuery);
		if($runCheckDuplicateQuery == true){
			if($numOfRows == 0){
				if($pwd === $cnfrmPwd){
					$i = 0;
					while($i < $numOfStudents){
						$newSID = intval($SID) + $i;
						$registerId = $instituteName.$newSID;
						if(isset($_REQUEST['section'])){
							$insertData = "INSERT INTO studentregistration(registerId,studentId,adminId,password,level,semester,section,session,attendance) VALUES ('$registerId','$newSID','$adminId','$pwd','$level','$semester','$section','$session','$attendance')";
						}
						else{
							$insertData = "INSERT INTO studentregistration(registerId,studentId,adminId,password,level,semester,session,attendance) VALUES ('$registerId','$newSID','$adminId','$pwd','$level','$semester','$session','$attendance')";
						}
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
				echo "A student with this student Id is already existed!";
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

