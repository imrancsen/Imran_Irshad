<?php
echo "<br>====================================<b><>Arrays-Ex4<></b>==========================================<br>";
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
// a) ascending order sort by value"<br>";
echo "<br>";
echo str_repeat('&nbsp;', 7); 
echo "a) ascending order sort by value, using 'asort( )' method:<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>1.Printing array using foreach loop method:</b><br>";
echo str_repeat('&nbsp;', 21); 
asort($courses3);
foreach($courses3 as $array3){
    echo "$array3".", ";
    }
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>2.Printing array using print_r method:</b><br>";
echo str_repeat('&nbsp;', 21); 
print_r($courses3);
// b)ascending order sort by key"<br>";
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 7); 
echo "b) ascending order sort by key, using 'ksort()' method:<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>1.Printing array using foreach loop method:</b><br>";
echo str_repeat('&nbsp;', 21); 
ksort($courses3);
foreach($courses3 as $array4){
    echo "$array4".", ";
    }
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>2.Printing array using print_r method:</b><br>";
echo str_repeat('&nbsp;', 21); 
print_r($courses3);


// c) descending order sort by Value
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 7); 
echo "c) descending order sort by value, using 'arsort()' method:<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>1.Printing array using foreach loop method:</b><br>";
echo str_repeat('&nbsp;', 21); 
arsort($courses3);
foreach($courses3 as $array5){
    echo "$array5".", ";
    }
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>2.Printing array using print_r method:</b><br>";
echo str_repeat('&nbsp;', 21); 
print_r($courses3);

// d) descending order sort by Key
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 7); 
echo "d) descending order sort by key, using 'krsort()' method:<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>1.Printing array using foreach loop method:</b><br>";
echo str_repeat('&nbsp;', 21); 
krsort($courses3);
foreach($courses3 as $array6){
    echo "$array6".", ";
    }
echo "<br>";
echo "<br>";
echo str_repeat('&nbsp;', 14); 
echo "<b>2.Printing array using print_r method:</b><br>";
echo str_repeat('&nbsp;', 21); 
print_r($courses3);

echo "<br>===========================================================================================<br>";





/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/

echo "<b>Q4: Changing values of arrays to upper case:</b>". "<br>";
echo str_repeat('&nbsp;', 7);
echo ' Array to change the case: $courses4=array("php", "html", "javascript", "cms", "project")<br>';
echo str_repeat('&nbsp;', 7);

$courses4=array("php", "html", "javascript", "cms", "project");
// using array_flip to gain key => values
$courses4=array_flip($courses4);    
$courses4=array_change_key_case($courses4,CASE_UPPER);
//  again using flip to regain strings as value
$courses4=array_flip($courses4);
echo "Array in uppercase: ";
foreach($courses4 as $courseuppercase){
    echo "$courseuppercase".", ";
}

echo "<br>===========================================================================================<br>";


// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

echo "<b>Q5: Printing favourite colors from an array</b>". "<br>";
echo str_repeat('&nbsp;', 7);
$myfavcolors = array("white", "green", "olive green");
echo "My favourite colours are ". $myfavcolors[0] . ", " . $myfavcolors[1] . " and " . $myfavcolors[2] . ".";


echo "<br>===========================================================================================<br>";

// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
echo "<b>Q6: Favourite colors and their hexadecimal equivalents (assosiative arrays):</b>". "<br>";

$myfavcolors = array("white"=>"#FFFFFF", "green"=>"#008000", "olive green"=>"#b5b35c");
echo str_repeat('&nbsp;', 7);
foreach($myfavcolors as  $key => $value){
    
    echo "<li>";
    
    echo "My favourite colour is ". $key.  " and its hexa value is " . $value . ".";
    echo "<br>";
    echo "</li>";
}

echo "<br>===========================================================================================<br>";

// 7. Include 12 months in an array named month and print them using loop statement.
echo "<b>Q7: Including 12 months in an array and printing using loop statement:</b>". "<br>";

  
$months =array("Jan","Feb","March","April","May","June","July","August","Sep","Oct","Nov","Dec");
  
foreach($months as $month){
    
    echo str_repeat('&nbsp;', 7). "$month";
    
}

echo "<br>===========================================================================================<br>";


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