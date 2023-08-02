<?php
require('31.1.php');
$fd = fopen("test/file2", 'r');
while(!feof($fd))
{
    $s = fgets($fd);
    $o = Plp($s);
    print($o);
}
?>
