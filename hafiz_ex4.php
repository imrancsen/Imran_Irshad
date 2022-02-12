<?php
echo "<h1>-----------Exercise 4---------------</h1>";
echo "<h1>Q 1. Write a php script to display courses as list by using list tag.</h1>";

$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 foreach ($courses as $cor){
     echo "<li>$cor</li>";
 }

 /*
2. The unset() function is used to remove element from the array.;
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
*/
echo "<h1>Q 2. Delete an element from the array below: </h1>";

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[3]);
print_r($courses1);


 
echo "<h1>Q 3. Sort the following array. </h1>";
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "a) ascending order sort by value <br>";
asort ($courses3);
print_r($courses3) . "<br>";
echo "<br>b) ascending order sort by Key <br> ";
ksort ($courses3);
print_r($courses3) . "<br>";

echo "<br> c) descending order sort by Value <br>";
arsort ($courses3);
print_r($courses3) . "<br>";

echo "<br> d) descending order sort by Key <br>";
krsort ($courses3);
print_r($courses3) . "<br>";






echo "<h1>Q 4. Change the following array's all values to upper case.</h1>";

 $courses4=array("php", "html", "javascript", "cms", "project");
 $conrt = array_map("strtoupper", $courses4);
 foreach ($conrt as $key) {
     echo $key ."<br>";

}


echo "<h1> Q 5. Create an array that holds your favorite colors and print them. (indexed arrays).</h1>";

$favcolors = array("blue", "black", "white", "red", "violet");

echo "I like " .$favcolors[0] ." , ".$favcolors[1] ." , ".$favcolors[2]. " , ".$favcolors[3]. " and ".$favcolors[4];


echo "<h1>Q 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h1>";
$favcolor = array(
    "blue" => "#0202FF", 
    "black" => "#000000" , 
    "white" => "#FFFFFF", 
    "red" => "#FF0000", 
    "violet" => "#EE82EE"
);

foreach ($favcolor as $key => $value) {
    echo "My Favorite colors are $key and hexadecimal values are $value <br>" ;
}

echo "<h1>Q 7. Include 12 months in an array named month and print them using loop statement.</h1>";

$month = array ("January", "Febraury", "March", "April", "May","June","July","August","September","October","November","December");

foreach ($month as $key) {
    echo $key. "<br>";
}

 echo "<h1>Q 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h1>";
/*
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
echo "<h3>Q a. what is explode and what does the below code do? </h3>"; 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;

echo "<h5>Ans: Explode function converts the string into array and the code shows that converted array from string.</h5>";
echo "<h3>Q b. What is count?</h3>";
echo "<h5>Ans: It shows that number of elements in the array.</h5>";
echo "<h2> Calculation average temperature: </h2>";
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}

 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is :  $avg_high_temp"; 

echo "<h3>Q c. what does sort do?</h3>";
echo "<h5>Ans: Sort function arranges the array into ascending alphabetical order.</h5>";
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<h3>Q d. Explain the following loop</h3>";
echo "<h5>Ans: The following loop is being used to find the highest recorded temperatures from the above sorted array. The first condition in the loop is determined the highest temperature values as the array is sorted into ascending alphabetical values and prints the last five values(Highest Values) from the above array and stops the loop.</h5>";
echo "<br>List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>