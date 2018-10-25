<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <!-- for the links file -->
  <link rel="stylesheet" href="registerV2.css" type="text/css">
</head>
  <body>
    <h2>Register Form</h2><br></hr>
    <div class="container">
      <form class="register" name="register" action="register.php" method="post">
        <fieldset>
          <legend>Account Register</legend>

          <div class="row">
            <div class="col-25">
              <label for="fname"><span>First Name:<span class="required"> *</span></label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname"><span>Last Name:<span class="required"> *</span></span></label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="pass"><span>Password:<span class="required"> *</span></label>
            </div>
            <div class="col-75">
              <input type="password" id="pass" name="password"
                      placeholder="at least 6 Characters" required pattern="\S{6,}">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="pass"><span>Confirm-Password:<span class="required"> *</span></label>
            </div>
            <div class="col-75">
              <input type="password" id="confpass" name="password"
                       required >
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="pass"><span>E-mail:</span></label>
            </div>
            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="example@example.com"
                       required pattern="\S{6,}">
            </div>
          </div>

          <div class="row">
            <div class="col-25 ">
              <label for="date"><span>Date of Birth:</span></label>
            </div>

            <div class="col-25 date-number-field">
              <div  >
                  <input type="number" class="date-number-field" name="day" min="1" max="31" pattern= "dd" maxlength="2" />
              </div>
              <div>
                  <input type="number" class="date-number-field" name="month" min="1" max="12" pattern="mm" maxlength="2"/>
              </div>
              <div>
                  <input type="number" class="date-number-field" name="year" min="1930" max="2001" pattern="jjjj" maxlength="71" />
              </div>

            </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="gender"><span>Gender:</span></label>
          </div>
          <div class="col-15 radbtm">
            <input type="radio" name="gender" value="female">   Female
          </div>
          <div class="col-15 radbtm">
            <input type="radio" name="gender" value="male">   Male<br>
          </div>
        </div>


        <div class="row">
          <div class="col-75">
            <Input type="button" class="reset" name= "reset" value="Clear">
            <input type="button" class="submit" name="submit" value="Register">
            <div class="link"><a href="login.php">   Go Back </a></div>
          </div>
        </div>

        </fieldset>
      </form>
    </div>

  </body>
</html>
