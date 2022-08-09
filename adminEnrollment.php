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
		<div class="wrapper row">
			<div class="col-md-3 menus">
				<ul>
					<a href="adminEnrollment.php"><li>Manage Enrollment</li></a>
					<a href="enrolledStudents.php"><li>Enrolled Students</li></a>
				</ul>
			</div>
			<div class="col-md-8 ">
				<?php
				$selectQuery = "SELECT * FROM adminregistration WHERE email = '$adminEmail'";
				$runSelectQuery = mysqli_query($connection, $selectQuery);
				if($runSelectQuery == true){ 
					$adminRow = mysqli_fetch_array($runSelectQuery);
					$deptName = $adminRow["departmentName"];
					if(strpos($deptName, "CSE")){ ?>
						<div class="mainDiv67">
						<p>Department Of Computer Science & Engineering(CSE)</p>
						<a href="CSE_oneOne.php?LevelSem='Level 1 Semester I'"><button>Level 1 Semester I</button></a><br><br>
						<a href="#"><button>Level 1 Semester II</button></a><br><br>
						<a href="#"><button>Level 2 Semester I</button></a><br><br>
						<a href="#"><button>Level 2 Semester II</button></a><br><br>
						<a href="#"><button>Level 3 Semester I</button></a><br><br>
						<a href="#"><button>Level 3 Semester II</button></a><br><br>
						<a href="#"><button>Level 4 Semester I</button></a><br><br>
						<a href="#"><button>Level 4 Semester II</button></a>
					</div>
					<?php } else if(strpos($deptName, "EEE")) { ?>
						<div class="mainDiv67">
						<p>Department Of Electrical & Electronic Engineering(EEE)</p>
						<a href="#"><button>Level 1 Semester I</button></a><br><br>
						<a href="#"><button>Level 1 Semester II</button></a><br><br>
						<a href="#"><button>Level 2 Semester I</button></a><br><br>
						<a href="#"><button>Level 2 Semester II</button></a><br><br>
						<a href="#"><button>Level 3 Semester I</button></a><br><br>
						<a href="#"><button>Level 3 Semester II</button></a><br><br>
						<a href="#"><button>Level 4 Semester I</button></a><br><br>
						<a href="#"><button>Level 4 Semester II</button></a><br><br> 
					</div>
					<?php } else if(strpos($deptName, "ECE")) { ?>
						<div class="mainDiv67">
						<p>Department Of Electrical & Communication Engineering(ECE)</p>
						<a href="#"><button>Level 1 Semester I</button></a><br><br>
						<a href="#"><button>Level 1 Semester II</button></a><br><br>
						<a href="#"><button>Level 2 Semester I</button></a><br><br>
						<a href="#"><button>Level 2 Semester II</button></a><br><br>
						<a href="#"><button>Level 3 Semester I</button></a><br><br>
						<a href="#"><button>Level 3 Semester II</button></a><br><br>
						<a href="#"><button>Level 4 Semester I</button></a><br><br>
						<a href="#"><button>Level 4 Semester II</button>
					</div>
					<?php }

				}
				else{
					echo "wrong in sql select query";
				} ?>
			</div>
			<div class=" col-md-1 blank">
			</div>
		</div>
	</body>
	<?php } ?>