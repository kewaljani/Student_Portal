<?php
session_start();
$x=$_SESSION["name"];
$id=$_REQUEST["sub"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty";
// Create connection

//echo $x[3];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error())
  {
   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   }
 else
 {
   $q="SELECT * FROM `$x` where `id`='".$id."';";
   $sq=mysqli_query($conn,$q);
 }

if (mysqli_num_rows($sq)>0){
    // output data of each row
    while($row = mysqli_fetch_assoc($sq)) {
      $_SESSION["message"]=$row["name"]."<br>".$row["message"];
      echo $_SESSION["message"];
        //echo "id: " . $row["message"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {    echo "0 results";
}
$conn->close();
?>
