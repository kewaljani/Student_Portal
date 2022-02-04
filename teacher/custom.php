<?php
session_start();
$name=$_SESSION["name"];
$message=$_REQUEST["message"];

$count=$_REQUEST["count"];
$students=$_REQUEST["students"];
$x=(explode("<NEXT>",$students));
print_r($x);
$temp=strval($x);
foreach ($x as $k )
{
  echo $k;
 echo $message;
 if ($k=="")
 {
   continue;
 }
  //echo $x[0];
  //echo $temp;
  //echo "type of this subject is---".gettype($sub);
  //echo $i." th value is ".$x[$i];
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname ="message" ;
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error())
  {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

  }
  else
  {
     $q="INSERT INTO $k (`message`,`name`) VALUES ('".$message."','".$name."');";
   if ($conn->query($q) === TRUE) {
  		echo "inserted".$name."and".$message;
   } else {
            echo "Error: " . $q . "<br>" . $conn->error;
//               echo "insertion failed";
   }
   $conn->close();
  }
}


?>
