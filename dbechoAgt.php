<?php
  include "dbconnAgt.php";
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Database connection</title>
  </head>
  <body>

    <?php
      // $sql = "SELECT * FROM packages;";
      // $result = mysqli_query($conn, $sql);
      // $resultCheck = mysqli_num_rows($result);
      //
      // if ($resultCheck > 0) {
      //   while ($row = mysqli_fetch_assoc($result)) {
      //     echo $row['PackageId'] . "<br/>" . $row['PkgName'] . "<br/>";
      //   }
      // }


    $newsql = "SELECT AgentId, AgtFirstName, AgtMiddleName, AgtLastName from agents where AgentId = 2;";
    $query = mysqli_query($conn, $newsql);
    $check = mysqli_num_rows($query);

    if ($check > 0) {
        while($rw = mysqli_fetch_assoc($query)) {
          echo "ID: " . $rw['AgentId'] . "<br/>" . "Name: " . $rw['AgtFirstName'] . "<br/>" . $rw['AgtMiddleInitial'] . "<br/>" . $rw['AgtLastName'] . "<br/>";
        }
    }
    else {
      echo "No results.";
    }


    ?>



  </body>
</html>
