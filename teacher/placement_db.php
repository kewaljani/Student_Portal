<?php
session_start();
//$sender=$_REQUEST["uname"];
$name=$_SESSION["name"];
$subject=$_REQUEST["sub"];
$message=$_REQUEST["message"];
echo "hey this is it".$subject."" .$message;
//$db_name="civil";']
$batch=$_REQUEST["batch"];
$branch=$_REQUEST["branch"];
$x=(explode(",",$branch));
$y=(explode(",",$batch));
echo $y[0];
$size= count($x);
$len= count($y);
for ($i= 0 ; $i < $size ; $i++)
{
  for ($j=0;$j< $len ;$j++)
  {
  echo "type of this subject is---".gettype($subject);
  echo $i." th value is ".$x[$i];
  $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
    $dbname =$x[$i] ;
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
     else
     {

       $q="INSERT INTO `placement_$y[$j]` (`subject`,`message`,`name`) VALUES ('".$subject."','".$message."','".$name."');";
       if ($conn->query($q) === TRUE) {
     		echo "inserted".$subject."and".$message;
     } else {
             echo "insertion failed";
     }
     $conn->close();
     }
   }
}
?>
