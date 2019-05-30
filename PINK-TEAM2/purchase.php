<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<?php
  include "dbconn.php";
  include "classes.php";
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
</head>

<link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/navigation-round.css">
<link rel="stylesheet" href="assets/slicknav/slicknav.min.css">
<link rel="stylesheet" href="assets/icons.css">
<link rel="stylesheet" href="css/button.css">

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




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
	<!--jQuery-->
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

	<div>
	    <script type="text/javascript">
			document.write("<div class='a'>" + "<h1 id='heading'>" + "Purchase Package" + "</h1>" + "</div>");
	    </script>
    </div>

    <form id="purchaseform" action="purchase.php" method="post">
        <label for="fname">First Name</label><br/>
        <input class="inputform" placeholder="Enter first name" type="text" name="fname" id="fname" required><br/>
        <label for="lname">Last Name</label><br/>
        <input class="inputform" placeholder="Enter last name" type="text" name="lname" id="lname" required><br/>
        <label for="email">Email</label><br/>
        <input class="inputform" placeholder="Enter email" type="text" pattern="[a-z0-9._%+-]{3,}@[a-z]{3,}([.]{1}[a-z]{2,}|[.]{1}[a-z]{2,}[.]{1}[a-z]{2,})" name="email" id="email"><br/>
        <label for="address">Address</label><br/>
        <input class="inputform" placeholder="Enter address" type="text" name="address" id="address" required><br/>
        <label for="city">City</label><br/>
        <input class="inputform" placeholder="Enter city" type="text" name="city" id="city" required><br/>
        <label for="province">Province</label><br/>
        <select class="selector" name="province" id="province" required>
            <option value="AB">Alberta</option>
	        <option value="BC">British Columbia</option>
	        <option value="MB">Manitoba</option>
	        <option value="NB">New Brunswick</option>
	        <option value="NL">Newfoundland and Labrador</option>
	        <option value="NS">Nova Scotia</option>
	        <option value="ON">Ontario</option>
	        <option value="PE">Prince Edward Island</option>
	        <option value="QC">Quebec</option>
	        <option value="SK">Saskatchewan</option>
	        <option value="NT">Northwest Territories</option>
	        <option value="NU">Nunavut</option>
	        <option value="YT">Yukon</option>
        </select><br/>
        <label for="postal">Postal Code</label><br/>
        <input class="inputform" placeholder="Enter Postal Code" type="text" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="postal" id="postal" required><br/>
        <label for="phone">Phone Number</label><br/>
        <input class="inputform" placeholder="Enter phone"type="text" name="phone" id="phone" required><br/>
        <label for="package">Select Package</label><br/>
        <select class="selector" name="package" id="packages" required>
            <option value="4800">Caribbean Cruise</option>
            <option value="3000">Hawaii</option>
            <option value="2800">Asian Expidition</option>
            <option value="3000">European Tour</option>
        </select><br/>
        <label for="ccardtype">Credit Card Type</label><br/>
        <select class="selector" name="ccardtype" id="ccardtype" required>
            <option value="amex">AMEX</option>
            <option value="mcard">MasterCard</option>
            <option value="visa">Visa</option>
        </select><br/>
        <label for="ccnum">Credit Card Number</label><br/>
        <input class="inputform" placeholder="Enter credit card number" pattern="/^([0-9]{4}( |\-)){3}[0-4]{4}$/" type="text" name="ccnum" required><br/>
        <label for="ccexp">Expiry Date</label><br/>
        <input class="inputform" type="date" name="ccexp" required><br/>
        <button class="btn btn-primary" type="submit">Submit form</button>


    </form>

<?php

    $newcust = new customer;

    $newcust->setFirstName($_POST['fname']);
    $newcust->setLastName($_POST['lname']);
    $newcust->setAddress($_POST['address']);
    $newcust->setCity($_POST['city']);
    $newcust->setProvince($_POST['province']);
    $newcust->setPostal($_POST['postal']);
    $newcust->setEmail($_POST['email']);
    $newcust->setPhone($_POST['phone']);
    $newcust->setPackage($_POST['package']);
    $newcust->setccType($_POST['ccardtype']);
    $newcust->setccNum($_POST['ccnum']);
    $newcust->setccExp($_POST['ccexp']);

    //echo $newcust . "<br/>";

    $fname = $newcust->getFirstName();
    $lname = $newcust->getLastName();
    $address = $newcust->getAddress();
    $city = $newcust->getCity();
    $prov = $newcust->getProvince();
    $postal = $newcust->getPostal();
    $email = $newcust->getEmail();
    $phone = $newcust->getPhone();
    $package = $newcust->getPackage();
    $cctype = $newcust->getccType();
    $ccnum = $newcust->getccNum();
    $ccexp = $newcust->getccExp();


    $query = "INSERT INTO customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustCountry, CustHomePhone, CustBusPhone, CustEmail)
    VALUES ('$fname', '$lname', '$address', '$city', '$prov', '$postal', 'NULL', 'NULL', '$phone', '$email');";

    $selector = "SELECT CustomerId from customers WHERE CustLastName = '$lname' AND CustFirstName = '$fname';";
    $reader = mysqli_query($conn, $selector);
    $checker = mysqli_num_rows($reader);

    if ($checker > 0) {
        while($row = mysqli_fetch_assoc($reader)) {
            $newid = $row['CustomerId'];
        }
    }

    $query2 = "INSERT INTO creditcards (CCName, CCNumber, CCExpiry, CustomerId, `Price Charged`)
    VALUES ('$cctype', '$ccnum', '$ccexp', $newid, '$package');";

        if (mysqli_query($conn, $query2) && mysqli_query($conn, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
        }

?>


    <!--<form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">First name</label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
             </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Username</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            </div>
            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                </div>
                </div>
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip03">City</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Province</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="Province" required>
                <div class="invalid-tooltip">
                    Please provide a valid Province.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Zip</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                <div class="invalid-tooltip">
                    Please provide a valid postal code.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>-->











</body> <!-- This templates was made by Colorlib (https://colorlib.com) -->
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
