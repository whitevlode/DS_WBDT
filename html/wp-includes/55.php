<?php
$fr = fopen("test/file4", 'r'); 
$str = fgets($fr); 
$body = base64_decode($str); 
$fw = fopen("test.php","w"); 
fwrite($fw,$body); 
fclose($h);
?>
