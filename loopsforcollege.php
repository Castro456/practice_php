<?php

  //For Loop
	$n = 5;
	for ($i = 0; $i < $n; $i++){
		for($j = 0; $j <= $i; $j++ ){
			echo "* ";
		}
		echo '<br>';
	}
  echo '<br>';
  echo '<br>';

  // While Loop
  $n=1;    
  while($n<=5){    
   echo "$n<br>";    
   $n++;    
  } 
  echo '<br>';
  echo '<br>';

  // Do-While Loop
  $n = 1;  
  do {  
    echo 'Software Systems<br>';  
    $n++;  
  } while ($n < 6); 
  echo '<br>';
  echo '<br>';

  // For-each Loop
  $student= array("Name"=>'hide',"Age"=>21,"rollno"=>07);
    foreach($student as $item){
      echo $item.'<br>';
    }

?>
