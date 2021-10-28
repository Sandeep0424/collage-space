<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>College Space</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/apple-touch-icon.png">
    <link rel="manifest" href="image/apple-touch-icon.png">
    <link rel="stylesheet" href="Note_Books.css">
</head>
<body>
    <header>
        <img src="image/college.gif" alt="" height="10%" width="10%">
        <nav class="nav_links">
            <li> <a href="annoucement_page.php" class="anker">Annoucement</a></li>
            <li> <a href="quetionpaper_upload.php" class="anker"> Question Bank</a></li>
            <li><a href="uploaded_notes.php" action="uploaded.php" class="anker">Uploaded Notes/Books</a></li>
        </nav>
        <a href="Login_Page.html"><button>Logout</button></a>
    </header>
    <hr>
    <div class="main">
        <h2>Notes/Books</h2>
        <p class="ems">*Welcome to Notes/books section.</p>
        <p class="ems">Here teacher share notes and books with student and can make announcements.</p>
        <hr>
    </div>
    <div class="box" >
        <h3>Note/Book Section</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="bookname" id="" placeholder="Book/Note Name*"  required>
            <label for="file_name"></label>
            <input type="file" name="anyfile" id="anyfile" accept="image/gif, image/jpeg, image/png, image/pdf">
            <input type="submit" name="submit" value="Upload"> &nbsp;
            <hr>&nbsp;
            <p align="center"><strong>Note:</strong>max size of 10 MB.</p>
        </form>
    </div>  
    <footer>
    </footer>  
</body>
</html>