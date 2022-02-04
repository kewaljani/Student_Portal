<?php
session_start();
	$ennum=$_POST["stdid"];
	$pswrd=$_POST["pwrd"];
if (!empty($ennum) || !empty($pass))
	{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
    $dbname = "students";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
	  else
	  {
		  $q="SELECT * FROM `signin` where `enrollment_number`='".$ennum."' and `password`='".$pswrd."';";
		  $sq=mysqli_query($conn,$q);
		  echo $q;
	  }
		if(mysqli_num_rows($sq)>0)
		{
			while($row = mysqli_fetch_assoc($sq)) {
			 $_SESSION["name"]= $row["first_name"]. " " . $row["last_name"]."<br>";
			 // .$row[branch]."<br>".$row[year]."<br>".$row[enrollment_number]
			 	echo $_SESSION["name"];
				header("location:timeline.html");
		}
	}
		else{

			echo "<script type='text/javascript'>alert('no user exist create new account');</script>";
			header("location:studentlogin.html");
	  }

	}
?>
