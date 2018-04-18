<html>
<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	 <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
  <script src="http://localhost:8080/bootstrap/saurabh/jquery.min.js" ></script>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	 <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
</body>
</html>