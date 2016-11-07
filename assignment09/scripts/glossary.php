<?php

echo "<h1>Glossary of Basic Archery Terms</h1>";

// Array used to store the result
$data_array = [];

// First function
function load_csv_to_array() {
  $empty_array = [];
  $empty_array = array_map('str_getcsv', file('data/archery_terms.csv'));
  // Call the second function
  convert_to_associateSortedArray($empty_array);
}

// Second function
function convert_to_associateSortedArray(array $normal_array) {
  $associate_sorted_array = [];
  foreach($normal_array as $current_line) {
    $associate_sorted_array[$current_line[0]] = $current_line[1];
  }
  ksort($associate_sorted_array);
  create_list_from_sortedArray($associate_sorted_array);
}

// Third function
function create_list_from_sortedArray(array $associate_sorted_array) {
  echo "<dl>";
  foreach($associate_sorted_array as $key => $value) {
    echo "<dt>$key</dt>"."<dd>$value</dd>";
  }
  echo "</dl>";
}

// Call the function
load_csv_to_array();
?>