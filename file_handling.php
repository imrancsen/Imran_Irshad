<?php
//file handling
// file_exists() function

echo"<h2>checking if file exists or not</h2>";
if(file_exists('./file_handling.php')){
    echo "file exists";
}
else
echo "file not found";

$newfile= fopen ('file.txt', 'a') or die ("Failed to create a file");
$txt = "something to write to the file.<br>";
fwrite ($newfile, $txt);
fclose($newfile);

?>