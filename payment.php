<?php
include('cart.php');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "essential_beauty_house";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){
$sql = "INSERT INTO payment (name, credit_card_number, expiration, cvv, balance, payment_type)
VALUES ('".$_POST["name"]."','".$_POST["cc-number"]."','".$_POST["expiry"]."', '".$_POST["cvv"]."', '".$_POST["balance"]."', 'Credit/Debit Card')";

if (mysqli_query($conn, $sql)) {
    echo "Payment Success!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1">
  <title>Essential Beauty House / Payment</title>
  <link rel="short icon" type="image/png" href="image/facial-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet" >
  <style type="text/css">
  <style>
  @import url("https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro:300,400,600");
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, #FEEAFA, rgba(108, 145, 191, 0.2));
  font-family: "Source Sans Pro";
}

.wrapper {
  width: 100%;
  height: 100%;
  background: white;
  display: flex;
  justify-content: center;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
}

.container {
  width: 50%;
}
.container > * {
  margin: 30px 0;
}

.tabs {
  margin: 40px 0;
}
.tabs ul {
  display: flex;
  justify-content: space-between;
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.tabs li {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.18em;
}
.tabs .active {
  position: relative;
}
.tabs .active:before {
  position: absolute;
  content: '';
  width: 100%;
  height: 1px;
  background: #7072A0;
  bottom: -2px;
}

.pay-type {
  display: flex;
}
.pay-type label {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.18em;
  position: relative;
}
.pay-type label:before, .pay-type label:after {
  position: absolute;
  content: '';
}
.pay-type label:before {
  width: 12px;
  height: 12px;
  border: 1px solid #7072A0;
  border-radius: 50%;
  left: -20px;
  top: 1px;
}
.pay-type label:after {
  width: 10px;
  height: 10px;
  background: #7072A0;
  top: 3px;
  left: -18px;
  border-radius: 50%;
  opacity: 0;
}
.pay-type label:nth-child(2) {
  margin-right: 20px;
}
.pay-type .payment {
  visibility: hidden;
}
.pay-type .payment:checked + label:after {
  opacity: 1;
}

form {
  width: 100%;
}
form > * {
  display: block;
}
form label {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.18em;
}
form input {
  width: 100%;
  border: 0;
  border-bottom: 1px solid rgba(112, 114, 160, 0.5);
  margin: 10px 0;
  margin-bottom: 30px;
  outline: 0;
  color: #7072A0;
  font-size: 13px;
  transition: 0.5s all ease;
  letter-spacing: 0.1em;
}
form input:focus {
  border-bottom: 1px solid #7072A0;
  transition: 0.5s all ease;
}

.validation {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.validation > * {
  width: 40%;
}

.button {
  background: #7072A0;
  width: 120px;
  height: 30px;
  border: none;
  color: white;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  transition: 0.5s all ease;
  cursor: pointer;
}
.button:hover {
  opacity: 0.5;
  transform: scale(0.98);
  transition: 0.5s all ease;
}
</style>
</head>
<body>

<div class="wrapper">
  <div class="container">
    <div class="tabs">
      <ul>
        <li><a class="nav-link" href="cart.php">Essential Beauty House</a></li>
        <li class="active">Payment</li>
      </ul>
    </div>
    
    <form action="" method="post">
    <div>
      <input type="text" name="balance" style="font-size: 200%;" value="$ <?php echo number_format($total, 2);?>">
    </div>

    <div class="pay-type">
      <input class="payment" id="c-card" type="checkbox" name="c-card" checked=true>
      <label for="c-card">Credit/Debit Card</label>
    </div>
  
     <label for="name">Name</label>
     <input id="name" type="text" name="name">
      
      <label for="cc-number">Credit Card Number</label>
      <input id="cc-number" type="text" name="cc-number">

      <div class="validation">
      <div>
        <label for="expiry">Expiration</label>
        <input id="expiry" type="text" name="expiry">
      </div>
        <div>
      <label for="cvv">CVV</label>
      <input id="cvv" type="text" name="cvv">
          </div>
        </div>
      <button type="submit" class="button" name="save">Submit</button>
    </form>
  </div>
</div>

</body>
</html>