<html>
<head><link rel="stylesheet" href="myprojectsheet.css">

<head>
<body>

<div class="menu">
</div>
<div class="main"> Thank You !
</div>

 	
 <?php
session_start();

unset($_SESSION["username"]);

unset($_SESSION["email"]);

session_destroy();
?>

<h2>Logged out successfully !! </h2>
<h2><a href="frontpage login.php">Click here to login again</a> </h2>
 </div>
 


</body>
</html>
