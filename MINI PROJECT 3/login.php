<?php
$login = True;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sel = $_POST['field'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    //Database connection
   $conn = new mysqli('localhost','root','','miniproject');
   if($conn->connect_error)
   {
       die('Connection Failed : '.$conn->connect_error);
   }
   else
    {

        
        $sql = "Select email,name,password from registration where ( field='$sel' and email='$email_id' ) ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result); 
        $userdata = mysqli_fetch_array($result);
        $name = $userdata[1];
        $hash = $userdata[2];
        if (password_verify($password, $hash)){
            $login = true;
            // echo "<script type='text/javascript'>alert('login Successfull');</script>";
            
            if ($login == true){
                session_start();
                $_SESSION['authorized-user'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['field'] = $sel;
                $_SESSION['email_id'] = $email_id;
                
                header('Location:  /MINI PROJECT 3/main.php');
                exit();
            }	
        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid Credential');
            window.location = '/MINI PROJECT 3/Login_Page.html';</script>";
        }


    }
}
?>