<?php

$db = mysqli_connect("us-cdbr-east-06.cleardb.net","beca59ae1f784e","cfbb6a99","heroku_26e9e802a6e9e18");

// Check connection
   if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
      echo "Unsuccessful connection";
}
   else
//Display results
   echo "Connected successfully". "<br>";

// $db = mysqli_connect("localhost","root","admin","academicadvisor");

// // Check connection
//    if ($db->connect_error) {
//       die("Connection failed: " . $db->connect_error);
//       echo "Unsuccessful connection";
// }
//    else
// //Display results
//    echo "Connected successfully". "<br>";
?>


