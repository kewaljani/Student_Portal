<?php
  $pswrd = $cpass = "";
  $firstname = $_REQUEST["first"];
  $lastname = $_REQUEST["last"];
  $ennum = $_REQUEST["enrollment"];
  $pswrd = $_REQUEST["pswrd"];
  $cpass = $_REQUEST["cpswrd"];
  $email = $_REQUEST["email"];
  $branch=$_REQUEST["branch"];
  $year=strval($_REQUEST["year"]);
//  echo $email."".$firstname."".$lastname."".$ennum."".$pswrd."".$cpass;
  $db="students";
//  for ($i= 0 ; $i < 6 ; $i++)
//  {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $db_name = $db;
  //  echo $db_name;
  if($pswrd == $cpass){
      $conn = new mysqli($host, $dbUsername, $dbPassword, $db_name);
      if (mysqli_connect_error())
       {
         echo "errror";
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }
       else{
         $q = "INSERT INTO `signin`(`first_name`,`last_name`,`enrollment_number`,`password`,`email`,`branch`,`year`) VALUES ('".$firstname."','".$lastname."','".$ennum."','".$pswrd."','".$email."','".$branch."','".$year."');";

         if ($conn->query($q) === TRUE) {
           echo "inserted ";
        } else {
            echo "Error: " . $q . "<br>" . $conn->error;
                      }

        $conn->close();
       }
  }
  else
  {
    echo "password dont match;";
    echo $pswrd." ".$cpass;
  }
  //$ennum = $_REQUEST["enrollment"];
      $db_name="message";
      $conn = new mysqli($host, $dbUsername, $dbPassword, $db_name);
      //$sql =
     if (mysqli_connect_error())
      {
        echo "errror";
       die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       }
      else{
        $q = "CREATE TABLE $ennum(
         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(30) NOT NULL,
         subject VARCHAR(30) NOT NULL,
         message VARCHAR(5000),
         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
       )";
       $sql="INSERT INTO `register` (`name`,`enrollment`) VALUES ('".$firstname."','".$ennum."');";
        if ($conn->query($q) === TRUE) {
          //$conn->query($sql);
          //echo "created2";

       } else {
           echo "Error: " . $q . "<br>" . $conn->error;
                     }

                     if ($conn->query($sql) === TRUE) {
                       //$conn->query($sql);
                      // echo $firstname." ".$ennum;
                       echo "sucessfully created";

                    } else {
                        echo "Error: " . $q . "<br>" . $conn->error;
                                  }
        header("loction:login.html");
       $conn->close();
      }
//}
 ?>
