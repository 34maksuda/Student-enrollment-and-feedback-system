<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	?>
	<section id="sfeedbacksec">
		<div class="row">
			<div class="col-2" id="sfmenus">
				<div id="fmwrapper">
					<a href="show_feedback.php"><i class="far fa-thumbs-up"></i>feedback</a>
					<a href="profile.php"><i class="fas fa-user"></i>profile</a>
					<a href="profile.php"><i class="fas fa-edit"></i>edit profile</a>
					<a href="change_password.php"><i class="fa fa-key" aria-hidden="true"></i>change password</a>
				</div>
			</div>
			<div class="col-10" id="feedContent">
				<div id="sfQues">
					<h4>Questions that are given to the student's to give their feedback to their teacher:</h4>
					<table class="table table-bordered">
						<tr>
							<th>1-Course Material</th>
							<th>options</th>
						</tr>
						<tr>
							<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book: </td>
							<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
						</tr>
						<tr>
							<td><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me</td>
							<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
						</tr>
						<tr>
							<td><b>3:</b>Course integrates throretical course concepts with the real world examples</td>
							<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr>
							<th>2-Class Teaching</th>
							<th>options</th>
						</tr>
						<tr>
							<td><b>4:</b> Teacher is punctual,arrives on time and leaves on time:
							</td>
							<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
						</tr>
						<tr>
							<td><b>5:</b> Teacher is good at stimulating the interest in the course content:</td>
							<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td></tr>
							<tr>
								<td><b>6:</b> Teacher is good at explaining the subject matter:</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
							<tr>
								<td><b>7:</b> Teacher's presentation is clear,loud and easy to understand:</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
							<tr>
								<td>
									<b>8:</b> Teacher is good at using innovative teaching methods/ways:
								</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
							<tr>
								<td>
									<b>9:</b> Teacher is available and helpful during counseling hours:
								</td> 
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
							<tr>
								<td><b>10:</b> Teacher has completed the whole course as per course outline:</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr>
								<th>3-Class Assessment</th>
								<th>options</th>
							</tr>
							<tr>
								<td><b>11:</b>Teacher is always fair and impartial:</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
							</tr>
							<tr>
								<td><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</td>
								<td>1.Strongly Agree 2.Agree 3.Neutral 4.Disagree 5.Strongly Disagree</td>
								<tr>
									<td><b>13:</b>What I like about the course:<br><br></td>
									<td>You can give any comment</td>
								</tr>
								<tr>
									<td><b>14:</b>What I dislike about the course:<br><br></td>
									<td>You can give any comment</td>
								</tr>
							</table>
						</div>
						<div id="mainFeeDdiv">
							<div id="sfheader">
								<h4>Show Your Feedback</h4>
							</div>
							<div id="searchBar">
								<table class="table table-borderless searchTable">
									<tr>
										<td class="labelTd">
											<label>Search Your Teacher<span>:</span></label>
										</td>
										<td>
											<input type="text" placeholder="search here by email..."><i id="cortana" class="fas fa-search"></i>
										</td>
									</tr>
									<tr>	
										<td class="labelTd">
											<label>Search course Title<span>:</span></label>
										</td>
										<td>
											<input type="text" placeholder="write here the course title for which you want to show feedback..."><i id="cortana" class="fas fa-search"></i>
										</td>
									</tr>
									<tr>	
										<td class="labelTd">
											<label>Search Department Name:<span>:</span></label>
										</td>
										<td>
											<input type="text" placeholder="write here the department name for which you want to show feedback..."><i id="cortana" class="fas fa-search"></i>
										</td>
									</tr>
								</table>
							</div>

							<div id="showFeedback">
								<table class="table table-bordered">
									<thead>
										<tr class="bg">
											<th>Serial NO.</th>
											<th>Level</th>
											<th>Semester</th>
											<th>Department</th>
											<th>Course Title</th>
											<th>Teacher's Email</th>
											<th>Ques1</th>
											<th>Ques2</th>
											<th>Ques3</th>
											<th>Ques4</th>
											<th>Ques5</th>
											<th>Ques6</th>
											<th>Ques7</th>
											<th>Ques8</th>
											<th>Ques9</th>
											<th>Ques10</th>
											<th>Ques11</th>
											<th>Ques12</th>
											<th>Ques13</th>
											<th>Ques14</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td>3</td>
											<td>2</td>
											<td>CSE</td>
											<td>Web Engg.</td>
											<td>Shajalal@gmail.com</td>
											<td>
												Strongly Agree
											</td>
											<td>
												Agree
											</td>
											<td>
												neutral
											</td>
											<td>
												Disagree
											</td>
											<td>
												Strongly Disagree
											</td>
											<td>
												Agree
											</td>
											<td>
												Disagree
											</td>
											<td>
												neutral
											</td>
											<td>
												Agree
											</td>
											<td>
												agree
											</td>
											<td>
												neutral
											</td>
											<td>
												Agree
											</td>
											<td>N/A</td>
											<td>N/A</td>
										</tr>
									</tbody>

								</table>
							</div>
							
						</div>
					</div>

				</div>
			</section>
			<?php
			require_once("footer.php");
			?>
		</body>