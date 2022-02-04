<?php
session_start();
	$ennum=$_POST["stdid"];
	$pswrd=$_POST["pwrd"];
if (!empty($ennum) || !empty($pass))
	{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
    $dbname = "faculty";
		echo $pswrd."".$ennum;
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
	  else
	  {
		  $q="SELECT * FROM `register` where `email`='"." ".$ennum."' and `password`='".$pswrd."';";
		  $sq=mysqli_query($conn,$q);
	  }
		if(mysqli_num_rows($sq)>0)
		{
			while($row = mysqli_fetch_assoc($sq)) {
			 $_SESSION["name"]= $row["name"]. " " . $row["surname"];
			 $_SESSION["email"]=$row["email"];
			 	echo $_SESSION["name"];
				header("location:timeline.html");
		}
	}
		else{
			//echo "Error: " . $q . "<br>" . $conn->error;

			echo "<script type='text/javascript'>alert('no user exist create new account');</script>";
			//header("location:teacherlogin.html");
	  }

	}
?>
