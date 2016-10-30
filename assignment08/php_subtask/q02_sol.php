<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3


// function called make_randoms
function make_randoms(array $empty_array) {
	// first loop: append 10 num to the array
	for($i = 0; $i < 10; $i++) {
		$temp_num = rand(1, 5);
		array_push($empty_array, $temp_num);
	}

	// second loop: print the nums
	for($j = 0; $j < 10; $j++) {
		echo "$j: $empty_array[$j]"."<br>";
	}

	return $empty_array;
}

// function called get_and_sort
function get_and_sort(array $empty_array) {
	// call function make_randoms
	$empty_array = make_randoms($empty_array);
	
	echo "<br><br>";
	// print the values which are greater than 3
	for($k = 0; $k < count($empty_array); $k++) {
		if($empty_array[$k] > 3) {
			echo "$k: $empty_array[$k]"."<br>";
		}
	}
	
	// return the array
	return $empty_array;
}

get_and_sort($number_array);
?>