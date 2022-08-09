<?php
session_start();
if(isset($_SESSION["teacherId"]) == true){
  require_once("header.php");
  require_once("dbConnection.php")
  ?>
  <body>
   <?php
   require_once("navbar.php");
   if(isset($_COOKIE['TLogSuccess'])){ ?>
    <span id="successful" class="adLog">Logged in successfully!!</span>
    <?php setcookie("TLogSuccess","qwerty",time()-30);}
    $TID = $_SESSION["teacherId"];
    $selectTRId = "SELECT * FROM teacher WHERE teacherId='$TID'";
    $runSelectTRId = mysqli_query($connection,$selectTRId);
    $getTeacherInfo = mysqli_fetch_array($runSelectTRId);
    $teacherRegId = $getTeacherInfo["registerId"];

  ?>
  <div class="container" id="courseWrapper">
    <a href="teacherProfile.php" title="visit profile"><div id="profileT">
      <img src="profilePicture/<?php echo $getTeacherInfo["profilePic"]; ?>">
    </div></a>
    <div id="addCourse">
      <a href="courseRegistrationForm.php" id="addcourseBtn" title="add courses"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>
    <div id="courses">
      <?php
      if($getTeacherInfo["name"] == null || $getTeacherInfo["email"]==null){ ?>
        <span id="nullNE">Please complete your profile first!</span>
      <?php }
      $selectQuery = "SELECT * FROM courseregistration WHERE teacherRegId = '$teacherRegId' ORDER BY courseTitle";
      $runSelectQuery = mysqli_query($connection,$selectQuery);
      while($row = mysqli_fetch_array($runSelectQuery)){ ?>
        <a id="pieGoL" href="pie chart.php?courseUniqueId=<?php echo  $row["courseUniqueId"];?>"><div id="individualCourse">
          <h3 class="courseRelated"><?php echo $row["courseTitle"]."(".$row["courseCode"] .")"; ?></h3>
          <p class="courseRelated"><?php echo $row["years"]; ?></p>
          <br>
          <br>
          <br>
          <p class="courseRelated"><?php echo $row["courseUniqueId"]; ?></p>
        </div></a>
      <?php }
      ?>
    </div>
  </div>
</body>
<?php } 
else{
  header("location:homepage.php?notLoggedIn");
}
?>