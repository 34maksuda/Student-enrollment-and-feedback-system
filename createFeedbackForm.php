<?php
session_start();
require_once("dbConnection.php");
require_once("header.php");
require_once("navbar.php");

if(!empty($_REQUEST["numOfQues"])){
	if($_REQUEST["numOfQues"] <= 15){
		$numOfQues = $_REQUEST["numOfQues"];
		echo $numOfQues;
		?>
		<form id="dynamicFedForm"> 
			<p>Give questions and options</p>
			<table id="dynamicFedTable">
				<tr>
					<th>Questions</th>
					<th>Options</th>
					</tr><?php 
					for($i = 0; $i < $numOfQues; $i++ ) { ?>
						<tr>
							<td><input class="input03" type="text" placeholder="enter a question" name="quesField<?php echo $i; ?>" required></td>
							<td><input class="input03" type="text" placeholder="enter options separated by comma(agree, neutral...)" name="options<?php echo $i; ?>" required></td>
						</tr>
					<?php } echo "success"; ?>
					<tr>
						<td colspan="2"><input type="submit" id="questionSaveBtn"  value="Save"></td>
					</tr>

				</table>
			</form>
		<?php }
		else{
			echo "you can add up to 15 questions!";
		}
	} 
	else{
		echo "please fill up the field";
	}
?>