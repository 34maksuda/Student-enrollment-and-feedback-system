<?php
session_start();
if(isset($_SESSION["studentId"]) == true){
  require_once("header.php");
  require_once("dbConnection.php")
  ?>
  <body>
   <?php
   require_once("navbar.php");
   $SID=$_SESSION['studentId'];
   $selectStudent = "SELECT * FROM studentregistration WHERE studentId='$SID'";
   $runSelectQuery = mysqli_query($connection,$selectStudent);
   if($runSelectQuery == true){
    $studentInfo1 = mysqli_fetch_array($runSelectQuery);
    $profilePic = $studentInfo1["profilePic"];
    if(isset($_COOKIE["SUprofile"])){ ?>
      <div id="SUprofile">Your profile info has been updated!</div>
      <?php 
      setcookie("SUprofile","qvgf", time() - (30));  } ?>
      <section id="teacherProfile">
        <span id="SPUError"></span>
        <div id="TPDiv">
         <img src="profilePicture/<?php echo $profilePic ?>">
         <form id="SProfileF">
           <input type="file" name="pPhoto">
           <p><?php echo $studentInfo1["Name"]; ?></p>
         </div>
         <div id="teacherProfileTDiv">
           <table id="teacherProfileT">
             <tr>
              <th>Student Id</th>
              <td>
                <input type="text" class="inputControl" name="SID" value="<?php echo $studentInfo1['studentId']; ?>" readonly>
              </td>
            </tr>
            <tr>
              <th>Name</th>
              <td>
                <input type="text" class="inputControl" name="Sname" value="<?php echo $studentInfo1['Name']; ?>">
              </td>
            </tr>
            <tr>
              <th>Email</th>
              <td>
                <input type="email" class="inputControl" name="SEmail" value="<?php echo $studentInfo1['email']; ?>">
              </td>
            </tr>
            <tr>
              <th>Password</th>
              <td>
                <input type="password" class="inputControl" name="SPassword" value="<?php echo $studentInfo1['password']; ?>">
              </td>
            </tr>
            <tr>
              <th>Department</th>
              <td>
                <input type="text" class="inputControl" name="Sdept" value="<?php echo $studentInfo1['department']; ?>">
              </td>
            </tr>
            <tr>
              <th>Level</th>
              <td>
                <select name="level"  class="inputs form-control">
                  <option <?php if($studentInfo1["semester"] == "1st year"){
                    echo "selected";
                  } ?>>1st year</option>
                  <option <?php if($studentInfo1["semester"] == "2nd year"){
                    echo "selected";
                  } ?>>2nd year</option>
                  <option <?php if($studentInfo1["semester"] == "3rd Year"){
                    echo "selected";
                  } ?>>3rd Year</option>
                  <option <?php if($studentInfo1["semester"] == "4th Year"){
                    echo "selected";
                  } ?>>4th Year</option>
                  <option <?php if($studentInfo1["semester"] == "5th year"){
                    echo "selected";
                  } ?>>5th year</option>
                  <option <?php if($studentInfo1["semester"] == "6th year"){
                    echo "selected";
                  } ?>>6th year</option>
                </select>
              </td>
            </tr>
            <tr>
              <tr>
                <th>semester</th>
                <td>
                  <select name="semester" class="inputs form-control">
                    <option <?php if($studentInfo1["semester"] == "I"){
                      echo "selected";
                    } ?>>I</option>
                    <option <?php if($studentInfo1["semester"] == "II"){
                      echo "selected";
                    } ?>>II</option>
                    <option <?php if($studentInfo1["semester"] == "III"){
                      echo "selected";
                    } ?>>III</option>
                    <option <?php if($studentInfo1["semester"] == "IV"){
                      echo "selected";
                    } ?>>IV</option>
                    <option <?php if($studentInfo1["semester"] == "V"){
                      echo "selected";
                    } ?>>V</option>
                    <option <?php if($studentInfo1["semester"] == "VI"){
                      echo "selected";
                    } ?>>VI</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Section</th>
                <td><input class="inputs form-control" type="text" name="section" value="<?php echo $studentInfo1["section"] ?>"></td>
              </tr>
              <tr>
                <th>Session</th>
                <td><input class="inputs form-control" type="text" name="session" value="<?php echo $studentInfo1["session"] ?>" ></td>
              </tr>
              <tr>
                  <th>Attendance</th>
                  <td><input class="inputs form-control" type="text" name="attendance" value="<?php echo $studentInfo1["attendance"] ?>"required="" readonly></td>
                </tr>
              <tr>
                <th>Gender</th>
                <td>
                  <?php
                  if($studentInfo1["gender"]== "Male"){?>
                    <input type="radio" name="gender" value="Male" checked>Male
                    <input type="radio" name="gender" value="Female">Female
                  <?php }
                  else{ ?>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female" checked>Female
                    <?php
                  } } }
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
