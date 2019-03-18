<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Member_ID = mysqli_real_escape_string($db,$_POST['id']);
      $Member_Password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM member WHERE Member_ID = '$Member_ID' and Member_Password = '$Member_Password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

   if($count == 1) {
         $_SESSION['login_user'] = $Member_ID;
         
         header("location: member.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1">
  <title>Essential Beauty House | Member Login</title>
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
  background-image: url("image/facial-icon.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 20%;
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
.container{
  text-align: left;
}
.container h1{
  margin-top: 2.5%;
}
.well{
  width: 100%;
  margin-left: 110%;
  margin-top: 25%;
}
</style>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.html">Essential Beauty House</a> 
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Essential Beauty House <small><br>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="" method = "post" class="well">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter ID" required="">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                  </div>
                  <button type="submit" class="btn btn-default btn-block" style="background-color: #52be80; color: #fff;">Login</button> <button type="submit" class="btn btn-default btn-block"><a href="registration.php">Sign Up</a></button>
              </form>
          </div>
        </div>
      </div>
    </section>

</body>
</html>