<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<div class="container">
		<div class="row" id="contactPage">
			<div class="col-8 contact">
				<h4>Contact Us</h4>
				<form>
					<label>Name:</label><br>
					<input class="form-control" type="text" required><br>
					<label>Mobile number:</label><br>
					<input class="form-control" type="tel" required><br>
					<label>Email:</label><br>
					<input class="form-control" type="email" required><br>
					<label>Message:</label><br><br>
					<textarea class="form-control" rows="5" cols="65"></textarea><br>
					<input class="contactSubmit" type="submit" value="Send Message">
				</form>
			</div>
			<div class="col-4 cdetails">
				<h4>Contact Details</h4>
				<p><i class="fas fa-map-marker-alt"></i>location:Basherhat,Dinajpur</p>
				<p><i class="fa fa-phone fa-fw"></i>phone:01722869329</p>
				<p><i class="far fa-envelope"></i>
					<a href="mailto:name@example.com">Email:name@example.com</a>
				</p>
				<p><i class="fas fa-clock"></i>
				Hour:Monday - Sunday: 9:00 AM to 9:00 PM</p>
				<ul class="socialIcons">
					<li>
						<a href="#"><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-google-plus-g"></i></a>
					</li>
				</ul>
			</div>
		</div>

	</div>
	<?php
	require_once("footer.php");
	?>
</body>

