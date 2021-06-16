<?php

$server_name = "localhost";
$user_name = "root";
$password = "giveaccess";
$dbname = "rest_php_api";

$conn = mysqli_connect($server_name,$user_name,$password,$dbname);

$id = 2;
$query = "SELECT name FROM students WHERE id = ? ";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $query)) {
  echo "Connection Error";
}else {
  mysqli_stmt_bind_param($stmt,"i",$id);
  mysqli_execute($stmt);
  $results = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($results)) {
    echo "Names:".$row['name'];
  }
}