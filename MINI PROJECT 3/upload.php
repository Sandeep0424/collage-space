<?php
session_start();
include_once 'db.php';
$host='localhost';
$username='root';
$password='';
$dbname = "demos";
$conn=mysqli_connect($host,$username,$password,"$dbname");
   if(!$conn)
      {
         die('Could not Connect MySql Server:' .mysql_error());
      }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","pdf" => "application/pdf" , 'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $filename = $_FILES["anyfile"]["name"];
        $filetype = $_FILES["anyfile"]["type"];
        $filesize = $_FILES["anyfile"]["size"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        $filename =  $_POST["bookname"].".".$ext;
        if(in_array($filetype, $allowed)){
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "upload/" . $filename)){
                    $sql="INSERT INTO images(file,type,size) VALUES('$filename','$filetype','$filesize')";
                    mysqli_query($conn,$sql);
                    // header ("location: images_notes.php");
                    echo '<script>alert("Document Uploaded SuccessFully")</script>';
                    header('Location:  /MINI PROJECT 3/uploaded_notes.php');
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