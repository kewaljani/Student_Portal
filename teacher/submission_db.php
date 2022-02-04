<?php
session_start();
//$sender=$_REQUEST["uname"];
$name=$_SESSION["name"];
$branch=$_REQUEST["branch"];
$semester=$_REQUEST["semester"];
echo "hey this is it".$semester."".$branch;
//$db_name="civil";']
$batch=$_REQUEST["batch"];
//$branch=$_REQUEST["division"];
$subject=$_REQUEST["subject"];
$instruction=$_REQUEST["instruction"];


  //echo "type of this subject is---".gettype($subject);
  //echo $i." th value is ".$x[$i];
  $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
    $dbname =$branch ;
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
     else
     {

       $q="INSERT INTO `submission_$semester` (`subject`,`instruction`,`name`) VALUES ('".$subject."','".$instruction."','".$name."');";
       if ($conn->query($q) === TRUE) {
     		echo "inserted".$subject."and".$instruction;
     } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
     }

?>
