<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Qupper</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/v_quipper.css" type="text/css" media="screen"/>
</head>

<body>
  <div id="wrapper">

    <div id="left">
      <h1>Welcome to Quipper.</h1>
      <p>
        Find out what's happening, right now, with the people
        and organizations you care about.
      </p>
    </div>

    <div id="right">
        <div class="signin">
            <form id="signIn" action="#">
                <input type="text" id="signInName" name="signInName" value="Username or email"/>
                <input type="text" id="signInPasswd" name="signInPasswd" value="Password" />
                <input type="submit" id="btnSignIn" name="btnSignIn" value="Sign in" />
            </form>
        </div>

        <div class="signup">
            <p><strong class="pstrong">New to Quipper?</strong> Sign up</p>
            <hr>
            <form id="signUp" action="#">
                <input type="text"   id="signUpName"   name="signUpName"   value="Full name"/>
                <input type="text"   id="signUpEmail"  name="signUpEmail"  value="Email"/>
                <input type="text"   id="signUpPasswd" name="signUpPasswd" value="Password" />
                <input type="submit" id="btnSignUp"    name="btnSignUp"    value="Sign up for Quipper" />
            </form>
        </div>
    </div>

  </div> <!-- wrapper -->
</body>
</html>
