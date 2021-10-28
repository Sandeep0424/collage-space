<?php
session_start();
$con = mysqli_connect("localhost","root","","annoucement");

if(isset($_POST['save_date']))
{
    $name = $_POST['name'];
    $dob = date('Y-m-d', strtotime($_POST['dateofbirth']));

    $query = "INSERT INTO demo (name,date) VALUES ('$name','$dob')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: annoucement_page.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: annoucement_page.php");
    }
}
?>


