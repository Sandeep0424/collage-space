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
    <link rel="stylesheet" href="Uploaded_Question.css">
    <link rel="stylesheet" href="uploaded_notes_style.css">
    <style>
        .displaycontainer{
            margin: 10px 10px;
            padding: 20px;
            border:none;
            border-radius: 6px;
            background-color: white;
        }
    </style>
</head>
<body>
    <header>
        <img src="image/college.gif" alt="" height="10%" width="10%">
        <nav class="nav_links">
            <ul>
                <a href="images_notes.php" class="anker"><li>Notes/Books</li></a>
                <a href="annoucement_page.php" class="anker"><li>Annoucements</li></a>
                <a href="quetionpaper_upload.php" class="anker"><li>Questions Paper</li></a>
            </ul>
        </nav>
        <a href="Login_Page.html"><button>Logout</button></a>
    </header>
    <div class="containers">
        <h2 class="container">Uploaded Question Paper Section</h2>
        <p class="label">*Welcome to Uploaded Question Paper section</p>
        <p class="label1">Here you can see all the uploaded Question Paper</p>&nbsp;
        <hr>
        <div class="container2">
            <input type="search" name="" id="search" class="search" placeholder="Search">
            <input type="submit" value="Search" class="btn">
        </div>
        <div class="display_notes">
            <div class="displaycontainer">
                <?php
                    $file = scandir("./questionpaper_upload");
                    foreach($file as $bookname){
                        if($bookname == "." || $bookname == "..") { continue; }
                        echo '<a href="questionpaper_upload/' .$bookname.'" class="uploading">'.$bookname.'</a> <br>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>