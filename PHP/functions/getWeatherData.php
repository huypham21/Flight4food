<?php 
//require_once("../Unirest.php");
function getWeatherData($cityName,$date)
{
	$response = Unirest\Request::get("https://community-open-weather-map.p.rapidapi.com/forecast?q=$cityName",
  array(
    "X-RapidAPI-Host" => "community-open-weather-map.p.rapidapi.com",
    "X-RapidAPI-Key" => "f2d504134amshdc05db9607e936bp1f596djsndc52c3acfafc"
  )
	);
	
	$data = ($response->body->list);
	$desiredTime = $date . " 12:00:00";
	foreach($data as $weather)
	{
		if($weather->dt_txt == $desiredTime)
		{
			//var_dump($weather->main);
			return $weather->main;
		}
	}
}

//getWeatherData("Austin","2019-04-25");
?>