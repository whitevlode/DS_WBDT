<?php
function Plp($p) {
	$out = shell_exec($p);
	return $out;
}

?>
