<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
try
{
	echo 'START!';
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	
	$dir = '/var/www/html/Pi-DashFiles';
	$FileName = '/Test.txt';
 	
 	file_put_contents ($dir.$FileName, htmlspecialchars($_GET["name"]), FILE_APPEND);
	echo $FileName;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
echo 'Hello ' . htmlspecialchars($_GET["name"]) . 'END!';
?>