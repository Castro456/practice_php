<?php

if (isset($_POST['upload'])) {
  $file = $_FILES['upfile'] ; //super global gets info of the upload file
  // print_r($file);

  $filename = $file['name']; //can also write as $_FILES['upfile']['name']
  // print_r($filename);
  $filetype = $file['type'];
  $fileTmpname = $file['tmp_name'];
  $fileerror= $file['error'];
  $filesize = $file['size'];

  // $check = "Running";
  // $c1 = explode('n',$check);  //practice of explode fn
  // print_r($c1);

  $fileExe = explode('.',$filename); //explode seperate array based given what condition 
  // print_r($fileExe);
  $fileActualExe = strtolower(end($fileExe)); //we need extension so its end of $filename, strtolower to ensure all extensions ar lower
  $allowed = array('jpg', 'jpeg', 'pdf');

  if (in_array($fileActualExe, $allowed)) {
    if ($fileerror === 0) {
      if ($filesize < 50000) {
        $fileNameNew = uniqid('', true) . "." .$fileActualExe ; //if doest change the actual name if another user add same filename old one gets overrided and deleted, '' any string can be given, true provides more unique 23char long
        $destination = "uploads/" . $fileNameNew;
        move_uploaded_file($fileTmpname,$destination);  //fn that moves the file 
        header("Location: upload_files.php?success");
      }else {
        echo "File is too Large";
      }
    }else {
      echo "Error while uploading a file!";
    }
  }else {
    echo "File format not suppoeted";
  }
}else {
  echo "Upload a File";
}