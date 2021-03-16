<html>
<head><link rel="stylesheet" href="myprojectsheet.css">

<head>
<body>

<div class="menu">
</div>
<div class="main"> Admin Dashboard 
</div>
<ul>
<div class="pull-left">
<li class="dropdown">

<a href="showBookings.php" class="dropbtn">BOOKINGS</a>
</li> 
<li><a href="showUsers.php">USERS</a></li>

<li><a href="logout.php">LOGOUT</a></li>
</div>
</ul>

<div>

 	<h1><center>List of Customers </center></h1>
 <?php
 require("dbutil.php");
 $q="select A.username,B.lastname, A.email,B.phone from users A, hotel_reservation B where A.email=B.email";
 $res = executeQuery($q); 

echo "<table border=1  align=center width=800>";
echo "<tr bgcolor=orange><th>Firstname <th>Lastname<th>Email<th>Phone";
while($row = mysqli_fetch_array($res))
{

echo "<tr><td>". $row[0] ."<td>  ".$row[1]."   <td>".$row[2]." <td> ". $row[3];

}

echo "</table>";

?>
 </div>
 


</body>
</html>
