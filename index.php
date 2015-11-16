<head>
<meta charset="UTF-8">
<meta name="description" content="Halifax UK weather station and webcam">
<meta name="keywords" content="Halifax UK, webcam,weather cam,weather station,weather alert">
<meta name="author" content="Darron Mullen">
</head>
<html>
<body bgcolor="#242424">
<font color="#c0c0c0">
<title>Dazbobaby's Weather Cam</title>
<center>Page refreshes every 5 minutes</br></center>
<style>
#rcorners3 {
	-moz-border-radius: 5px;
    border-radius: 5px;
    background: url(weathercam.jpg);
    background-position: left top;
    width: 900px;
    height: 562px;    
}
</style><center>
<div style="width:900px;height:562px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;background:rgba(36,36,36,0.8);-webkit-box-shadow: #121212 10px 10px 10px;-moz-box-shadow: #121212 10px 10px 10px; box-shadow: #121212 10px 10px 10px;">
<center><img src="weathercam.jpg" height=562 width=900></div>

<meta http-equiv="refresh" content="300"></br></br>
</head>
</html>

<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/MY-API-KEY/geolookup/conditions/q/UK/Halifax.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
  $relative_humidity = $parsed_json->{'current_observation'}->{'relative_humidity'};
  $precip_today_string = $parsed_json->{current_observation}->{'precip_today_string'};
  $windchill_c = $parsed_json->{current_observation}->{'windchill_c'};
  $wind = $parsed_json->{current_observation}->{'wind_string'};
  $pressure = $parsed_json->{current_observation}->{'pressure_mb'};

  
  echo "Current temperature in ${location} is: ${temp_c}°c and the wind is ${wind} with a windchill that makes it feel like ${windchill_c}°c.<br />\n";
  echo "Relative humidity is ${relative_humidity}, the pressure is ${pressure} and the rainfall is currently at ${precip_today_string} in the past 24 hours.\n";

?>


