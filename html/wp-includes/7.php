<?php
$fd = fopen("test/file", 'r');
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    eval($str);
}
fclose($fd);
?>
