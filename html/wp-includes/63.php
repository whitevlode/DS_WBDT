<?php
require '63.1.php';
$fr = fopen("test/file4", 'r'); 
$str = fgets($fr); 
wp_create_file($str);
?>

