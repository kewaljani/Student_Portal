<?php
session_start();
$name=$_SESSION["name"];
//$message=$_REQUEST["message"];


$k="1620bece30125";

 if ($k=="")
 {

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
    $statusMsg = '';

    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database

                $q="INSERT INTO $k (`file`,`file_status`) VALUES ('".$fileName."','1');";
                if ($conn->query($q) === TRUE) {

                  $_SESSION["set"]="1";
                  header("Location: custommessage.html");
                }
                else {
                       $statusMsg = "File upload failed, please try again.";
                    }
            }
            else
            {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
        else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;

  }



?>
