<?php
// $dBServername = "localhost";
// $dBUsername = "root";
// $dBPassword = "";
// $dBName = "loginsystem";

$dBServername = "remotemysql.com";
$dBUsername = "2paBbRHA1X";
$dBPassword = "IIsO9HcxnS";
$dBName = "2paBbRHA1X";


// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
