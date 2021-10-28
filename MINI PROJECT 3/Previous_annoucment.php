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
    <link rel="stylesheet" href="previous_annoucment.css">
    <!-- CSS -->
    <link rel="stylesheet" href="previous_annoucements.css">
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
        <h2 class="container">Previous Annoucement Section</h2>
        <p class="label">*Welcome to Previous Annoucement Section</p>
        <p class="label1">Here you can see all the Previous Annoucement Section</p>&nbsp;
        <hr>
        <div class="display" >
            <div class="con">
                <p class="display2">Date</p>
                &nbsp;&nbsp;&nbsp;<p class="display3">Annoucement</p>
            </div>
            <div class="display1">
                <?php 
                    $con = mysqli_connect("localhost","root","","annoucement");
                    $query = "SELECT * FROM demo";
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo "<div>{$row['date']}\t\t{$row['name']}</div>";
                        }
                    }
                    mysqli_free_result($result);
                    mysqli_close($con);
                
                ?>
            </div>
        </div>
    </div>
</body>
</html>