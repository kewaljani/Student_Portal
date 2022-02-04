<?php
session_start();
$sess=(explode("<br>",$_SESSION["name"]));
$sess2=(explode("<br>",$_SESSION["message"]));
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
  $dbname = $sess[1];
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$q="SELECT `file_name` FROM `submission_$sess[2]`WHERE `instruction`='$sess2[1]'";
$sq=mysqli_query($conn,$q);
$file = mysqli_fetch_assoc($sq);
$x= implode(" ",$file);
echo $_SESSION["message"]."<br>".$x;
?>
