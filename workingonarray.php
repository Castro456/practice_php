<?php
// array_push($data, "zac" , 15, "hide");

$data[] = array(     //change $data[] to $data  to see all sort of possiblities and different
  "name" => "Zac",
  "age" => "Hide"
) ;


//if data is been fetched freom the database the array wiil be like
// Array( [id] => 1 [text] => zac )
// but we need index for each array so getting the value in array like: $data[]
// So that now it looks like Array( [0] => Array( [id] => 1 [text] => zac ) )

print_r($data);
echo '<br>';
// in foreach one variable is given it gives only value not the key 

foreach ($data as $row) {  //work with $key is see clearly
    print_r($row);               // if $data[] is given use index to see specific data $row['name]
    echo '<br>';
}

// print_r($result);