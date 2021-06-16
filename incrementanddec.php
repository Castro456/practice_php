<?php
$x = 10;
echo $x++;
echo $x;
echo $x;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alert </title>
</head>
<body>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js">
$(".alert").alert('dispose');
</script>
</body>
</html>