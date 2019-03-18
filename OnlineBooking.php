<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){
$sql = "INSERT INTO booking (Customer_Name, Email, IC, Phone_Number, Gender, Booking_Date, Number_of_Guest, Time)
VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["icnumber"]."', '".$_POST["phone"]."','".$_POST["gender"]."','".$_POST["date"]."', '".$_POST["numberOFGuests"]."', '".$_POST["time"]."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title>Essential Beauty House</title>
	<link rel="short icon" type="image/png" href="image/facial-icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet" >
	<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

html, body{
	height: 100%;
	width: 100%;
	font-family: 'Poppins', sans-serif;
	color: #222;
}

input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.navbar{
	padding: .8rem;
}
.navbar-nav li{
	padding-right: 10px;
}
.nav-link{
	font-size: 1.1em !important;
}
.carousel-inner img{
	width: 100%;
	height: 100%;
}
.carousel-caption{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
}
.carousel-caption h1{
	font-size: 500%;
	text-transform: uppercase;
	text-shadow: 1px 1px 15px #000;
}
.carousel-caption p{
	font-size: 150%;
	font-weight: 100%;
	text-shadow: 1px 1px 1px 10px #000;
	padding-bottom: 1rem;
}
.btn-primary{
	background-color: #6648b1;
	border: 1px solid #6648b1;
}
.btn-primary:hover{
	background-color: #563d7c;
	border: 1px solid #563d7c;
}
.jumbotron{
	padding: 1rem;
	border-radius: 0;
}
.jumbotron h2{
	text-align: center;
}
.padding{
	padding-bottom: 1rem;
}
.fa-folder-open{
	color: #e54d26;
}
.fa-file{
	color: #563d7c;
}
.fa-css3{
	color: #2163af;
}
.fa-folder-open, .fa-file, .fa-css3{
	font-size: 4rem;
	margin: 1rem;
}
.fun{
	width: 100%;
	margin-bottom: 2rem;
}
.gif{
	max-width: 100%;
}
.social a{
	font-size: 4.5rem;
	padding: 3rem;
}
.fa-facebook{
	color: #3b5998;
}
.fa-google-plus-g{
	color: #dd4b39;
}
.fa-instagram{
	color: #517fa4;
}
.fa-youtube{
	color: #bb0000;
}
.fa-facebook:hover,
.fa-google-plus-g:hover,
.fa-instagram:hover,
.fa-youtube:hover{
	color: #d5d5d5;
}
footer{
	background-color: #3f3f3f;
	color: #d5d5d5;
	padding-top: 2rem;
	margin-top: -2rem;
}
hr.light{
	border-top: 1px solid #d5d5d5;
	width: 75%;
	margin-top: .8rem;
	margin-bottom: 1rem;
}
footer a{
	color: #d5d5d5;
}
hr.light-100{
	border-top: 1px solid #d5d5d5;
	width: 100%;
	margin-top: .8rem;
	margin-bottom: 1rem;
}

/*--media queries--*/
@media (max-width: 992px){
	.social a{
		font-size: 4rem;
		padding: 2rem;
	}
}
@media (max-width: 768px){
.carousel-caption{
	top: 45%;
}
.carousel-caption h1{
	font-size: 350%;
}
.carousel-caption p{
	font-size: 140%;
	font-weight: 100%;
	padding-bottom: 2rem;
}
.carousel-caption .btn{
	font-size: 95%;
	padding: 8px 14px;
}
.display-4{file:///C:/Users/jazzkongmenxuan/Desktop/FYP%20website/Login.html
	font-size: 200%;
}
.social a{
	font-size: 2.5rem;
	padding: 1.2rem;
}
}

@media (max-width: 576px){
.carousel-caption{
	top: 40%;
}
.carousel-caption h1{
	font-size: 250%;
}
.carousel-caption p{
	font-size: 110%;
}
.carousel-caption .btn{
	font-size: 90%;
	padding: 4px 8px;
}
.carousel-indicators{
	display: none;
}
.social a{
	font-size: 2rem;
	padding: .7rem;
}
}

</style>

</head>
<body>

<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="home.html">Essential Beauty House</a> 
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="home.html">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="PRODUCT&SERVICE.html">PRODUCT&SERVICE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="TREATMENT.html">TREATMENT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="ABOUTUS.html">ABOUT US</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="BEAMEMBER.html">BE A MEMBER</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="OnlineBooking.php">ONLINE BOOKING</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Login.php">LOG IN</a>
			</li>
		</ul>
	</div>
</div>	
</nav>
<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<h2 class="lead">ONLINE BOOKING</h2>
			<form action="" method="POST">
					<fieldset>
					<legend>Personal Details:</legend>
					<label for="name">Name:</label><input type="text" name="username" id="name" required autofocus placeholder="Your name" title="Please enter in more than three letters">
					<label for="email">Email:</label><input type="text" name="email" id="email" required placeholder="Your Email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter in a valid email address">
					<label for="phone">IC Number:</label><input type="text" name="icnumber" id="icnumber" required placeholder="Please enter in your IC number" pattern="[0-9]{6} [0-9]{2} [0-9]{4}" title="Please enter in a IC number in this format:###### ## ####"><br><br>
					<label for="phone">Phone:</label><input type="text" name="phone" id="phone" required placeholder="Please enter in your phone number">
					<label for="state">Gender:</label><select name="gender" required>
						<option value=""></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					</fieldset>
					<br>
					<fieldset>
						<legend>Booking Detail:</legend>
						<label for="date">Booking Date:</label><input id="date" type="date" name="date" min="2018-01-01" required="">
						<label for="time">Time:</label><input id="time" type="number" name="time" min="1030" max="1730" required="">
						<br><br><label for="numberOFGuests">Number of Guests:</label><input id="numberOFGuests" type="number" name="numberOFGuests" min="1" max="3" required="">
						<br>
						<br>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
						<button type="submit" class="btn btn-outline-secondary btn-lg" name="save">Confirm</button>
						</div>
					</fieldset>
			</form>
	</div>
</div>
</div>

<!--Footer-->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-4">
		<h1>Essential Beauty House</h1>
		<hr class="light">
		<p>016-9326817</p>
		<p>essentailbeautyhouse@gmail.com</p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5>Our Hours</h5>
		<hr class="light">
		<p>Monday-Sunday: 10:30am - 7:00pm</p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5>Our Location</h5>
		<hr class="light">
		<p>P8-1, Jln. Dato Poo Choy,</p>
		<p>28700 Bentong, Pahang.</p>
	</div>
	<div class="col-12">
		<hr class="light-100">
		<h5>&copy; essentialbeautyhouse.com</h5>
	</div>
</div>
</div>
</footer>

</body>
</html>