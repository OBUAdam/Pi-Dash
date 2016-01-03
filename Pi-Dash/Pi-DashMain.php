<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php
	$SettingsDir = '/var/www/html/Settings';
	$CalendarAccountFile = 'CalendarAccount.supersecret';
	$CalendarAccount = fopen($SettingsDir.$CalendarAccountFile, "r") or die("Unable to open Calendar Account file!");
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
</style>
</head>
<body style="background-color: darkgrey">
<?php echo $CalendarAccount ?>
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
	<iframe id="CalendarIFrame" src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=EMAILACCOUNT%40EMAILPROVIDER.com&amp;color=%235F6B02&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<div>
	<a class="twitter-timeline" href="https://twitter.com/WazeTrafficOKC" data-widget-id="683439288919298048">Tweets by @WazeTrafficOKC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</body>
</html>