
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <script src="/path/to/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="uploaded_notes.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Space</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/apple-touch-icon.png">
    <link rel="manifest" href="image/apple-touch-icon.png">
    <link rel="stylesheet" text="text/css" href="uploaded_notes_style.css"/>
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
        
        <h2 class="container">Uploaded Notes/Books Section</h2>
        <p class="label">*Welcome to Uploaded Notes/books section</p>
        <p class="label1">Here you can see all the uploaded_Notes/Books</p>&nbsp;
        <hr>
        <div class="container2">
            <input type="search" name="" id="search" class="search" placeholder="Search" >
            <input type="submit" value="Search" class="btn">
        </div>
            <div class="display_notes">
                <div class="displaycontainer">
                    <?php
                        $file = scandir("./upload");
                        foreach($file as $bookname){
                            if($bookname == "." || $bookname == "..") { continue; } 
                            echo '<a class="uploading" id="change_text" href="upload/'.$bookname.'">'.$bookname.'</a> <br>';
                        }
                    ?>
                </div>
            </div>
    </div>
    
           
</body>
</html>