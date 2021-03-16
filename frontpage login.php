<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
input[type="submit"]
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type="submit"]:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="header">
  	<h2>LOGIN</h2>
  </div>

 
<form method="post" >
  	
  <div class="imgcontainer">
    
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="unm" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <input type="submit" name="submit">
   <label>
    <!--  <input type="checkbox" checked="checked" name="remember"> Remember me  -->
    </label> 
  </div>

  <div class="container" style="background-color:#f1f1f1">
 <!--   <button type="button" class="cancelbtn">Cancel</button> -->
  <span class="psw"> <!--Forgot <a href="#">password?</a> --></span> 
  </div>
</form>

</body>
</html>
<?php
session_start();
require("dbutil.php");

if(isset($_POST['submit']))
{
$uname=$_POST['unm'];
$pass=$_POST['pass'];

if($uname=="admin" && $pass=="admin")
header("location:adminhome.php");
else
{
$sql="select username,password,email from users where username='$uname' and password='$pass'";
$res = executeQuery($sql);
if($row = mysqli_fetch_array($res))
{
echo "<script>alert('Welcome')</script>";
$_SESSION["username"]=$uname;
$_SESSION["email"]=$row[2];
header("location:hotelsite.php");
}
else
 echo "<script>alert('Sorry')</script>";
}
}

?>


