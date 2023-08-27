<?php

function write_text($n,$t) {
$fw = fopen($n,"w"); 
fwrite($fw,$t); 
}

?>
