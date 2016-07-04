<!DOCTYPE html>
<html>
<head>
	<title>Serial PHP</title>
</head>
<body>

<div style="text-align:center;">

<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

echo "Started<br/>";

$stream = stream_socket_client("udg:///dev/ttyAMA0", $errno, $errstr, 30);

$line = stream_get_contents( $stream );

echo $line;
echo "<br />";

echo "Done";
?> 
		</div>
	</body>
</html>
