<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

$command = escapeshellcmd('/usr/lib/cgi-bin/weight.py');
$output = shell_exec($command);
echo $output;

?> 
