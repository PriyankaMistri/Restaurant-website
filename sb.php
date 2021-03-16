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

 	<h1><center>List of New Bookings </center></h1>
 <?php
 require("dbutil.php");
 $q="select * from hotel_reservation where status='New'";
 $res = executeQuery($q); 

echo "<table border=1  align=center width=800>";
echo "<tr bgcolor=orange><th>Booking id<th>Name<th>Lastname<th>Date<th>Time<th>Guests<th>Type";
while($row = mysqli_fetch_array($res))
{

echo "<tr><td>". $row["id"] ."<td>  ".$row["name"]."   <td>".$row["lastname"]." <td> ". $row["date"]." <td>  ".$row["time"]." <td>  ".$row["guest"]." <td>  ".$row["reservationtype"];

}

echo "</table>";

?>
 </div>
 


</body>
</html>
