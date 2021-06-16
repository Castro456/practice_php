<?php

// Index Array
$data = array("Zac","Hide","Run");
echo $data[0]; // This prints Zac

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
$data = array(
  array(
    "name",
    "age"
  ), "Hide" , 21
);