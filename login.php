<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Ghar ka khana</title>
	 <link rel="icon" type="image/png" href="img/m.png">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!----for font --->
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<script src="js/script.js"></script>
<!-- wow.js to animate the content -->
<script src="js/wow.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/1.jpg');">
			<div class="overlay"></div>
		</div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:100px; margin-top: -7px;"
                     src="img/m.png" class="navbar_logo_size ">
            </a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a href="main.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								 
										</ul>
				<ul class="nav navbar-nav navbar-right"><li class="active"><a href="ml.php">LogOut</a></li></ul>	
		</div>
    </div>
</nav>
<!-- making form -->
<
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-5">
			<h1 class="form_setting1 animated slideInDown delay-1s">Login</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-4">
			<div class="card text-center form_setting setting_card">
  <div class="card-body">
    <form method="POST" action="#">
  <div class="form-group">
    <label for="username1" class="text_change4">User Name</label>
    <input type="text" class="form-control" id="username1"  name="username" placeholder="Enter your name" required="required">
  </div>
  <div class="form-group">
    <label for="InputPassword1" class="text_change4">Password</label>
    <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password" required="required">
  </div>
	<button type="submit" class="btn btn-primary btn-block"  name="submit">Submit</button>
	<small ><a   href="registration.php">Don't have account?Sign up here</a> 
  </small>
</form>

  </div>
</div>
		</div>
	</div>
</div>

</header>


	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
<!-- php work  -->
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'gharkakhana');
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql= "SELECT * FROM registration WHERE username='$username' AND password= '$password' ";
  $r= mysqli_query($conn,$sql);
  if(mysqli_num_rows($r)>0){
     echo"Successfully";
     header("location:tt.php");
  }


}
?>

