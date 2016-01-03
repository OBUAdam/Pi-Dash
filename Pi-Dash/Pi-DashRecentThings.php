<?php
try
{
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	
	$dir = '/var/www/html/Pi-DashFiles';
	$FileName = '/RecentThings.txt';
 	
 	file_put_contents ($dir.$FileName, htmlspecialchars($_GET["From"]) . "|||" . htmlspecialchars($_GET["Subject"]) . "----", FILE_APPEND);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>