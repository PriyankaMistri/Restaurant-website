
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>SIGN UP</h2>
  </div>
	<form action="" method="post">
  
	<div class="input-group">
	 <label for="username">Username</label>
     <input type="text" placeholder="username" name="username" required>
    <br></br>
	
  	<div class="input-group">
	 <label for="email">Email</label>
     <input type="email" placeholder="Enter Email" name="email"  required >
    <br></br>
  	  
  	<div class="input-group">
  	  <label for="password">Password</label>
	  <input type="password" placeholder="Enter Password" name="password_1" required>
  	<br></br>
	
	
  	<div class="input-group">
  	  <label for="password">Confirm password</label>
  	  <input type="password" placeholder="Confirm password" name="password_2" required>
      <br></br>
	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="frontpage login.php">Sign in</a>
  	</p>
	</div>
  </form>
</body>
</html>


<?php
session_start();
require("dbutil.php");
if(isset($_POST['reg_user']))
{
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password_1'];
$confirm_password=$_POST['password_2'];


if($password != $confirm_password)
echo "<script>alert('Password does not match Re-entered password')</script>";
else
{
$sql="insert into users(username,email,password) values('$name','$email','$password')";

$res  = executeQuery($sql);

echo $res;
$_SESSION["username"] = $name;
$_SESSION["email"] = $email;
echo "<script>alert('Welcome')</script>";
header("location:hotelsite.php");
}
 }
 
?>