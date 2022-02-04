<?php
session_start();
$y= $_SESSION["name"];
//echo $x;
	$ennum="1620bece30125";
	$pswrd="Kewal@123";
if (!empty($ennum) || !empty($pass))
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
		  $q="SELECT * FROM `$y`";
		  $sq=mysqli_query($conn,$q);
	  }
		if(mysqli_num_rows($sq)>0)
		{
			$x=mysqli_num_rows($sq);
			//echo $x;
			$y= $x%10	;
			$page=intval($x/10);
			$count=10;


				while($row = mysqli_fetch_assoc($sq))
		{
			$myArr = array(
				'display'=>$_SESSION['name'],

				'subject'=>$row["subject"],
				'name'=>$row["name"]
			);
 			  echo json_encode($myArr)."<br>";
		 }

	}
		else{
			//echo "Error: " . $q . "<br>" . $conn->error;
			$myArr = array(

				'display'=>$_SESSION["name"],
			);
			echo json_encode($myArr)."<br>";
	  }

	}
?>
