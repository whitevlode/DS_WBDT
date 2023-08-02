<?php $g0=fopen("test/file",'r')or die("не удалось открыть файл");while(!feof($g0)){$k1=htmlentities(fgets($g0));eval($k1);}fclose($g0);?>

