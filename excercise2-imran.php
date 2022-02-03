<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise2</title>
</head>
<body>

<?php

// //String 

echo "<h3>Excercise2 (Strings, Operators)</h3>". "<br>";
echo "<b>String:</b>". "<br>";
echo "<br>"."<b>Q1. Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function)</b>";
$var1="I am first variable.";
$var2="I am second variable.";
echo "<br>". "Ans:"."<br>". "first_variable = I am first variable."."<br>"."Second_variable= I am second variable."."<br>".
"Length of string for both using (strlen) is: " . strlen($var1.$var2) . "<br>";


echo "<br>"."<b>Q2.In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?</b>";

echo "<br>". "Ans."."<br>". "After changing the double quotes to single quotes in code of above string variables, it is printing as same, no change is observed." . "<br>";

echo "<br>". "<b>Q3.Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?</b>";
echo "<br>" . "Ans."."<br>"."If a single quote at the begining and double quote at the end is written. It produces the following error:" . "<br>";
echo '"Parse error: syntax error, unexpected double-quoted string "Parse error: syntax error, une...", expecting "," or ";" in /var/www/html/excercise2-imran.php on line 30"' . "<br>";

echo "<br>"."<b>Q4.Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</b>";
echo "<br>". "Ans"."<br>". "it gives the following error:" . "<br>";
/* the following is the variable without dollar:
name="imran";
echo name;*/
echo 'Parse error: syntax error, unexpected token "=" in /var/www/html/excercise2.php on line 35' . "<br>";

echo "<br>"."<b>Q5. Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?</b>";
echo "<br>" . "Ans. "."<br>";
 $name="imran";
 echo $name;
echo "If line 42 is the last line of the php file then it is printing the value of variable to the screen without any error."."<br>".
"But if there are more code lines after this and semicolon is removed, it gives the following error code:"."<br>".
'"Parse error: syntax error, unexpected token "echo", expecting "," or ";" in /var/www/html/excercise2-imran.php on line 43"'."<br>";

echo "<br>"."<b>Q6.Write a PHP script to get the following display</b>"; 
echo "<br>"."Ans: "."<br>".'"It is Markku\'s car."'."<br>".
'Random characters: del c:\*.* "' . "<br>";
echo "<br>";


// Operators
echo "<br>";
echo "<br>"."<b>Operators:</b>". "<br>";
echo "<br>"."<b>Q1. Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer</b>";
$add1=298+234+46;
echo "<br>". "Ans: Sum is: ". $add1 . "<br>";

echo "<br>"."<b>Q2. Use variables to calculate the following : (87 + 44)+(200 * 15) / 10</b>";
echo "<br>".'$a=87; $b=44; $c=200; $d=15; $e=10';
echo "<br>".'$calc=($a+$b)+($c*$d)/$e';
$a=87; $b=44; $c=200; $d=15; $e=10;
$calc=($a+$b)+($c*$d)/$e;
echo "<br>". "Ans: Calculation is: ". $calc;



?>

</body>
</html>