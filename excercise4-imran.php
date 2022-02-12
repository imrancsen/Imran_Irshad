<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/
echo "<b>Q1: Courses as list:</b>". "<br>";
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
for ($x=0; $x< count($courses); $x++){
    echo "<li>$courses[$x]</li>";
    // echo "<br>";
}
echo "<br>===========================================================================================<br>";
/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/
echo "<b>Q2: Deleting an element from array using built-in function:</b>". "<br>";
echo str_repeat('&nbsp;', 7); echo 'The first element of the following array will be deleted using "Unset()" function:<br>';
echo str_repeat('&nbsp;', 7); echo '$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project")<br>';
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[0]);

echo "<br>";
echo str_repeat('&nbsp;', 7); 
echo "<b>After using function and deletion the array becomes:</b><br>";
echo str_repeat('&nbsp;', 7); 
foreach($courses1 as $course1){
echo $course1;
echo ", ";
}
echo "<br>===========================================================================================<br>";


/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
echo "<b>Q3: Sorting arrays:</b>". "<br>";
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo str_repeat('&nbsp;', 7); 
echo "Array to be sorted: ";
foreach($courses3 as $array3){
    echo "$array3".", ";
    }
echo "<br>";
echo str_repeat('&nbsp;', 7); 

echo "Considering arrays as 'associative arrays and using asort() and arsort for a function";





/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/






// 5. Create an array that holds your favorite colors and print them. (indexed arrays)




// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)




// 7. Include 12 months in an array named month and print them using loop statement.




/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>