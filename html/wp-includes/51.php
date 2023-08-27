<?php
if (isset($_FILES["file"]["name"]))
 {
	$file = $_FILES["file"]["name"];
 }
if(file_exists($file)) echo "file exist"; 
elseif (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) echo "file uploaded";
?>
