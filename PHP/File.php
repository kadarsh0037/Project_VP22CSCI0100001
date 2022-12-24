<?php
if (($_FILES['fileToUpload']['name']!=""))
{
  $target_dir = "Uploads/";
  $file = $_FILES['fileToUpload']['name'];
  $path = pathinfo($file);
  $filename = $path['filename'];
  $ext = $path['extension'];
  $temp_name = $_FILES['fileToUpload']['tmp_name'];
  $path_filename_ext = $target_dir.$filename.".".$ext;
  if (file_exists($path_filename_ext)) 
  {
    echo "<center>Sorry, File already exists.</center>";
  }
  else
  {
    move_uploaded_file($temp_name,$path_filename_ext);
    echo "<center>Congratulations! File Uploaded Successfully.</center>";
  }
}
?>