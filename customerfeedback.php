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
$sql = "INSERT INTO feedback (Feedback_Detail, Name, Email) VALUES ('".$_POST["message"]."','".$_POST["name"]."','".$_POST["email"]."')";

if (mysqli_query($conn, $sql)) {
    echo "Your feedback submit successfully";
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
	<title>Essential Beauty House | Customer Feedback</title>
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
.navbar{
	padding: .8rem;
}
.navbar-nav li{
	padding-right: 10px;
}
.nav-link{
	font-size: 1.1em !important;
}
.contact-form{ 
	margin-top:15px;
	margin-bottom: 5rem;
}
.contact-form .textarea{ 
	min-height:220px; 
	resize:none;
}
.form-control{ 
	box-shadow:none; 
	border-color:#eee; 
	height:49px;
}
.form-control:focus{ 
	box-shadow:none; 
	border-color:#00b09c;
}
.form-control-feedback{ 
	line-height:50px;
}
.main-btn{ 
	background:#00b09c; 
	border-color:#00b09c; 
	color:#fff;
}
.main-btn:hover{ 
	background:#00a491;
	color:#fff;
}
.form-control-feedback {
line-height: 50px;
top: 0px;
}
footer{
	background-color: #3f3f3f;
	color: #d5d5d5;
	padding-top: 2rem;
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
			<li class="nav-item">
				<a class="nav-link" href="OnlineBooking.php">ONLINE BOOKING</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Login.php">LOG IN</a>
			</li>
		</ul>
	</div>
</div>	
</nav>

<!--Feedback Form-->
<div class="container">
	<div class="row">
		<form action="" method="POST" role="form" id="contact-form" class="contact-form">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right" name="save">Send a message</button>
                  </div>
                  </div>
                </form>
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