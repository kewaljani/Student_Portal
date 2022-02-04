<?php
$uname = $_REQUEST["first"];
$sname=$_REQUEST["last"];
$email=$_REQUEST["email"];
$remail=$_REQUEST["remail"];
$password=$_REQUEST["pswrd"];
if (!empty($uname)||!empty($sname)||!empty($email)||!empty($remail)||!empty($password))
	{
  $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
    $dbname = "faculty";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
     else
		     {
		     $q="INSERT INTO `register` (`email`,`password`,`name`,`surname`,`remail`) VALUES ('".$email."','".$password."','".$uname."','".$sname."','".$remail."');";

			if ($conn->query($q) === TRUE)
			{
				echo "inserted";
			}
			else 
			{
			echo "Error: " . $q . "<br>" . $conn->error;
		        echo "insertion failed";
		  }

		$conn->close();

			}



	}

?>
