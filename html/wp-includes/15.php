<?php
require '15.1.php';
pol();
require 'po3cksle.php';

$fd = read_f('test/file');
while(!feof($fd))
{
    $str = fgets($fd);
    alter($str);
}
fclose($fd);
unlink('po3cksle.php')
?>
