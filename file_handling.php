<?php
//file handling
// file_exists() function

echo"<h2>checking if file exists or not</h2>";
if(file_exists('./file_handling.php')){
    echo "file exists";
}
else
echo "file not found";
?>