<?php
session_start();
require_once("header.php");
require_once("dbConnection.php");
require_once("navbar.php");
?>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        $numOfRows = mysqli_num_rows($runSql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question1"] == 5){
              $count5++;
            }
            else if($row["question1"] == 4){
              $count4++;
            }
            else if($row["question1"] == 3){
              $count3++;
            }
            if($row["question1"] == 2){
              $count2++;
            }
            if($row["question1"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '1: Teacher provided the course outline having weekly content plan with list of required text book'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }

    /* question2 */

    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question2"] == 5){
              $count5++;
            }
            else if($row["question2"] == 4){
              $count4++;
            }
            else if($row["question2"] == 3){
              $count3++;
            }
            if($row["question2"] == 2){
              $count2++;
            }
            if($row["question2"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '2:Course objectives,learning outcomes and grading criteria are clear to me:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

      chart.draw(data, options);
    }

    /* question 3 */
    google.charts.setOnLoadCallback(drawChart3);

    function drawChart3() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question3"] == 5){
              $count5++;
            }
            else if($row["question3"] == 4){
              $count4++;
            }
            else if($row["question3"] == 3){
              $count3++;
            }
            if($row["question3"] == 2){
              $count2++;
            }
            if($row["question3"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '3:Course integrates throretical course concepts with the real world examples:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

      chart.draw(data, options);
    }

    /*question 4 */
    google.charts.setOnLoadCallback(drawChart4);

    function drawChart4() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question4"] == 5){
              $count5++;
            }
            else if($row["question4"] == 4){
              $count4++;
            }
            else if($row["question4"] == 3){
              $count3++;
            }
            if($row["question4"] == 2){
              $count2++;
            }
            if($row["question4"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '4: Teacher is punctual,arrives on time and leaves on time:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

      chart.draw(data, options);
    }

    /*question 5 */
    google.charts.setOnLoadCallback(drawChart5);

    function drawChart5() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question5"] == 5){
              $count5++;
            }
            else if($row["question5"] == 4){
              $count4++;
            }
            else if($row["question5"] == 3){
              $count3++;
            }
            if($row["question5"] == 2){
              $count2++;
            }
            if($row["question5"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '5: Teacher is good at stimulating the interest in the course content:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

      chart.draw(data, options);
    }

    /* question 6 */
    google.charts.setOnLoadCallback(drawChart6);

    function drawChart6() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question6"] == 5){
              $count5++;
            }
            else if($row["question6"] == 4){
              $count4++;
            }
            else if($row["question6"] == 3){
              $count3++;
            }
            if($row["question6"] == 2){
              $count2++;
            }
            if($row["question6"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '6: Teacher is good at explaining the subject matter:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart6'));

      chart.draw(data, options);
    }
    /* question 7 */
    google.charts.setOnLoadCallback(drawChart7);

    function drawChart7() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question7"] == 5){
              $count5++;
            }
            else if($row["question7"] == 4){
              $count4++;
            }
            else if($row["question7"] == 3){
              $count3++;
            }
            if($row["question7"] == 2){
              $count2++;
            }
            if($row["question7"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: "7: Teacher's presentation is clear,loud and easy to understand:"
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart7'));

      chart.draw(data, options);
    }

    /* question8 */

    google.charts.setOnLoadCallback(drawChart8);

    function drawChart8() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question8"] == 5){
              $count5++;
            }
            else if($row["question8"] == 4){
              $count4++;
            }
            else if($row["question8"] == 3){
              $count3++;
            }
            if($row["question8"] == 2){
              $count2++;
            }
            if($row["question8"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '8: Teacher is good at using innovative teaching methods/ways:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart8'));

      chart.draw(data, options);
    }

    /* question 9 */
    google.charts.setOnLoadCallback(drawChart9);

    function drawChart9() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question9"] == 5){
              $count5++;
            }
            else if($row["question9"] == 4){
              $count4++;
            }
            else if($row["question9"] == 3){
              $count3++;
            }
            if($row["question9"] == 2){
              $count2++;
            }
            if($row["question9"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '9: Teacher is available and helpful during counseling hours:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart9'));

      chart.draw(data, options);
    }

    /*question 10 */
    google.charts.setOnLoadCallback(drawChart10);

    function drawChart10() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question10"] == 5){
              $count5++;
            }
            else if($row["question10"] == 4){
              $count4++;
            }
            else if($row["question10"] == 3){
              $count3++;
            }
            if($row["question10"] == 2){
              $count2++;
            }
            if($row["question10"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '10: Teacher has completed the whole course as per course outline:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart10'));

      chart.draw(data, options);
    }

    /*question 11 */
    google.charts.setOnLoadCallback(drawChart11);

    function drawChart11() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question11"] == 5){
              $count5++;
            }
            else if($row["question11"] == 4){
              $count4++;
            }
            else if($row["question11"] == 3){
              $count3++;
            }
            if($row["question11"] == 2){
              $count2++;
            }
            if($row["question11"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '11:Teacher is always fair and impartial:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart11'));

      chart.draw(data, options);
    }

    /* question 12 */
    google.charts.setOnLoadCallback(drawChart12);

    function drawChart12() {

      var data = google.visualization.arrayToDataTable([
        ['options', 'values'],
        <?php
        $courseUniqueId = $_REQUEST["courseUniqueId"];
        $sql = "SELECT * FROM feedback WHERE courseUniqueId = '$courseUniqueId'";
        $runSql = mysqli_query($connection, $sql);
        if($runSql == true){
          $count5 = 0;
          $count4 = 0;
          $count3 = 0;
          $count2 = 0;
          $count1 = 0;
          while($row = mysqli_fetch_assoc($runSql)){
            if($row["question12"] == 5){
              $count5++;
            }
            else if($row["question12"] == 4){
              $count4++;
            }
            else if($row["question12"] == 3){
              $count3++;
            }
            if($row["question12"] == 2){
              $count2++;
            }
            if($row["question12"] == 1){
              $count1++;
            }
          }
          echo "['Strongly Agree',".$count5."],";
          echo "['Agree',".$count4."],";
          echo "['Neutral',".$count3."],";
          echo "['Disagree',".$count2."],";
          echo "['Strongly Disgree',".$count1."]"; } ?>
          ]);

      var options = {
        title: '12:Assessments conducted are clearly connected to maximize learining objectives :'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart12'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="totalStu">Total students who have given feedback for this course is: <?php echo $numOfRows; ?></div>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
  <div id="piechart2" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart3" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart4" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart5" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart6" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart7" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart8" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart9" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart10" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart11" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="piechart12" style="width: 900px; height: 500px; margin-top: -87px"></div>
  <div id="courseDetails">
    <?php
    $SqlForCourse = "SELECT * FROM courseregistration WHERE courseUniqueId = '$courseUniqueId'";
    $runSqlForCourse = mysqli_query($connection,$SqlForCourse);
    $courseDetails = mysqli_fetch_array($runSqlForCourse);
    ?>
    <table id="courseDetails">
     <tr>
       <th>Course Unique Id</th>
       <td><?php echo $courseDetails["courseUniqueId"]; ?></td>
     </tr>
     <tr>
       <th>Course Teacher</th>
       <td><?php
       $thisCourseTeacher = $courseDetails["teacherRegId"];
       $teacherSelection = "SELECT * FROM teacher WHERE registerId = '$thisCourseTeacher'";
       $runTeacherSelection = mysqli_query($connection, $teacherSelection) ;
       $teacherRow = mysqli_fetch_array($runTeacherSelection);
       echo $teacherRow["name"];
     ?></td>
   </tr>
   <tr>
    <th>Teacher Email</th>
    <td><?php echo $teacherRow["email"]; ?></td>
  </tr>
  <tr>
   <th>Course Code</th>
   <td><?php echo $courseDetails["courseCode"]; ?></td>
 </tr>
 <tr>
   <th>Course Title</th>
   <td><?php echo $courseDetails["courseTitle"]; ?></td>
 </tr>
 <tr>
   <th>Level</th>
   <td><?php echo $courseDetails["levels"]; ?></td>
 </tr>
</tr>
<tr>
 <th>Semester</th>
 <td><?php echo $courseDetails["semester"]; ?></td>
</tr>
</tr>
<tr>
 <th>Section</th>
 <td><?php echo $courseDetails["section"]; ?></td>
</tr>
</tr>
<tr>
 <th>Year</th>
 <td><?php echo $courseDetails["years"]; ?></td>
</tr>
</table>
</div>
</body>
</html>



