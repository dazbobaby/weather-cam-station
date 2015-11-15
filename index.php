<head>
<meta charset="UTF-8">
<meta name="description" content="Halifax UK weather station and webcam">
<meta name="keywords" content="Halifax UK, webcam,weather cam,weather station,weather alert">
<meta name="author" content="dazbobaby">
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
  $json_string = file_get_contents("http://api.wunderground.com/api/MY_API_CODE_GOES_HERE/geolookup/conditions/q/UK/Halifax.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
  $wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
  $wind_gust_mph = $parsed_json->{'current_observation'}->{'wind_gust_mph'};
  $relative_humidity = $parsed_json->{'current_observation'}->{'relative_humidity'};
  $precip_today_string = $parsed_json->{current_observation}->{'precip_today_string'};
  
  echo "Current temperature in ${location} is: ${temp_c}°c and current wind speed is: ${wind_mph}mph, with a gust of ${wind_gust_mph}mph<br />\n";
  echo "Relative humidity is ${relative_humidity} and the rainfall is currently at ${precip_today_string} in the past 24 hours\n";
?>

<p style="text-shadow:1px 1px 1px rgba(168,168,168,1);font-weight:normal;color:#C0C0C0;border: 1px solid #FFFFFF;letter-spacing:1pt;word-spacing:2pt;font-size:14px;text-align:left;font-family:arial, helvetica, sans-serif;line-height:1;margin:15px;padding:23px;width:900px;">Ok so this is what I've got so far, Webcam: HP 2300 HD, it's a cheap webcam (as you can see) but it'll do for now, then I use <a href="https://www.ispyconnect.com/download.aspx">iSpy64</a> for grabbing an image from the webcam and uploading to my FTP server.

Then I use <a href="http://wunderground.com">Weather underground</a> to fetch the local data.</br>
</br>
The total cost of the software is free, only the camera had to be paid for!
Now for my PHP Code:</br> <a href="http://mess-hall.co.uk/viewtopic.php?f=75&t=7487&p=47121#p47121">The Mess-Hall forum</a>
</p></center>
<center></br>

