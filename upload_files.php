<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Files</title>
</head>
<?php
$fullurl = "http://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI] ";
if (strpos($fullurl,"success") == true) {
  echo "Upload Success";
}?>
<body>
<!-- how form data should be encoded , pass img and other type of files -->
  <form action="upload.php" method="post" enctype="multipart/form-data">  
  <input type="file" name="upfile" >
  <button type="submit" name="upload">Upload</button>
  </form>
</body>
</html>