<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise3</title>
</head>
<body>

<?php

/*Use IF else Q1:
Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays
You can use date(F) function to get the current month nameString */

echo "<b>Use of: If  Else</b>". "<br>";
echo "<br>"."<b>Q1:</b>";
$M = date("F");

if ($M == "August") {
  echo "<br>". "It's August, so it's still holiday.";
}
else {
    echo "<br>"."Not August, this is $M so i don't have any holidays."."<br>";
}
echo "============================================================";
/*Use IF else Q2:
Assign color red to a variable name $color and check to print one the following responses using if else statement 
The color is red. 
The color is not red.*/

echo "<br>"."<b>Q2:</b>";
$color="red";

if ($color == "red") {
    echo "<br>". "The color is red."."<br>";
  }
  else {
      echo "<br>"."The color is not red"."<br>";
  }
  echo "============================================================";


/*Use IF else Q3:
Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50 */

echo "<br>"."<b>Q3:</b>";
?>

<form>  
<b>Enter Your Score, to get the grade</b>:<br>  
<input type="number" name="number1"/><br><br>  
<input  type="submit">  <br>
</form>  

<?php

@$number1=$_GET['number1'];   

if($number1>=80) {      
  echo "<br>"."Grade is ".$number1.", and it is Excellent."."<br>";
}      

elseif($number1>=70 && $number1<80) {      
    echo "<br>"."Grade is ".$number1.", and it is Great."."<br>";
  }      

elseif($number1>=60 && $number1<70) {      
    echo "<br>"."Grade is ".$number1.", and it is Good."."<br>";
  }

elseif($number1>=50 && $number1<60) {      
    echo "<br>"."Grade is ".$number1.", and it is Pass."."<br>";
  }      
else
    echo "<br>"."Grade is " .$number1." and you are fail."."<br>";
       
    echo "============================================================";
    /*Use IF else Q4:
Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) */

echo "<br>"."<b>Q4:</b>";
?>

<form>

<b>Enter Your Name:</b>:<br>  
<input type="text" name="user"/><br><br>  
<b>Enter your age, to know the eligibility for voting</b>:<br>  
<input type="number" name="age"/><br><br>  
<input  type="submit">  <br>
</form>  

<?php

@$age=$_GET['age'];   
@$user=$_GET['user'];   

if($age>=18) {      
  echo "<br>"."Age of ". $user. " is ".$age.", and eligile for voting."."<br>";
}      

else
echo "<br>"."Age of ". $user. " is ".$age.", and is not eligile for voting."."<br>";
echo "============================================================";       
  /*Use Loops Q5:
Use a looping statement to construct the following pattern:
12345678
1234567
123456
12345
1234
123
12
1
 */

echo "<br>"."<b>use of LOOPS:</b>"."<br>";
 echo "<br>"."<b>Q5:</b>"."<br>";
 $x=8;
 while($x>0)
 {
     $y=1;
     while($y<=$x)
     {
       echo"$y";
       $y++;      
     }
     echo"<br>";
     $x--;
 }
 
echo "============================================================";       
  /*Use Loops Q6:
 Use While loop to print the following pattern:
*
**
***
****
*****
******
*******
********
 */
echo "<br>"."<b>Q6:</b>"."<br>";
$x=1;
while ($x <9) {
	$y=1;
	while ( $y<= $x) {
		$y++;
		echo "*";
	}
	$x++;
	echo "<br>";
}
echo "============================================================";       

  /*Use Loops Q7:
 Create a GitHub repo and enable GitHub pages for the repo. Upload your HTML files (your website that you did with Tommi)  to the repo. Include the link to the repo and your web page in the php file.
 */
echo "<br>"."<b>Q7:</b>"."<br>";

echo "<a href=https://github.com/imrancsen/1st_Web_Proj_SC> Imran_Webproj_gitlink</a>"."<br>";

echo "============================================================";
echo "<br>";
echo "Thank You."."<br>";
echo "============================================================";       
echo "<br>";
echo "============================================================";       

?>

</body>
</html>