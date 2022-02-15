<?php
//file handling
// file_exists() function

echo"<h2>File handling in PHP:</h2>";
echo "=>Checking a file(already existed) named 'file.txt' using relative path, if it exists or not:<br>";
if(file_exists('./file.txt')){
    echo "'Hurrah! file exists'";
}
else
echo "'file not found'";
echo "<br>-----------------------------------------------------------------------";
echo"<h2>Open/Read a file:</h2>";
echo "=>Using 'fopen' fuction to open/read a file:<br>";
$newfile= fopen ("file.txt", "r") or die ("Failed to create a file");
echo "Reading content of the files using 'fread' fuction: <br>";
echo fread($newfile,filesize("file.txt"));
// tried to get content of a single file using fgets function but it is producing the whole file.
// echo "Reading a single line using 'fgets' from the same file: ";
// echo fgets("file.txt");
fclose ($newfile);
echo "<br>-----------------------------------------------------------------------";

echo "<br>-----------------------------------------------------------------------";
echo"<h2>Create or Write a file:</h2>";
echo "=>'Fopen' fuction is also used to Create or Write to a file: <br>";
$newfile= fopen ("file.txt", "r") or die ("Failed to create a file");
echo "Reading content of the files using 'fread' fuction: <br>";
echo fread($newfile,filesize("file.txt"));
// tried to get content of a single file using fgets function but it is producing the whole file.
// echo "Reading a single line using 'fgets' from the same file: ";
// echo fgets("file.txt");
fclose ($newfile);
echo "<br>-----------------------------------------------------------------------";
?>