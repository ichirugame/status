<?php
$filename = "../log/mobile_access_log.txt";
$time = date("Y/m/d H:i");
$ip = getenv("REMOTE_ADDR");
$host = getenv("REMOTE_HOST");

$log = $time .",". $ip . ",". $host;

$fp = fopen($filename, "a");
fputs($fp, $log."\n");
fclose($fp);
?>