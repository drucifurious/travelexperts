<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>
  <link rel="stylesheet" href="assets/navigation-round.css">
	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="css/fstyle.css" />
	<link rel="stylesheet" href="css/logo.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>



<link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/navigation-round.css">
<link rel="stylesheet" href="assets/slicknav/slicknav.min.css">
<link rel="stylesheet" href="assets/icons.css">
<link rel="stylesheet" href="carousel.css">
<body>


<header>

<nav class="menu-navigation-round" href="index.php">
<img class="logo" src="img/TElogo.png" alt="">
<a href="home.php" class ="selected">Home</a>
<a href="packages.php">Packages</a>
<a href="contact.php">Contact</a>
<a href="#">About</a>

</nav>
<div class="welcometimer" font-family="">
<?php
date_default_timezone_set('America/Edmonton');
$date = date('H:i:s');
if($date > '00:00:01' && $date <= '11:59:59'){
echo ('<h1 style="font-size:60px">Good Morning</h1>');
} else if($date > '12:00:01' && $date <= '18:00:00'){
print ('<h1 style="font-size:60px">Good Afternoon</h1>');
} else if($date > '18:00:01' && $date <= '23:59:59'){
print ('<h1 style="font-size:60px">Good Evening</h1>');
}
?>
  </div>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/slicknav/jquery.slicknav.min.js"></script>

	<script>

	$(function(){

			var menu = $('.menu-navigation-round');

			menu.slicknav();

			// Mark the clicked item as selected

			menu.on('click', 'a', function(){
					var a = $(this);

					a.siblings().removeClass('selected');
					a.addClass('selected');
			});
	});

	</script>
	<div class="header-login">

	<?php
			if (!isset($_SESSION['id'])) {
				echo '<form action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="E-mail/Username">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php" class="header-signup">Signup</a>';
			}
			else if (isset($_SESSION['id'])) {
				echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="login-submit">Logout</button>
				</form>';
			}
			?>
		</div>
	</header>

	<div class="container-fluid">


  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner carousel">


		<div class="item active">
			<div class="overlay" id="kingpin"><h1>Welcome to Travel Experts</h1></div>
		<img src="img/one1.jpg" alt="Los Angeles" style="width:100%;">
    </div>


		  <div class="item">
				<div class="overlay" id="kingpin"><h1>Great packages</h1></div>
        <img src="img/two2.jpg" alt="Chicago" style="width:100%;">
				<div class="carousel-content">


				</div>

			</div>

      <div class="item">
					<div class="overlay" id="kingpin"><h1>Catering to your needs</h1></div>
				<img src="img/three3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->
<script type="text/javascript">
$('.carousel').carousel({
interval: 2000
})
</script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<footer>
	<div class="social-container">
	<ul class="social-icons">
    <li><a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
    <li><a href="http://www.twitter.com"target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="http://www.facebook.com"target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="http://www.youtube.com"target="_blank"><i class="fa fa-youtube"></i></a></li>
	</ul>
</footer>
</html>
