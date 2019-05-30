<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travelexperts";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn) {
  //echo "Hello! You connected to the database!" . "<br/>";
}
else {
  die(mysqli_errno($conn) . " : did not connect");
}
 ?>
