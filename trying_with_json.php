<?php
//This is JSON Object
$data =  '{
  "name" : "Castro",    
  "age" : 21 
}';

// This is JSON Array
$data1 =' {
    "fruits": [
        "Apple",
        "Banana",
        "Strawberry",
        "Mango"
    ]
}';

print_r($data1);
echo '<br>';

$code = json_decode($data);
print_r($code);  //Displays json format to stdClass object
echo '<br>';

$array = json_decode($data, true);
print_r ($array);  //Displays json format to Array
echo '<br>';

$disp = json_encode($data);  //Encodes the data
print_r($disp);  
echo '<br>';

$play = (array) $data;  //JSON within the Array
print_r($play);