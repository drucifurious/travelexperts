<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<?php
include "dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=100%">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>
	<link rel="stylesheet" href="assets/navigation-round.css">
	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/Fstyle.css" />
	<link rel="stylesheet" href="css/logo.css">
	<link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/button.css">

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
<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">


</head>

<body>
	<header>

	<nav class="menu-navigation-round">
		<img class="logo" src="img/TElogo.png" alt="">
		<a href="home.php">Home</a>
		<a href="packages.php">Packages</a>
		<a href="contact.php" class="selected">Contact</a>
		<a href="About.html">About</a>

	</nav>
	<script>
		$(function () {

			var menu = $('.menu-navigation-round');

			menu.slicknav();

			// Mark the clicked item as selected

			menu.on('click', 'a', function () {
				var a = $(this);

				a.siblings().removeClass('selected');
				a.addClass('selected');
			});
		});
	</script>
	<br>
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

  <?php
			if (!isset($_SESSION['id'])) {
				echo '<form action="includes/login.inc.php" method="post">
					<input type="text" class="drew" name="mailuid" placeholder="E-mail/Username">
					<input class ="drew" type="password" name="pwd" placeholder="Password">
					<button class="myButton" type="submit" name="login-submit">Login</button>

				 <a class="myButton" href="signup.php" class="header-signup">Signup</a> 	</form>'  ;
			}
			else if (isset($_SESSION['id'])) {
				echo '<form action="includes/logout.inc.php" method="post">
					<button class ="myButton" type="submit" name="login-submit">Logout</button>
				</form>';
			}
			?>
		</div>
    <br>
	</header>
	<Div class="webpage">
<h3 >Reach out to one of our agents for your pleasurable trips.</h3>
<?php
include_once("dbconn.php");
$query = "SELECT * FROM agents";
//Loop through the database to pull agent properties in card format using bootstrap//
$results = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
?>
<div class="row card-deck cardpadding">
<?php
while( $record = mysqli_fetch_assoc($results) ) {
?>
<div class="col-lg-4 col-sm-6 mb-4">
<div class="card">
<a href="#"><img class="card-img-top" src="<?php echo $record['AgtImage']; ?>" alt=""></a>
<div class="card-body">
<h5 class="card-title"><?php echo $record['AgtFirstName'] . " " . $record['AgtLastName'] ; ?></h5>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item"><?php echo $record['AgtBusPhone']; ?></li>
<li class="list-group-item"><?php echo $record['AgtEmail']; ?></li>
<li class="list-group-item"><?php echo $record['AgtPosition']; ?></li>
</ul>
</div>
</div>
<?php
}
?>
</div>
<div class="address">
		               <h4>TechCareers Program<br></h4>
		               <h4>10230 Jasper Avenue,<br></h4>
		               <h4>Edmonton, AB<br></h4>
		               <h4>T5J 5A3</h4>
									 <h4>Office Line: + (1)780-444-555<br></h4>
									 <h4>Email: contact@travelexperts.ca</h4>
               <iframe width="500" height="400" frameborder="0"  src="https://www.bing.com/maps/embed?h=400&w=500&cp=52.8378~-110.156&lvl=11&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
               </iframe>
               <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0; border-radius: 55px; ">
                   <a id="largeMapLink"  href="https://www.bing.com/maps?cp=53.541531~-113.496437&amp;sty=r&amp;lvl=11&amp;FORM=MBEDLD" target="_blank">View Larger Map</a> &nbsp; | &nbsp;
                   <a id="dirMapLink" href="https://www.bing.com/maps/directions?cp=53.541531~-113.496437&amp;sty=r&amp;lvl=5&amp;rtp=~pos.53.541531_-113.496437____&amp;FORM=MBEDLD" target="_blank">Get Directions</a>
									 -->
							 </div>
							 </div>
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
