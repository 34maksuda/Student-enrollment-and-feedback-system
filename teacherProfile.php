<?php
session_start();
if(isset($_SESSION["teacherId"]) == true){
  require_once("header.php");
  require_once("dbConnection.php")
  ?>
  <body>
   <?php
   require_once("navbar.php");
   $TID=$_SESSION['teacherId'];
   $selectTeacher = "SELECT * FROM teacher WHERE teacherId='$TID'";
   $runSelectQuery = mysqli_query($connection,$selectTeacher);
   if($runSelectQuery == true){
    $teacherInfo1 = mysqli_fetch_array($runSelectQuery);
    $profilePic = $teacherInfo1["profilePic"];
    if(isset($_COOKIE["TUprofile"])){ ?>
      <div id="TUprofile">Your profile info has been updated!</div>
      <?php 
      setcookie("TUprofile","qvgf", time() - (30));  } ?>
      <section id="teacherProfile">
        <span id="tPUError"></span>
        <div id="TPDiv">
         <img src="profilePicture/<?php echo $profilePic ?>">
         <form id="tProfileF">
           <input type="file" name="pPhoto">
           <p><?php echo $teacherInfo1["name"]; ?></p>
         </div>
         <div id="teacherProfileTDiv">
           <table id="teacherProfileT">
             <tr>
              <th>Teacher Id</th>
              <td>
                <input type="text" class="inputControl" name="TID" value="<?php echo $teacherInfo1['teacherId']; ?>" readonly>
              </td>
            </tr>
            <tr>
              <th>Name</th>
              <td>
                <input type="text" class="inputControl" name="Tname" value="<?php echo $teacherInfo1['name']; ?>">
              </td>
            </tr>
            <tr>
              <th>Email</th>
              <td>
                <input type="email" class="inputControl" name="TEmail" value="<?php echo $teacherInfo1['email']; ?>">
              </td>
            </tr>
            <tr>
              <th>Password</th>
              <td>
                <input type="password" class="inputControl" name="TPassword" value="<?php echo $teacherInfo1['password']; ?>">
              </td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>
                <?php
                if($teacherInfo1["gender"]== "Male"){?>
                  <input type="radio" name="gender" value="Male" checked>Male
                  <input type="radio" name="gender" value="Female">Female
                <?php }
                else{ ?>
                  <input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender" value="Female" checked>Female
                  <?php
                } } }
                else{
                  setcookie("notLoggedIn","asdfghj",time()+10);
                  header("location:homepage.php?notLoggedIn");

                }
                ?>
              </td>
            </tr>
          </table>
          <input type="submit" class="TeacherPUp" name="updateBtn" value="Update">
        </div>
      </form>
    </section>
    <?php require_once("footer.php"); ?>
  </body>
