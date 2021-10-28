<?php
   $name = $_GET['name'];
   $middle_name = $_GET['middle_name'];
   $last_name = $_GET['last_name'];
   $DOB = $_GET['DOB'];
   $sel = $_GET['field'];
   $institute_name = $_GET['institute_name'];
   $email_id = $_GET['email_id'];
   $password = $_GET['password'];

   //Database connection
   $conn = new mysqli('localhost','root','','miniproject');
   if($conn->connect_error)
   {
       die('Connection Failed : '.$conn->connect_error);
   }
   else
   {   $hash = password_hash($password, PASSWORD_DEFAULT);
       $sql = "INSERT INTO registration ( `Name`, `Middle Name`, `Last Name`, DOB, Field, `Institute Name`, Email, `Password`) VALUES ('$name', '$middle_name', '$last_name', '$DOB', '$sel','$institute_name', '$email_id', '$hash')";
       
       $stmt = $conn->query($sql);
       if($stmt == TRUE) {
        // echo '<script> alert("Registration successfull"); </script>';
        echo "<script type='text/javascript'>alert('Login Successfull');
            window.location = '/MINI PROJECT 3/Login_Page.html';</script>";
       }
       else { echo "Error occured ".$conn->error; }
       $conn->close();
       header('Location: /MINI PROJECT 3/Login_Page.html');
       exit();
   }

?>