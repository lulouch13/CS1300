<?php


echo "There are various groups that will be present at the Apple Harvest Festival supporting vegetarian lifestyles, co-ops, local produce/business and environmentalism.";
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
$group_links=array("http://cornellveg.org/", "https://greenstar.coop/", "http://www.meetup.com/ithaca-area-vegans/", "http://moosewoodcooks.com/", "http://www.vegandrinks.org");
/* Photo Credit:
vegansociety.png https://twitter.com/Cornell_Vegan

greenstar.png from https://twitter.com/greenstarcoop

meetup.png from https://twitter.com/meetup?lang=en

moosewoodcooks.png from https://twitter.com/TheMoosewood

vegandrinks.png from https://twitter.com/VeganDrinks

*/

function create_list_from_sortedArray(array $associate_sorted_array, $group_links, $photos) {
  echo "<table>";
  $i=0;
  foreach($associate_sorted_array as $key => $value) {
    echo "<tr>";
    echo '<th><a href="'.$group_links[$i].'" target="_blank"><img src="images/'.$photos[$i].'"></a></th>';
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
create_list_from_sortedArray($data_dictionary, $group_links, $photos);

?>