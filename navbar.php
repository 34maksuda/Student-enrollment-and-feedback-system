<nav id="navbar" class="navbar navbar-expand-md fixed-top">
  <div class="container">
    <a id="logo" class="navbar-brand" href="homepage.php"><img src="images/newLogo.PNG"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon tab"><i class="fas fa-bars"></i></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div id="menus">
        <ul class="navbar-nav" >
          <li class="nav-item navItem">
            <a class="nav-link btns" href="homepage.php"><i class="fas fa-home"></i>Home</a>
          </li>
          <?php
          if(isset($_SESSION["adminEmail"]) || isset($_SESSION["teacherId"]) || isset($_SESSION["studentId"])){ ?>
            <li class="nav-item navItem">
              <a class="nav-link btns" href="logout.php" onclick="alert('Are you sure you want to log out?')"><i class="fas fa-sign-out-alt"></i>logout</a>
            </li>
            
          <?php }
          else{ ?>
            <li class="nav-item dropdown navItem">
              <a class="nav-link btns dropdown-toggle" data-toggle="dropdown" href="#"href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
              <ul class="dropdown-menu dropdowns">
                <li class="adminBtn"><a href="#">Admin</a></li>
                <li class="teacherBtn"><a href="#">Teacher</a></li>
                <li class="studentBtn"><a href="#">Student</a></li>
              </ul>
            </li>
          <?php } ?>
          <li class="nav-item navItem">
            <a class="nav-link btns" <?php 
            if(isset($_SESSION["adminEmail"])) { ?> href="adminPanel.php"><i class="fas fa-pen"></i>adminPanel</a>
          <?php } 
              else if(isset($_SESSION["teacherId"])){ ?> href="courses.php" ><i class="fas fa-pen"></i>teacherPanel</a>
              <?php } 
              else if(isset($_SESSION["studentId"])){ ?> href="give_feedback.php"><i class="fas fa-pen"></i>studentPanel</a> 
              <?php } 
              else{ ?> href="#" ><i class="fas fa-pen"></i>panels</a> <?php } ?>
          </li>
          <li class="nav-item navItem">
            <a class="nav-link btns" href="contact.php"><i class="fa fa-phone fa-fw"></i>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>