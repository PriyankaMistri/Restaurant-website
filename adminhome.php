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
<section>
<script>
var images =["slide11.jpg",
             "slide21.jpg",
             "slide3.jpg",
             "slide4.jpg",
             "slide51.jpg",
             "slide61.jpg"
];
var i=0;

function slides(){
document.getElementById("slideimage").src=images[i];
if(i<(images.length-1))
i++;
else
i=0;

}

setInterval(slides,2000)




</script>
</section>

<section>
<div class="slideshow">
<img src="slide11.jpg" alt="slide11.jpg" id="slideimage">
</div>
<div class="parallax">
</div>
<div class="ourstory">
Discover
</div>
<div class="p">
<img src="slide212.jpg" style="width:1503px;height:400px"; align="right"/>

<div class="p1"><h3>

 The basic of Food lies in hand of the maker and its the story of my life as a chef and a entreprenuer.The ideas emerge from the trash and continues to the very end of the line of chain.</h3>
 </div>
 
</div>
</section>
<section>
<div class="parallax1">
<div class="visionandmission"> <h1> VISION </h1> 
<h3> Provide experiences that are authentically local, in hotels and resorts of unrivalled presence, with service that is truly engaging.</h3>
<h1> MISSION </h1>
<h3> Turning moments into memories for our guests </h3>

</div>
</div>
</section>
<hr size="5px" color="black">
<section>
<div class="parallax2">
<div class="speciality"> <h1>  Our Speciality </h1>
<h3> Live Kitchen and Different types of speciality dishes from all over the world to full fill the hunger and pallet of Foodies.</h3>
</div>
</div>
</section>
<hr size="5px" color="black">
<section>
<div class="parallax3">
<div class="location"> <h1> Location </h1>
<p><h3> It's the center of the city which connects three national highway to a single spot
</h3>
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d235.67230633385714!2d74.72607005847382!3d19.074423056286204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb0fbb772ada5%3A0xc59ea250f286cccc!2sHotel+Devkar+Satyanarayan+Palace!5e0!3m2!1sen!2sin!4v1559291340502!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" align="right" allowfullscreen></iframe></p>
</div>
</div>
</section>

</body>
</html>
