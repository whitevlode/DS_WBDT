<?php

require('47.1.php');
$f = fopen("test/file3",'r');
$a = fgets($f);
$ds = explode(":", $a);
$rf = new class47();
$rf -> run($ds[0],$ds[1]);

?>
