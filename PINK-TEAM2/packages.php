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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>TravelExperts - Packages</title>
	<link rel="stylesheet" href="assets/navigation-round.css">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/dstyle.css" />
	<link rel="stylesheet" href="css/logo.css">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/slicknav/jquery.slicknav.min.js"></script>

<link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/navigation-round.css">
<link rel="stylesheet" href="assets/slicknav/slicknav.min.css">
<link rel="stylesheet" href="assets/icons.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/fstyle.css">
<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

	//jQuery functions to show travel package and scroll to bottom div

	$(document).ready(function(){
		$("#cari").click(function(){
			$("#cari1").show();
    		$('html, body').animate({
        	scrollTop: $("#cari1").offset().top}, 1000);
		});

		$("#hawi").click(function(){
			$("#hawi1").show();
    		$('html, body').animate({
        	scrollTop: $("#hawi1").offset().top}, 1000);
		});

		$("#thai").click(function(){
			$("#thai1").show();
    		$('html, body').animate({
        	scrollTop: $("#thai1").offset().top}, 1000);
		});

		$("#euro").click(function(){
			$("#euro1").show();
    		$('html, body').animate({
        	scrollTop: $("#euro1").offset().top}, 1000);
		});

		//jQuery functions to scroll to top of div

		$("#topper").click(function(){
			$('html, body').animate({
        scrollTop: $("body").offset().top}, 1000);
		});

		//jQuery function to hide query results

		$("#hider").click(function(){
    $('.gone').hide();
 		});
	});

</script>

</head>

<body>
<header>
	<nav class="menu-navigation-round">
		<img class="logo" src="img/TElogo.png" alt="">
			<a href="home.php">Home</a>
			<a href="packages.php" class="selected">Packages</a>
			<a href="contact.php">Contact</a>
			<a href="About.html">About</a>
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

	<script type="text/javascript">

//JS Array for images

	  var travelImages = new Array();
	  travelImages[0] = new Image();
	  travelImages[0].src = "caribbean.jpg";
	  travelImages[1] = new Image();
	  travelImages[1].src = "hawaii.jpg";
	  travelImages[2] = new Image();
	  travelImages[2].src = "thailand.jpg";
	  travelImages[3] = new Image();
	  travelImages[3].src = "Europe.jpg"

	//Array for destinations

	  var travelDescs = ["Caribbean Cruise", "Polynesian Paradise", "Asian Expedition", "European Vacation"];

	//Ids injected into buttons in for loop

		var travelIDs = ["cari", "hawi", "thai", "euro"];

	</script>

			<div>
				<script type="text/javascript">

					document.write("<div class='a'>" + "<h1 id='heading'>" + "Travel Packages" + "</h1>" + "</div>");

					//for loop for writing images with rollover effect

					for (i=0; i < travelDescs.length; i++) {

	          document.write("<div class='cont'><img class='pichov' src=\"" + travelImages[i].src + "\" + height=300px width=500px>" + "<div class='centered'>" + travelDescs[i] + "</div>" + "</div>");
						document.write("<div class='a cent'>" + "<button type='button' id=\"" + travelIDs[i] + "\" class='btn btn-secondary'>" + 'Display package information' + "</button>" + "</div>");
	        }

	      </script>
			</div>

				<!-- Travel Package data - pulled from database -->

			 <div id="package" class="a">Package Selected:</div>

				<div class="a cent gone cardd" id="cari1">
					<?php

						date_default_timezone_set('America/Edmonton');
						//SQL Query
						$newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice, PkgStartDate, PkgEndDate from packages where PackageId = 1;";
						//DB Connect
						$query = mysqli_query($conn, $newsql);
						//Verify if there are any results
    				$check = mysqli_num_rows($query);

						//if there are any results, echo them out with a while loop. mysqli_fetch_assoc makes associated array - SQL Column the "key" and cell data the "value"

						if ($check > 0) {
        			while($row = mysqli_fetch_assoc($query)) {
          			echo "<div class='packname'>" . "Package: " . $row['PkgName'] . "</div>" . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: $" . $row['PkgBasePrice'] . "<br/>";

								//If package is out of date, apply red text with CSS formatting. (compare package date to today's date). If not, display text black.
								$date = $row['PkgStartDate'];
								$today = date("Y-m-d");
								if ($date < $today) {
									echo "<div class='reddate'>" . "From " . $date . " to " . $row['PkgEndDate'] . "</div>";
								}
								else {
									echo "From " .$row['PkgStartDate'] . " to " . $row['PkgEndDate'] . "<br/>";
								}
							}
						}
    				else {
      				echo "No results.";
						}

  				?>
				</div>

				<div class="a cent gone cardd" id="hawi1">
					<?php
						$newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice, PkgStartDate, PkgEndDate from packages where PackageId = 2;";
    				$query = mysqli_query($conn, $newsql);
    				$check = mysqli_num_rows($query);

    				if ($check > 0) {
        			while($row = mysqli_fetch_assoc($query)) {
          			echo "<div class='packname'>" . "Package: " . $row['PkgName'] . "</div>" . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: $" . $row['PkgBasePrice'] . "<br/>";
								$date = $row['PkgStartDate'];
								$today = date("Y-m-d");
								if ($date < $today) {
									echo "<div class='reddate'>" . "From " . $date . " to " . $row['PkgEndDate'] . "</div>";
								}
								else {
									echo "From " .$row['PkgStartDate'] . " to " . $row['PkgEndDate'] . "<br/>";
								}
							}
    				}
    				else {
      				echo "No results.";
    				}
  				?>
				</div>

				<div class="a cent gone cardd" id="thai1">
					<?php
						$newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice, PkgStartDate, PkgEndDate from packages where PackageId = 3;";
    				$query = mysqli_query($conn, $newsql);
    				$check = mysqli_num_rows($query);

    				if ($check > 0) {
        			while($row = mysqli_fetch_assoc($query)) {
          			echo "<div class='packname'>" . "Package: " . $row['PkgName'] . "</div>" . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: $" . $row['PkgBasePrice'] . "<br/>";
								$date = $row['PkgStartDate'];
								$today = date("Y-m-d");
								if ($date < $today) {
									echo "<div class='reddate'>" . "From " . $date . " to " . $row['PkgEndDate'] . "</div>";
								}
								else {
									echo "From " .$row['PkgStartDate'] . " to " . $row['PkgEndDate'] . "<br/>";
								}
							}
    				}
    				else {
      				echo "No results.";
    				}
  				?>
				</div>

				<div class="a cent gone cardd" id="euro1">
					<?php
						$newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice, PkgStartDate, PkgEndDate from packages where PackageId = 4;";
    				$query = mysqli_query($conn, $newsql);
    				$check = mysqli_num_rows($query);

    				if ($check > 0) {
        			while($row = mysqli_fetch_assoc($query)) {
          			echo "<div class='packname'>" . "Package: " . $row['PkgName'] . "</div>" . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: $" . $row['PkgBasePrice'] . "<br/>";
								$date = $row['PkgStartDate'];
								$today = date("Y-m-d");
								if ($date < $today) {
									echo "<div class='reddate'>" . "From " . $date . " to " . $row['PkgEndDate'] . "</div>";
								}
								else {
									echo "From " . $row['PkgStartDate'] . " to " . $row['PkgEndDate'] . "<br/>";
								}
							}
    				}
    				else {
      				echo "No results.";
    				}
  				?>
				</div>


		<div class="a cent">
			<button id="topper" type="button" class='btn btn-secondary'>Back to top</button> <button id="hider" type="button" class='btn btn-secondary'>Hide package</button> <a href="purchase.php"><button type="button" class='btn btn-secondary'>Purchase Package</button></a>
		</div>



	</body>

<!--<div class="container">


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="caribbean.jpg" class="d-block w-100" alt="Caribbean"/>
    </div>
    <div class="carousel-item">
      <img src="hawaii.jpg" class="d-block w-100" alt="Hawaii"/>
    </div>
    <div class="carousel-item">
      <img src="thailand.jpg" class="d-block w-100" alt="Thailand"/>
    </div>
	<div class="carousel-item">
      <img src="Europe.jpg" class="d-block w-100" alt="Europe"/>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="card-deck">
  <div class="card">
    <img src="china.jpg" class="card-img-top" alt="china" height=300px width=250px>
    <div class="card-body">

      <p class="card-text">-->
				<?php
					// $newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice from packages where PackageId = 3;";
    			// $query = mysqli_query($conn, $newsql);
    			// $check = mysqli_num_rows($query);

    			// if ($check > 0) {
        	// 	while($row = mysqli_fetch_assoc($query)) {
          // 		echo "ID: " . $row['PackageId'] . "<br/>" . "Package: " . $row['PkgName'] . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: " . $row['PkgBasePrice'] . "<br/>";
        	// 			}
    			// 		}
    			// 	else {
      		// 		echo "No results.";
    			// 		}
  				// 	?>
				</p>
   <!-- </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="eiffel.jpg" class="card-img-top" alt="eiffel tower" height=300px width=250px>
    <div class="card-body">

      <p class="card-text">			-->
				<?php
					// $newsql = "SELECT PackageId, PkgName, PkgDesc, PkgBasePrice from packages where PackageId = 4;";
    			// $query = mysqli_query($conn, $newsql);
    			// $check = mysqli_num_rows($query);

    			// if ($check > 0) {
       		// 	while($row = mysqli_fetch_assoc($query)) {
        	// 		echo "ID: " . $row['PackageId'] . "<br/>" . "Package: " . $row['PkgName'] . "<br/>" . "Package includes " . $row['PkgDesc'] . "<br/>" . "Price: " . $row['PkgBasePrice'] . "<br/>";
       		// 	}
  				// }
  				// else {
    			// 	echo "No results.";
   				// }
  			?>
	<!--		</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
	<div class="w-100"></div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
	<div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>-->


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
