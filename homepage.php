<?php
session_start();
require_once("header.php");
?>
<body>
   <?php
    require_once("navbar.php");
    if(isset($_COOKIE['adRegS'])){ ?>
      <span id="successful">Registration successful!!</span>
    <?php setcookie("adRegS","rtyuy",time()-(30));}
    if(isset($_COOKIE['notLoggedIn'])){ ?>
      <span id="plsLogIn">Please Log In First!!</span>
    <?php setcookie("notLoggedIn","asdfghj",time()-10);}
    require_once("loginForm.php");
    ?>
  <section id="section1">
    <div id="animatingImage">
      <div class="row">
        <!--<div class="col">
          <img id="img1" class="img-fluid" src="css/images/img2.jpg">
        </div>
        <div class="col">
          <img id="img2" class="img-fluid" src="css/images/img1.jpg">
        </div>
        <div class="col">
          <img id="img3" class="img-fluid" src="css/images/img5.jpg">
        </div>
      </div> -->
    </div>
    <div class="container about">
      <h4>About Us</h4>
      <p class="text-justify">
      In a university Enrollment is a procedure where a university give out forms that describes fees to be paid which will allow students to appear in a/some exams. In HSTU one student may want to enroll for a whole semester or particular course(s) may because he/she has failed in previously or want to improve his/her result(s). On the other hand Student feedback is a way that lets the students share their words about a course he/she is taking. It enables the to judge the teachers’ teaching style, course materials, etc. and share them with the teachers anonymously. This way the teacher can discover more paths to help the students with what they need.<br><br>

      Our website is here to make these discussed procedures pen/paper free and sustainable. This is a website for online enrollment and feedback in a university (currently/initially it is modified for HSTU). Here, the admin can add the information about teachers, students and create and edit enrollment forms, for the students to fill in and enroll for certain courses, as per his/her wish. A teacher can add his courses and get the feedback that the students have shared.</p>
    </div>
    <?php
    require_once("footer.php");
    ?>
  </section>
</body>