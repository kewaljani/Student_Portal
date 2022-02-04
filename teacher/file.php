<?php
session_start();
//$sender=$_REQUEST["uname"];
$name="Palak parmar";
$branch=$_POST["branch"];
$semester=$_POST["semester"];
//echo "hey this is it".$semester."".$branch;
//$db_name="civil";']
//$batch=$_POST["batch"];
//$branch=$_REQUEST["division"];
$subject=$_POST["subject"];
$instruction=$_POST["instruction"];
$file=$_FILES["file"];
print_r($file);
$tname = $_FILES["file"]["tmp_name"];
$filename=$_FILES["file"]["name"];
$fileext=explode('.',$filename);
$fileactual=strtolower(end($fileext));
$filenamenew=uniqid('',true).".".$fileactual;
$filedestination='uploads/'.$filenamenew;

#temporary file name to store file

  move_uploaded_file($tname,$filedestination);
#upload directory path

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

    #TO move the uploaded file to specific location

       $q="INSERT INTO `submission_$semester` (`subject`,`instruction`,`name`,`file_name`) VALUES ('".$subject."','".$instruction."','".$name."','".$filenamenew."');";
       if ($conn->query($q) === TRUE) {
     	//	echo "inserted".$subject."and".$instruction;
      
     } else {
        //    echo "Error: " . $q . "<br>" . $conn->error;
     }
     $conn->close();
     }

?>
