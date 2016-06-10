#!./bin/php7/bin/php
<?php
//$version = trim($_SERVER["argv"][1]);
$server = proc_open(PHP_BINARY . " src/pocketmine/PocketMine.php --no-wizard --disable-readline", [
	0 => ["pipe", "r"],
	1 => ["pipe", "w"],
	2 => ["pipe", "w"]
], $pipes);
sleep (5);
fwrite($pipes[0], "version\n");
sleep (5);
fwrite($pipes[0], "compileplugin Plugswork\n");
sleep (5);
fwrite($pipes[0], "stop\n");
while(!feof($pipes[1])){
	echo fgets($pipes[1]);
}
fclose($pipes[0]);
fclose($pipes[1]);
fclose($pipes[2]);
exit (0);
exit (1);
