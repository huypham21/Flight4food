<?php
function getYelpForCity($cityName)
{
	$cityName = str_replace(" ", "%20", $cityName);

	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.yelp.com/v3/businesses/search?location=$cityName",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "authorization: BEARER tXXMpG0seCHTE2qOyZi0xRMrI9zb1RbPju3JpmIEdpZLxH0gPUGWWsntExwRH7KPVTbY-qqPJmKNqw8ltkYJHGGabKOK-QwDLmDsj6ABe4BMSF-G87AFlZapU7LAXHYx",
	    "cache-control: no-cache",
	    "postman-token: 26157424-5054-5601-ef68-66d05b5d9cc3"
	  ),
));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  //echo $response;
	}
	
	$response = json_decode($response);
	//var_dump($response);
	
	$topTenR = array();
	for($i = 0; $i < 10; $i++)
	{
		$topTenR[] = $response->businesses[$i];
	}
		
	//var_dump($topTenR);
	
	return $topTenR;
}

//getYelpForCity("Houston");
?>