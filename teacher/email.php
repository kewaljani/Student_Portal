<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname ="students";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$query = "SELECT * FROM `signin`";

$result = $conn->query($query) or die($conn->error);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $to = $row['email'];
            echo $to;
            $subject = "TESTING";
            $txt = "This is to notify you ";
            $headers = "From: kewaljani4@gmail.com" . "\r\n" .
            "CC: kewaljani4@gmail.com";
            mail($to,$subject,$txt,$headers);
        }
        echo "<script>alert('Mail done successfully')</script>";
        //maecho '<script>window.location="AdminDataManager.php"</script>';
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
?>
