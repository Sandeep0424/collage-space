<?php
$file = scandir("./upload");
foreach($file as $bookname){ 
    echo '<a href="upload/'.$bookname.'">'.$bookname.'</a> <br>';
 }

?>