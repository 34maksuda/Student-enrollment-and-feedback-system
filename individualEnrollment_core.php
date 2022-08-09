<?php
session_start();
require_once("dbConnection.php");
function clean($string){
	$s = str_replace(" ", "", $string);
	return preg_replace("/[^A-Za-z0-9\-] /","", $s);
}
$SID = $_REQUEST["SID"];
$S = 0;
if(is_uploaded_file( $_FILES["BsigOfDH"]["tmp_name"])){
	$sigOfDeptH1= $_FILES["BsigOfDH"]["tmp_name"];
	$location = "candidateSignature/";
	$sigOfDeptH1Id=uniqid();
	move_uploaded_file($sigOfDeptH1,$location."$sigOfDeptH1Id.jpg");
	$updateDeptHeadSig1 = "UPDATE enrolledstudents SET sigOfDeptHead1 = '$sigOfDeptH1Id.jpg' WHERE studentId = '$SID'";
	$runUpdateQuery1 = mysqli_query($connection,$updateDeptHeadSig1);
	if($runUpdateQuery1 ==true){
		$S = $S + 1;
	}
	else{
		echo "error1";
	}
}

if(is_uploaded_file( $_FILES["CsigOfDH"]["tmp_name"])){
	$sigOfDeptH2= $_FILES["CsigOfDH"]["tmp_name"];
	$location = "candidateSignature/";
	$sigOfDeptH2Id=uniqid();
	move_uploaded_file($sigOfDeptH2,$location."$sigOfDeptH2Id.jpg");
	$updateDeptHeadSig2 = "UPDATE enrolledstudents SET sigOfDeptHead2 = '$sigOfDeptH2Id.jpg' WHERE studentId = '$SID'";
	$runUpdateQuery2 = mysqli_query($connection,$updateDeptHeadSig2);
	if($runUpdateQuery2 ==true){
		$S = $S + 1;
	}
	else{
		echo "error2";
	}
}
if(is_uploaded_file( $_FILES["deanSig"]["tmp_name"])){
	$deanSig= $_FILES["deanSig"]["tmp_name"];
	$location = "candidateSignature/";
	$deanSigId=uniqid();
	move_uploaded_file($deanSig,$location."$deanSigId.jpg");
	$updateSigOfDean = "UPDATE enrolledstudents SET sigOfDean = '$deanSigId.jpg' WHERE studentId = '$SID'";
	$runUpdateQuery3 = mysqli_query($connection,$updateSigOfDean);
	if($runUpdateQuery3 ==true){
		$S = $S + 1;
	}
	else{
		echo "error3";
	}
}
else{
	echo " please upload the signature of Dean.";
}
if(is_uploaded_file( $_FILES["examConSig"]["tmp_name"])){
	$examConSig= $_FILES["examConSig"]["tmp_name"];
	$location = "candidateSignature/";
	$examConSigId=uniqid();
	move_uploaded_file($examConSig,$location."$examConSigId.jpg");
	$updateExamConSig = "UPDATE enrolledstudents SET sigOfExamController = '$examConSigId.jpg' WHERE studentId = '$SID'";
	$runUpdateQuery4 = mysqli_query($connection,$updateExamConSig);
	if($runUpdateQuery4 ==true){
		$S = $S + 1;
	}
	else{
		echo "error4";
	}
}
else{
	echo " please upload the signature of exam-controller.";
}
if(is_uploaded_file( $_FILES["sigOfAman"]["tmp_name"])){
	$sigOfAman= $_FILES["sigOfAman"]["tmp_name"];
	$location = "candidateSignature/";
	$sigOfAmanId=uniqid();
	move_uploaded_file($sigOfAman,$location."$sigOfAmanId.jpg");
	$updatesigOfAman = "UPDATE enrolledstudents SET sigOfAccountingManager = '$sigOfAmanId.jpg' WHERE studentId = '$SID'";
	$runUpdateQuery5 = mysqli_query($connection,$updatesigOfAman);
	if($runUpdateQuery5 ==true){
		$S = $S + 1;
	}
	else{
		echo "error5";
	}
}
else{
	echo " please upload the signature of accounting manager";
}

if($S == 5 || $S == 3){
	$updateEnStatus = "UPDATE enrolledstudents SET enrolledStatus='enrolled' WHERE studentId = '$SID'";
	$runUpdateEnStatus = mysqli_query($connection, $updateEnStatus);
	if($runUpdateEnStatus == true){
	echo "success";}
	else{
		echo "please fill up all required signatures.";
	}
}
else{
	echo "Error happend";
}

		