<?php
function  executeQuery($q)
{	
		$con=mysqli_connect ("localhost", "root","","reservation");
				
		$rows = mysqli_query ($con, $q) or die ("Cannot execute").mysql_error();
		
		mysqli_close ($con);
		
		return $rows;
}


?>