<?php
session_start();
if(isset($_SESSION["adminEmail"]) == true){
  require_once("header.php");
  require_once("dbConnection.php")
  ?>
  <body>
   <?php
   require_once("navbar.php");
   $adEmail=$_SESSION['adminEmail'];
   $selectAdmin = "SELECT * FROM adminregistration WHERE email ='$adEmail'";
   $runSelectAdmin = mysqli_query($connection,$selectAdmin);
   if($runSelectAdmin == true){
    $adminInfo = mysqli_fetch_array($runSelectAdmin);
    $profilePic = $adminInfo["profilePic"];
    if(isset($_COOKIE["AUprofile"])){ ?>
      <div id="SUprofile">Your profile info has been updated!</div>
      <?php 
      setcookie("AUprofile","qvgf123", time() - (30));  } ?>
      <section id="teacherProfile">
        <span id="adprofError"></span>
        <div id="TPDiv">
         <img src="profilePicture/<?php echo $profilePic ?>">
         <form id="AdProfileF">
           <input type="file" name="profilePic">
           <p><?php echo $adminInfo["name"]; ?></p>
         </div>
         <div id="teacherProfileTDiv">
           <table id="teacherProfileT">
            <tr>
              <th>Name</th>
              <td>
                <input type="text" class="inputControl" name="name" value="<?php echo $adminInfo['name']; ?>">
              </td>
            </tr>
            <tr>
              <th>Email</th>
              <td>
                <input type="email" class="inputControl" name="email" value="<?php echo $adminInfo['email']; ?>">
              </td>
            </tr>
            <tr>
              <th>Password</th>
              <td>
                <input type="password" class="inputControl" name="password" value="<?php echo $adminInfo['password']; ?>">
              </td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>
                <?php
                if($adminInfo["gender"]== "Male"){?>
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
            <tr>
              <th>Institute Name</th>
              <td>
                <select class="inputs form-control" name="insName" required="">
                  <option>
                    Hajee Mohammad Danesh Science & Technology University(HSTU)
                  </option>
                </select>
              </td>
            </tr>
            <tr>
              <th>Department Name</th>
              <td>
                <input type="text" class="inputControl" name="deptName" value="<?php  echo $adminInfo['departmentName']; ?>">
              </td>
            </tr>
            <tr>
              <th>Department Code</th>
              <td>
                <input type="text" class="inputControl" name="deptCode" value="<?php  echo $adminInfo['departmentCode']; ?>">
              </td>
            </tr>
             <tr>
              <th>Contact Number</th>
              <td>
                <input type="text" name="conNum" class="inputControl" value="<?php  echo $adminInfo['contactNumber']; ?>">
              </td>
            </tr>
        </table>
          <input type="submit" class="TeacherPUp" name="updateBtn" value="Update">
        </div>
      </form>
    </div>
  </section>
    <?php require_once("footer.php"); ?>
  </body>
