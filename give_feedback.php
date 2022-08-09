<?php
session_start();
require_once("header.php");
?>
<body>
	<?php
	require_once("navbar.php");
	if(isset($_COOKIE['SLogS'])){ ?>
      <span id="successful" class="adLog">Logged in successfully!!</span>
    <?php setcookie("SLogS","dfghy",time()-(30));}
	?>
	<section id="feedbacksec">
		<div class="row">
			<div class="col-2" id="fmenus">
				<div id="fmwrapper">
					<a href="studentOneOneEnrollment.php"><i class="fa fa-registered" aria-hidden="true"></i>Enrollment</a>
					<a href="give_feedback.php"><i class="far fa-thumbs-up"></i>feedback</a>
					<a href="studentProfile.php"><i class="fa fa-key" aria-hidden="true"></i>my account</a>
				</div>
			</div>
			<div class="col-10" id="feedContent">
				<?php if(isset($_COOKIE['feedbackInserted'])){ ?>
					<div id="feedbackS">Your feedback has been recorded.</div>
					<?php setcookie("feedbackInserted","asdf",time()-(30)); } ?>
					<div id="feedbackError"></div>
					<form id="sfform">
					<p id="sffhead">Student's Feedback Form</p>
					<h4>Please give your answer about the following question by circling the given option on the scale:</h4>
					<div id="searchBar">
					<table class="table table-borderless searchTable">							<tr>	
					<td class="labelTd">
					<label>Enter Course Id<span>:</span></label>
					</td>
					<td>
					<input type="text" name="courseUniqueId" placeholder="Give here id given by your teacher" required>
					</td>
					</tr>
					</table>
					</div>

					<h3>1-Course Material</h3>
					<table class="table table-bordered">
					<tr>
					<td>
					<b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:
					</td>  
					<td>
					<input type="radio" name="Cmat" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="Cmat" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="Cmat" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="Cmat" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="Cmat" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>

					<tr>
					<td>
					<b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:
					</td> 
					<td>
					<input type="radio" name="CO" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="CO" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="CO" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="CO" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="CO" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>

					<tr>
					<td>
					<b>3:</b>Course integrates throretical course concepts with the real world examples:</td> 
					<td>
					<input type="radio" name="CC" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="CC" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="CC" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="CC" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="CC" value="1" required>5.<span id="view5">Strongly disagree</span>
					</tr>
					</table>

					<h3>2-Class Teaching</h3>
					<table  class="table table-bordered" >
					<tr>
					<td><b>4:</b> Teacher is punctual,arrives on time and leaves on time:
					</td>
					<td> 
					<input type="radio" name="TA" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TA" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TA" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TA" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TA" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>

					<tr>
					<td>
					<b>5:</b> Teacher is good at stimulating the interest in the course content:
					</td>
					<td> 
					<input type="radio" name="TI" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TI" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TI" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TI" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TI" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					<tr>
					<td>
					<b>6:</b> Teacher is good at explaining the subject matter:
					</td>
					<td>
					<input type="radio" name="TEx" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TEx"  value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TEx" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TEx" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TEx" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>

					<tr>
					<td>
					<b>7:</b> Teacher's presentation is clear,loud and easy to understand:
					</td>
					<td> 
					<input type="radio" name="TP" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TP" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TP" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TP" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TP" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					<tr>
					<tr>
					<td>
					<b>8:</b> Teacher is good at using innovative teaching methods/ways:
					</td>
					<td> 
					<input type="radio" name="TInn" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TInn" value="4" required="">2.<span id="view2">Agree</span>
					<input type="radio" name="TInn" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TInn" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TInn" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					<tr>
					<td>
					<b>9:</b> Teacher is available and helpful during counseling hours:
					</td> 
					<td>
					<input type="radio" name="TIGC" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TIGC" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TIGC" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TIGC" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TIGC" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					<tr>
					<td>
					<b>10:</b> Teacher has completed the whole course as per course outline:
					</td>
					<td>
					<input type="radio" name="TCO" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TCO" value="4" required>2.<span id="view2">Agree</span>
					<input type="radio" name="TCO" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TCO" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TCO" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					</table>

					<h3>3-Class Assessment</h3>
					<table  class="table table-bordered" >
					<tr>
					<td>
					<b>11:</b>Teacher is always fair and impartial:
					</td>
					<td>
					<input type="radio" name="TFI"  value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="TFI" value="4" required="">2.<span id="view2">Agree</span>
					<input type="radio" name="TFI" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="TFI" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="TFI" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					<tr>
					<td>
					<b>12:</b>Assessments conducted are clearly connected to maximize learining objectives
					:</td>
					<td>
					<input type="radio" name="ACC" value="5" required>1.<span id="view1">Strongly Agree</span>
					<input type="radio" name="ACC" value="4" required="">2.<span id="view2">Agree</span>
					<input type="radio" name="ACC" value="3" required>3.<span id="view3">Neutral</span>
					<input type="radio" name="ACC" value="2" required>4.<span id="view4">Disagree</span>
					<input type="radio" name="ACC" value="1" required>5.<span id="view5">Strongly disagree</span>
					</td>
					</tr>
					</table>
					<b>13:</b>What I like about the course:<br><br>
					<center>
					<textarea rows="5" cols="65" class="comments" name="like"></textarea>
					</center>
					<br><br>
					<b>14:</b>What I dislike about the course:<br><br>
					<center>
					<textarea rows="5" cols="65" class="comments" name="dislike"></textarea>
					</center>
					<center><input id="sffSubmit" type="submit" value="submit"></center>
					</form>
					</div>
					</div>
					</section>
					<?php
					require_once("footer.php");
					?>
				</body>