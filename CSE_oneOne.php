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
		<div class="enFWrapper">
			<div id="headofEnF">
				<p>Department Of Computer Science & Engineering(CSE)</p>
				<small>Level 1 Semester I</small>
			</div enFeeForm>
			<form  id="cseOneOneForm">
				<input type="hidden" value="Level 1 semester I" name="levelSemester">
				<p>Fix up the fees for student</p>
				<div class = "enrollmentFE"></div>
				<table id="cse_oneOneT">
					<?php
					$var = 1;
					?>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
					<tr id="tr<?php echo $var; ?>">
						<td><input type="text" name="fee[]" required></td>
						<td>:</td>
						<td><input type="text" name="amount[]" required><span id="AddR" title="add a new field"><i class="fas fa-plus"></i></span><span id="delR" title="remove a field"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
						<?php $var++; ?></td>
					</tr>
				</table>
				<input type="submit" name="subOneEF" value="SAVE" id="subOneEF">
			</form>
		</div>
	</body>
<?php } 
require_once("footer.php");
if (isset($_COOKIE["delL1S1Fee"])) {
	echo "<script>
  $(document).ready(function(){
    alert('Enrollment fee list of level 1 semester I has been deleted.');
  });
</script>";
}
?>