<?php
$fd = fopen("test/file2", 'r');
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    system($str);
}
fclose($fd);
?>
