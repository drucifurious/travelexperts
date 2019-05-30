<?php

//$dbServername = "localhost";
//$dbUsername = "root";
//$dbPassword = "";
//$dbName = "travelexperts";

$dbServername = "remotemysql.com";
$dbUsername = "a3AJ81zuew";
$dbPassword = "uz2IAztYOM";
$dbName = "a3AJ81zuew";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die(mysqli_errno($conn) . " : did not connect");
}
 ?>
