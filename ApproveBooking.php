
<html>
<head>
    
    <title>Table book Successful </title>

    
</head>
<body>
		    
            	<h1><center>List of New Bookings </center></h1>
<br><br>


 <?php
 require("dbutil.php");
 $q="update hotel_reservation set status='Approved' where id=".$_REQUEST["id"];
 $res = executeQuery($q); 

echo "Done";
header("location:showBookings.php");

?>
                
            
	</body>
</html>