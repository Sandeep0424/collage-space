<?php
session_start();
if (!isset( $_SESSION['authorized-user']))
    { 
    header('Location: /MINI PROJECT 3/Login_Page.html');
    exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collage Space</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/apple-touch-icon.png">
    <link rel="manifest" href="image/apple-touch-icon.png">   
    <link rel="stylesheet" href="mini_project.css">
</head>
<body>
   <header>
       <img src="image/college.gif" alt="" height="10%" width="10%">
       <nav>
           <ul class="nav_links">
               <li><a href="images_notes.php" class="anker">Note/Books</a>
                <li><a href="annoucement_page.php" class="anker">Announcements</a>
                <li><a href="quetionpaper_upload.php" class="anker">Question Paper</a></li>
               </li>
           </ul>
       </nav>

        <a href="logout.php" class="cta" ><button><?php echo $_SESSION['name'];?></button></a>
       
   </header>
   <nav>
       <img src="image/s.jpg" alt="" class="imag" align="left" height="600">
   </nav>
   <div>
       <h2>College Space</h2>&nbsp;
       <em>*A one stop destination for student and teacher.</em>
       <em>Here teacher share notes and question with student and can make announcements.</em>
   </div>
   <footer>
       <h4 class="last">About</h4>
      <p class="last">College space is a simple solution for the teachers and students to come near.</p>
      <p class="last">With simple steps teacher can upload notes and student can use it.Also teacher</p>
      <p class="last">can upload question paper of previous 5 year.</p>&nbsp;
      <hr>
    </footer>
</body>
</html>