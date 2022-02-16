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
$file= fopen ("file.txt", "a") or die ("Failed to create a file");
$text4file= "This is the text for 1st file.";
fwrite($file,$text4file);
echo "Reading content of the files using 'fread' fuction: <br>";
echo fread($file,filesize("file.txt"));
// tried to get content of a single file using fgets function but it is producing the whole file.
// echo "Reading a single line using 'fgets' from the same file: ";
// echo fgets("file.txt");
fclose ($file);
echo "<br>-----------------------------------------------------------------------";

echo "<br>-----------------------------------------------------------------------";
echo"<h2>Create a file/Write to file:</h2>";
echo "=>'Fopen' fuction is also used to Create.<br>
Here we will create a new file named 'file1.txt'.<br> For this, first parameter after 'fread' is filename and second should be 'w or a'.<br>";
$file1=fopen ("file1.txt", "w") or die ("Failed to create a file");
$file1text="This is text for new file, created through fopen('filename',w) and wrting text with 'fwrite'.";
fwrite($file1,$file1text);
fclose ($file1);
echo "<br>-----------------------------------------------------------------------<br>";
echo "<br>Now we will read the content of newfile named 'file1.txt' using read only.. <br>";
$file1r= fopen("file1.txt","r") or die ("unable to process the file!");
echo fread($file1r,filesize("file1.txt"));
fclose($file1r);
echo "<br><br>-----------------------------------------------------------------------";

echo "<br>-----------------------------------------------------------------------";

echo"<h2>Copying a file:</h2>";
echo "=>'For copying 'copy'function is used. <br>First parameter is original filename and second is with which name we want to create a copy.<br>
Here we will create a copy of  'file1.txt' to 'file2-copy.txt'.<br>";
copy ("file1.txt", "file2-copy.txt") or die ("could not copy");
echo "File copied successfully!";
echo "<br><br>-----------------------------------------------------------------------";

echo "<br>-----------------------------------------------------------------------";

echo"<h2>Renaming and moving file(s):</h2>";
echo "=>'For renaming 'rename'function is used. <br>First parameter is original filename and second is new name. Even a new path can be given within a parameter.<br>
It will change the name as well as move file to the new location.<br>";
echo "<br>-----------------------------------------------------------------------";
echo "<br>Now we will move and rename all '.txt' files in the folder 'FH'.<br>";
if (rename ("file2-copy.txt", "FH/file2-cpd.txt") and rename("file.txt", "FH/file.txt") and rename("file1.txt", "FH/file1.txt")){
    echo "All files moved successfully!";
}
else {echo "There is an error";}

echo "<br><br>-----------------------------------------------------------------------";

echo "<br>-----------------------------------------------------------------------";

?>