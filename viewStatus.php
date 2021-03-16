<html>
<head><link rel="stylesheet" href="reservation.css">
</head>
<body>
<?php
session_start();

?>
<div class="bg-img">
<h1 class="title"> Reservation Status </h1>

</body>
</html>
<?php

require("dbutil.php");
$sql="select * from hotel_reservation where name='".$_SESSION["username"]."'";

$res = executeQuery($sql);

echo "<table border=1  align=center width=800>";
echo "<tr bgcolor=orange><th>Date <th>Time<th>Event<th>Status";
while($row = mysqli_fetch_array($res))
{

echo "<tr style='color:white;'><td>". $row["date"] ."<td>  ".$row["time"]."   <td>".$row["reservationtype"]." <td> ". $row["status"];

}

echo "</table>";

?>