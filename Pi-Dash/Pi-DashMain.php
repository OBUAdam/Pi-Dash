<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php
	$SettingsDir = '/var/www/html/Settings';
	$CalendarAccountFileName = '/CalendarAccount.supersecret';
	$CalendarAccountFile = fopen($SettingsDir.$CalendarAccountFileName, "r") or die("Unable to open Calendar Account file!");
	$CalendarAccount = fread($CalendarAccountFile, filesize($SettingsDir.$CalendarAccountFileName)) or die("Unable to read Calendar Account file!");
	
	$RecentThingsDir = '/var/www/html/Pi-DashFiles';
	$RecentThingsFileName = '/RecentThings.txt';
	$RecentThingsFile = fopen($RecentThingsDir.$RecentThingsFileName, "r") or die("Unable to open Recent Things file!");
	$RecentThingsString = fread($RecentThingsFile, filesize($RecentThingsDir.$RecentThingsFileName)) or die("Unable to read Recent Things file!");
	$RecentThings = explode("----", $RecentThingsString);
	
	$ThingsList = "<ul id=\"RecentThingsList\">";
	foreach ($RecentThings as &$Thing)
	{
		$ThingParts = explode("|||", $Thing);
		
		if(count($ThingParts) == 2)
		{
			$ThingsList = $ThingsList . "<li>From: " . $ThingParts[0] . " Subject: " . $ThingParts[1] . "</li>";
		}
	}
	$ThingsList = $ThingsList . "</ul>";
?>

<head>
<title>Pi-Dash</title>
<meta name="" content="">
<style>
	#DateAndTimeDiv
	{
	    width    : 1000px;
	    height   : 125px;
	    overflow : hidden;
	    position : relative;
	    margin: auto;
	}
	#DateAndTimeIFrame
	{
	    position : absolute;
	    top      : -123px;
	    left     : -2px;
	    width    : 1000px;
	    height   : 275px;
	}
	
	#WeatherDiv
	{
	    width    : 615px;
	    height   : 275px;
	    overflow : hidden;
	    position : relative;
	    float: left;
	}
	#WeatherIFrame
	{
	    position : absolute;
	    top      : -285px;
	    left     : -15px;
	    width    : 1000px;
	    height   : 1000px;
	}
	
	#WazeDiv
	{
	    width    : 525px;
	    height   : 480px;
	    overflow : hidden;
	    position : relative;
	    float: left;
	}
	#WazeIFrame
	{
	    position : absolute;
	    top      : 0px;
	    left     : 0px;
	    width    : 500px;
	    height   : 480px;
	}
	
	#CalendarDiv
	{
	    width    : 615px;
	    height   : 275px;
	    overflow : hidden;
	    position : relative;
	    float: left;
	}
	
	#CalendarIFrame
	{
	    position : absolute;
	    top      : 0px;
	    left     : 0px;
	    width    : 1000px;
	    height   : 1000px;
	}
	
	#FrontPorchDiv
	{
	    width    : 640px;
	    height   : 480px;
	    overflow : hidden;
	    position : relative;
	    float: right;
	}
	#FrontPorchIFrame
	{
	    position : absolute;
	    top      : 0px;
	    left     : 0px;
	    width    : 940px;
	    height   : 980px;
	}
	
	#GarageCameraDiv
	{
	    width    : 640px;
	    height   : 480px;
	    overflow : hidden;
	    position : relative;
	    float: left;
	}
	#GarageCameraIFrame
	{
	    position : absolute;
	    top      : -230px;
	    left     : -43px;
	    width    : 940px;
	    height   : 980px;
	}
	
	#RecentThingsListDiv
	{
		background-color: #7e7e7e;
		width    : 525px;
		height: auto;
		float: left;
	}
	#RecentThingsList
	{
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
	li
	{
		font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
		border-bottom: 1px solid #ccc;
		background-color: #b5b5b5;
	}
	li:last-child
	{
		border: none;
	}
	#RecentThingsHeader
	{
		font: 400 40px/1.5 Helvetica, Verdana, sans-serif;
		margin: 0;
		padding: 0;
	}
</style>
</head>
<body style="background-color: darkgrey">
<div id="DateAndTimeDiv">
	<iframe id="DateAndTimeIFrame" src="http://www.timeanddate.com/worldclock/fullscreen.html?n=184"></iframe>
</div>
<!--<div id="WeatherDiv">
	<iframe id="WeatherIFrame" src="http://m.weather.com/weather/tomorrow/73170" scrolling="no"></iframe>
</div>-->
<div id="WeatherDiv">
	<iframe id="WeatherIFrame" src="http://www.accuweather.com/en/us/oklahoma-city-ok/73102/weather-forecast/350143" scrolling="no"></iframe>
</div>
<div id="WazeDiv">
	<iframe id="WazeIFrame"	src="https:/embed.waze.com/iframe?zoom=12&lat=35.41941&lon=-97.52289"></iframe>
</div>
<div id="CalendarDiv">
	<iframe id="CalendarIFrame" src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=<?php echo $CalendarAccount; ?>&amp;color=%235F6B02&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<div>
	<a class="twitter-timeline" href="https://twitter.com/WazeTrafficOKC" data-widget-id="683439288919298048">Tweets by @WazeTrafficOKC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div id="RecentThingsListDiv">
	<h2 id="RecentThingsHeader">Recent Things:</h2>
	<?php echo $ThingsList; ?>
</div>
</body>
</html>