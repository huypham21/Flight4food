<?php
function findFlightsForAirportCode($startId,$destId, $startDate, $endDate)
{
	//require_once("dateConverter.php");
	//$startDate = dateConverter($startDate);
	//$endDate = dateConverter($endDate);
	
	$response = Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browseroutes/v1.0/US/USD/en-US/$startId/$destId/$startDate?inboundpartialdate=$endDate",
  array(
    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
    "X-RapidAPI-Key" => "f2d504134amshdc05db9607e936bp1f596djsndc52c3acfafc"
  ));
  
  //var_dump($response);
  return $response->body;
}


?>
