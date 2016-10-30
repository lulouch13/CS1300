<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
*
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

echo "Loop 1:"."<br>";
// 1. A for loop that iterated through $plain_array and print values
for($i = 0; $i < count($plain_array); $i++) {
	echo "i: $plain_array[$i]"."<br>";
}

echo "<br>"."<br>"."Loop 2:"."<br>";
// 2. A for-each loop that iterates throught $plain_array and print
foreach($plain_array as $value) {
	echo "value: $value"."<br>";
}

echo "<br>"."<br>"."Loop 3:"."<br>";
// 3. A loop that iterates throught $plain_array, tests and 
// print only the integer-valued elements
foreach($plain_array as $value) {
	if(is_int($value)) {
		echo "value: $value"."<br>";
	}
}

echo "<br>"."<br>"."Loop 4:"."<br>";
// 4. A loop that iterates through $assoc_array and prints 
foreach($assoc_array as $key=>$value) {
	echo $key.": $value"."<br>";
}

?>