<?php
session_start();
if(isset($_SESSION["adminEmail"])){
	require_once("header.php");
	require_once("dbConnection.php");
	?>
	<body>
		<?php 
		$adminEmail = $_SESSION["adminEmail"];
		require_once("navbar.php");
		?>
		<div id="enFormOption1">
			<ul>
				<li><a href="oneOneEnrollment.php">Enrollment fee list</a></li>
				<li><a href="CSE_oneOne.php">Create a new</a></li>
			</ul>
		</div>
		<?php
		$adminEmail = $_SESSION["adminEmail"];
		$selectAdmin = "SELECT * FROM adminregistration WHERE email = '$adminEmail'";
		$runSelectQuery = mysqli_query($connection, $selectAdmin);
		$admin = mysqli_fetch_array($runSelectQuery);
		$adminId = $admin['adminId'];
		$selectThisAdmin = "SELECT * FROM manageenrollment WHERE adminId = '$adminId'";
		$runSelectThisAdmin = mysqli_query($connection, $selectThisAdmin);
		$numOfRows = mysqli_num_rows($runSelectThisAdmin);
		if($numOfRows > 0){
		?>
		<div class="enFWrapper">
			<div id="headofEnF">
				<p>Department Of Computer Science & Engineering(CSE)</p>
				<small>Level 1 Semester I</small>
			</div enFeeForm>
			<form  id="cseOneOneForm">
				<p>list of fees for student</p>
				<div class = "enrollmentFE"></div>
				<table id="cse_oneOneT">
					<?php
					$var = 1;
					while($enRow = mysqli_fetch_array($runSelectThisAdmin)){
						$oneRow = $enRow["feesAndAmount"];
						$explodeOneRow = explode("-",$oneRow);
					?>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" value="<?php echo $explodeOneRow[0] ?>" readonly ></td>
						<td>:</td>
						<td><input type="text" name="amount[]" value="<?php echo $explodeOneRow[1] ?>" class="totalFeeCalc" readonly></td>
						<?php $var++; ?>
					</tr> <?php } ?>
					<tr>
						<td><b><input type="text" name="TotalFees" value="Total" class="totalFees" readonly></b></td>
						<td>:</td>
						<td><input type="text" class="totalFeesV" readonly></td>
					</tr>
				</table>
			</form>
			<div class="enEBtn">
				<a href="editCseOneOneEnForm01.php"><button>Edit</button></a>
				<a href="deleteOneOneEnForm01.php" onclick="alert('really want to delete?')"><button>Delete</button></a>
			</div>
		</div>
	<?php }
	else{ ?>
		<div id="NoFee1_1">No fees have been added yet! </div>
	<?php } ?>
	</body>
<?php } 
require_once("footer.php");
?>