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
//Q1. Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function) 
echo "<b>String</b>". "<br>";
$var1="I am first variable.";
$var2="I am second variable.";
echo "<br>". "Q1. Length of string is : " . strlen($var1.$var2) . "<br>";


// Q2.In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?

echo "<br>". "Q2. After changing the double quotes to single quotes in above string variables, it is printing as same, no change is observed." . "<br>";

// Q3.Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?
echo "<br>" . "Q3. If a single quote at the begining and double quote at the end is written. It produces the following error:" . "<br>";
echo '"Parse error: syntax error, unexpected string content......"' . "<br>";

// Q4.Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?
echo "<br>". "Q4. it gives the following error:" . "<br>";
// the following is the variable without dollar:
// name="imran";
// echo name;
echo 'Parse error: syntax error, unexpected token "=" in /var/www/html/excercise2.php on line 32' . "<br>";

// Q5. Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?
echo "<br>" . "Q5. ";
// $name="imran";
// echo $name
echo "If line 39 is the last line of the php file then it is printing the value of variable to the screen without any error."."<br>".
"But if there are more code lines after this and semicolon is removed, it gives the following error code:"."<br>".
'"Parse error: syntax error, unexpected token........."'."<br>";

// Q6.Write a PHP script to get the following display 
echo "<br>"."Q6. "."<br>".'"It is Markku\'s car."'."<br>".
'Random characters: del c:\*.* "' . "<br>";
echo "<br>";


// Operators
echo "<br>";
echo "<br>"."<b>Operators:</b>". "<br>";
//Q1. Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.
$add1=298+234+46;
echo "<br>". "Q1. Sum is: ". $add1 . "<br>";

//Q2. Use variables to calculate the following : (87 + 44)+(200 * 15) / 10
$a=87; $b=44; $c=200; $d=15; $e=10;
$calc=($a+$b)+($c*$d)/$e;
echo "<br>". "Q2. Calculation is: ". $calc;



?>

</body>
</html>