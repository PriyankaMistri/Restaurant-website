<?php 
include_once('condb.php');
$query="select * from register";
$result=mysql_query($query);
?>
<html>
     <title>
	     <head> Fetch Data From Database</head>
	</title>
<body>
    <table align ="center" border"1px" style="widht:600px; line-height:40px;">
	<tr>
	    <th> colspan="5"<h2>Student Record</h2></th>
	</tr>
	<t>
		
		<th>id</th>
		<th>username</th>
		<th>email</th>
		<th>password</th>
		<th>phoneno</th>
	</t>
	<?php 
	   while($rows=mysql_fetch_assoc($result))
	   {
	   ?>
	   <tr>
	         <td><?php echo $rows['id'];?></td>
			 <td><?php echo $rows['username'];?></td>
			 <td><?php echo $rows['email'];?></td>
			 <td><?php echo $rows['password'];?></td>
			 <td><?php echo $rows['phoneno'];?></td>
		</tr>
		<?php
		?>
	   
	   
	   }
	
	</table>
	</body>
	</html>