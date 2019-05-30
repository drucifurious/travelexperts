<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travelexperts";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die(mysqli_errno($conn) . " : did not connect");
}
 ?>
