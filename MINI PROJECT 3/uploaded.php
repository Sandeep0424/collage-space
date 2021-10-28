<?php
if ($handle = opendir('upload/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
        ?>    
            <h1> <?php echo "$entry<br>";?> </h1>
            <?php
        }
    }
    closedir($handle);
}   
?>
