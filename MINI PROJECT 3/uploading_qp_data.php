<?php
include_once 'db.php';
$host='localhost';
$username='root';
$password='';
$dbname = "demoss";
$conn=mysqli_connect($host,$username,$password,"$dbname");
   if(!$conn)
      {
         die('Could not Connect MySql Server:' .mysql_error());
      }
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","pdf" => "application/pdf" , 'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $filename = $_FILES["anyfile"]["name"];
        $filetype = $_FILES["anyfile"]["type"];
        $filesize = $_FILES["anyfile"]["size"];
     
        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        $filename =  $_POST["bookname"].".".$ext;
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("questionpaper_upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                    if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "questionpaper_upload/" . $filename)){
                        $sql="INSERT INTO question(file,type,size) VALUES('$filename','$filetype','$filesize')";
                        mysqli_query($conn,$sql);
    
                        echo '<script>alert("Document Uploaded SuccessFully")</script>';
                        header('Location:  /MINI PROJECT 3/uploaded_question.php');
                        exit();
                    }else{
    
                        echo '<script>alert("File is not uploaded")</script>';
                    }
                 
                } 
        } else{
            echo '<script>alert("Error: There was a problem uploading your file. Please try again.")</script>';
        }
    } else{
        echo "Error: " . $_FILES["anyfile"]["error"];
    }
}
?>