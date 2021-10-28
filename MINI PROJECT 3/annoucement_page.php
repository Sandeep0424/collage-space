<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Space.com</title>
    <link rel="stylesheet" href="Annoucement.css">
</head>
<body>
    <header>
        <a href="MINI_PROJET.html"></a><img src="image/college.gif" alt="This is an image" height="10%" width="10%" class="main">
           <nav>
               <ul class="nav_links">
                   <li><a href="images_notes.php" class="anker">Notes/Books</a>
                    <li><a href="quetionpaper_upload.php" class="anker">Question bank</a>
                    <li><a href="Previous_annoucment.html" class="anker">Previous Announcements</a></li>
                   </li>
               </ul>
           </nav>
           
           <a href="Login_Page.html"><button>Logout</button></a>
    </header>
    <form action="" class="container">
        <h3>Announcements</h3>&nbsp;
        <hr>
        <form action="uploading_annoucement.php" method="POST">
            <p>Add your Annoucement:-<input type="text" name="name" id="" placeholder="Annoucement*" accept="text" required></p>
            <p>Date:-<input type="date" name="dateofbirth" id=""></p>
            <input type="submit" name="save_date" value="ADD ANNOUNCEMENT">
        </form>
    </form>
    <footer>
    </footer>
</body>
</html> -->


<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Space</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/apple-touch-icon.png">
    <link rel="manifest" href="image/apple-touch-icon.png">
    <!-- <link rel="stylesheet" href="Annoucement.css"> -->
    <link rel="stylesheet" href="annoucement_php.css">
    <style>
        .main{
            float: left; 
        }
    </style>
</head>
<body>
    <header>
            <a href="main.php"></a><img src="image/college.gif" alt="This is an image" height="10%" width="10%" class="main">
            <nav>
                <ul class="nav_links">
                    <li><a href="images_notes.php" class="anker">Notes/Books</a>
                        <li><a href="quetionpaper_upload.php" class="anker">Question bank</a>
                        <li><a href="Previous_annoucment.php" class="anker">Previous Announcements</a></li>
                    </li>
                </ul>
            </nav>
            
            <a href="Login_Page.html"><button>Logout</button></a>
    </header>
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
                <div class="containers">
                    <p class="uper_text">Uploading Annoucement Section</p>
                    <p class="down_text">*Welcome to Uploading Annoucement Section</p>
                    <p class="down_text">Here you can upload Annoucement in this Section</p>&nbsp;
                    <hr>
                        <form action="code.php" method="POST" class="annoucement_section">
                            <label for="">Annoucement</label>
                            <input type="text" name="name" id="" placeholder="Add your annoucement" required>
                            <!-- <input type="text" name="name" placeholder="Add your Annoucement"> -->
                            <label for="">Date</label>
                            <input type="date" name="dateofbirth" class="">

                            <button type="submit" name="save_date" class="btn">Upload Annoucement</button>
                        </form> 
                </div>
</body>
</html>