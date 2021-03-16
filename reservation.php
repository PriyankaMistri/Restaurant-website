<html>
<head><link rel="stylesheet" href="reservation.css">
</head>
<body>
<?php
session_start();

?>
<div class="bg-img">
<h1 class="title"> Reservation </h1>

<form action="" method="POST" class="container">

  
  	
<label for="name"><b>First name</b></label>
<input type="text"name="name" placeholder="name" required value="<?php  echo $_SESSION['username']; ?>" >
<br></br>
<label for="name"><b>Last name</b></label>
<input type="text"name="lastname" placeholder="lastname" required>
<br></br>
<label for="email"><b>Email</b></label>
<input type="text"name="email" placeholder="enter Email"  required  value="<?php  echo $_SESSION['email']; ?>">
<br></br>
<label for="phone"><b>Phone:</b></label>
<input type="number" name="phone" placeholder="phone no" required>
<br></br>
<label for="guest"><b>Number of guest:</b></label>
<input type="number" name="guest" placeholder="guest" required>
<br></br>
<label for="date"><b>Date Of Reservation:</b></label>
<input type="date" name="date" placeholder="date" required>
<br></br>
<label for="time"><b>Time:</b></label>
<input type="time" name="time" placeholder="time" required>
<br></br>
<label for="table"><b>Table Reservation:</b></label>
<select name=tablereservation>
<option> YES
<option> NO
</select>
<br></br>
<label for="type"><b>Reservation type:</b></label>
<select name=reservationtype>
<option> DINNER
<option> BIRTHDAY/ANNIVERSARY
<option> PRIVATE
<option> WEDDING
<option> CORPORATE
<option> OTHER
</select>
<br></br>
<label for="other"><b>If other please specify?</b></label>
<input type="text" name="specify" placeholder="specify" required>

<label for="request"><b>Any Special request?</b></label>
<input type="text" name="request" placeholder="request" required>
<div class="input-group">
<button type="submit" class="btn" name="btnsub">Submit</button>
</div>

<br></br>
<button type="submit" class="btn">Reset</button>
<br></br>

</form>
</body>
</html>
<?php
require("dbutil.php");

if(isset($_POST['btnsub']))
{
$firstname=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$numberofguest=$_POST['guest'];
$dateofreservation=$_POST['date'];
$time=$_POST['time'];
$tablereservation=$_POST['tablereservation'];
$reservationtype=$_POST['reservationtype'];
$ifanyotherpleasespecify=$_POST['specify'];
$anyspecialrequest=$_POST['request'];
$sql="insert into hotel_reservation(name,lastname,email,phone,guest,date,time,tablereservation,reservationtype,specify,request,status) values('$firstname','$lastname','$email', $phone,'$numberofguest','$dateofreservation','$time','$tablereservation','$reservationtype','$ifanyotherpleasespecify','$anyspecialrequest','New')";

$retval = executeQuery($sql);
echo $retval;

    echo "<script>alert('data inserted successfuly ')</script>";
   header("location:index1.php");

}
?>