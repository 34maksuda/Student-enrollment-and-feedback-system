<form id="adminLoginForm"> 
  <div id="lfHead">
    <h4>Login Form</h4>
  </div>
  <div id="inptWrapper">
    <div class="invalidLogin"></div>
    <input class="linputs" type="email" name="email" placeholder="your email address" required>
    <br>
    <input class="linputs" type="password" name="password" placeholder="password" required>
    <br>
    <input class="lsubmit" type="submit" value="Login">
    <br>
    <input class="ml-10" type="checkbox"><span id="me">Remember me</span>
    <a id="frgttnAct" href="#">Forgotten password?</a>
  </div>
  <a id="CreateAct" href="adminRegistration.php">Create New Account</a>
</form>
<form id="teacherLoginForm"> 
  <div id="lfHead">
    <h4>Login Form</h4>
  </div>
  <div id="inptWrapper">
    <div class="invalidLogin"></div>
    <input class="linputs" type="text" name="TID" placeholder="give your teacher ID" required>
    <br>
    <input class="linputs" type="password" name="password" placeholder="password" required>
    <br>
    <input class="lsubmit" type="submit" value="Login">
    <br>
    <input class="ml-10" type="checkbox"><span id="me">Remember me</span>
    <a id="frgttnAct" href="#">Forgotten password?</a>
  </div>
  <a id="CreateAct" href="teacherRegistration.php">Create New Account</a>
</form>
<form id="studentLoginForm"> 
  <div id="lfHead">
    <h4>Login Form</h4>
  </div>
  <div id="inptWrapper">
    <div class="invalidLogin"></div>
    <input class="linputs" type="text" name="SID" placeholder="Give Your Student Id" required>
    <br>
    <input class="linputs" type="password" name="password" placeholder="password" required>
    <br>
    <input class="lsubmit" type="submit" value="Login">
    <br>
    <input class="ml-10" type="checkbox"><span id="me">Remember me</span>
    <a id="frgttnAct" href="#">Forgotten password?</a>
  </div>
  <a id="CreateAct" href="studentRegistration.php">Create New Account</a>
</form>