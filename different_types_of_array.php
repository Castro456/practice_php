<?php

// Index Array
$data = array("Zac","Hide","Run");
echo $data[0]; // This prints Zac
echo '<br>';
print_r($data);

// Associative Array
$data = array(
  "name" => "Zac",
  "age" => 20,
  "game" => "valorant"
); //to call specific field must use its index

// This is also associative array
$anotherdata["name"] = "Zac";
$anotherdata["age"] = 20;
print_r($anotherdata); //This prints all the value Array([name] => Zac [age] => 20)

// Multidimentional Array
$multidata = array(  //can also get array values in array like $multidata[1] or any index names can be given
  array(
    "name" => "Hikki",
    "age" => 17
  ), "Hide" , 21
);
echo '<br>';
print_r($multidata[0]['name']); //to print array within an array now it prints Hikki
echo '<br>';

foreach ($multidata as $row) { //$row prints only elements not index, so in here hikki and 21 is becomes just like  values so there is no way of calling thoes values, for array name and age can be only called if in foreach $multidata[0] is mentioned
  print_r($row);
}