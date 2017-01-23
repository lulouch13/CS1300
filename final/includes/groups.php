<?php

echo "<h1>Looking to get involved?</h1>";
echo "Check out some groups that will be present at the event supporting vegetarianism, co-ops, local businesses and environmentalism!";
echo "<br><br>";

// load the csv file to an array
function load_csv_to_array() {
  $empty_array = [];
  $empty_array = array_map('str_getcsv', file('data/local_outreach_groups.csv'));
  return $empty_array;
}


function convert_to_associateArray(array $normal_array) {
  $associate_array = [];
  foreach($normal_array as $current_line) {
    $associate_array[$current_line[0]] = $current_line[1];
  }
  return $associate_array;
}

// Add logo for each group
$photos=array("vegansociety.png", "greenstar.png", "meetup.png", "moosewoodcooks.png", "vegandrinks.png");
$alt=array("vegansociety", "greenstar", "meetup", "moosewoodcooks", "vegandrinks");
$group_links=array("http://cornellveg.org/", "https://greenstar.coop/", "http://www.meetup.com/ithaca-area-vegans/", "http://moosewoodcooks.com/", "http://www.vegandrinks.org");

/* Photo Credit (in order):
Image (vegansociety.png) taken from: https://twitter.com/Cornell_Vegan

Image (greenstar.png) taken from: https://twitter.com/greenstarcoop

Image (meetup.png) taken from: https://twitter.com/meetup?lang=en

Image (moosewoodcooks.png) taken from: https://twitter.com/TheMoosewood

Image (vegandrinks.png) taken from: https://twitter.com/VeganDrinks

*/

function create_list_from_sortedArray(array $associate_sorted_array, $group_links, $photos, $alt) {
  echo "<table>";
  $i=0;
  foreach($associate_sorted_array as $key => $value) {
    echo "<tr>";
    echo '<th><a href="'.$group_links[$i].'" target="_blank"><img src="images/'.$photos[$i].'" alt="'.$alt[$i].'"></a></th>';
    echo "<th>".$key."</th>";
    echo "<td>".$value."</td>";
    echo "</tr>";
    $i++;
  }
  echo "</table>";
}

// Call the function
$input_data_array = load_csv_to_array();
$data_dictionary = convert_to_associateArray($input_data_array);
create_list_from_sortedArray($data_dictionary, $group_links, $photos, $alt);

?>