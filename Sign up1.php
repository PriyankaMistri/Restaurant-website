<!-- <?php include ("server.php"); ?> -->
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
  
  
  <!--	<?php include('errors.php'); ?> -->
	
	<div class="input-group">
	 <label for="username">Username</label>
     <input type="text" placeholder="username" name="username" required>
    <br></br>
	
  	<div class="input-group">
	 <label for="email">Email</label>
     <input type="emial" placeholder="Enter Email" name="email"  required>
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
if(isset($_POST['reg_user']))
{


$conn=new mysqli("localhost","root","","newhotel");
if($conn->connect_error)
	die("Connection Failed".connect_error);

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password_1'];
$confirm_password=$_POST['password_2'];

$v = checkreg($name,$email,$password,$confirm_password);


if($v==true)
{
/*$sql="insert into register(username,email,password_1,password_2) values('$name','$email','$password','$confirm_password')";

$retval=$conn->query($sql);
if(!$retval)
    die('could not insert data'.$conn->connect_error());
else
{
    echo "<script>alert('data inserted sucessfuly')</script>";
	header("location:index.php");
}*/

}
}
?>