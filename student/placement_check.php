<?php
session_start();

	$ennum="1620bece30125";
	$pswrd="Kewal@123";
	$sess=(explode("<br>",$_SESSION["name"]));
	//echo $sess[2];
if (!empty($ennum) || !empty($pass))
	{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
    $dbname = $sess[1];
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
	  else
	  {
		  $q="SELECT * FROM `placement_$sess[2]`";
		  $sq=mysqli_query($conn,$q);
	  }
		if(mysqli_num_rows($sq)>0)
		{
			$x=mysqli_num_rows($sq);
			//echo $x;
			$y= $x%10	;
			$page=intval($x/10);
			$count=10;


			while($row = mysqli_fetch_assoc($sq)) {

				$myArr = array(
					'display'=>$sess[0],

					'subject'=>$row["subject"],
					'name'=>$row["name"]
				);
				//echo $row["subject"]."<br>"."".$row["name"]."<br>";
 			 echo json_encode($myArr)."<br>";
		}
	}

		else{

			//echo "<script type='text/javascript'>alert('no user exist create new account');</script>";
			$myArr = array(
				'display'=>$_SESSION["name"],


			);
			//echo $row["subject"]."<br>"."".$row["name"]."<br>";
		 echo json_encode($myArr)."<br>";
	  }

	}
?>
