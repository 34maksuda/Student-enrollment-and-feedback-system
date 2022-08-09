<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<div id="div">
		<form class="from-group" id="changePass">
			<label>Old password:</label><br>
			<input class="form-control" type="password" required>
			<label>New password:</label><br>
			<input class="form-control" type="password" required>
			<label>Confirm password:</label><br>
			<input class="form-control" type="password" required><br>
			<input id="changebtn" type="submit" value="change">
		</form>
	</div>
</body>