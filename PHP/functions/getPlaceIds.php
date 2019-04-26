<?php
	function getPlaceIdsFromState($state)
	{
		  $response = Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/US/USD/en-US/?query=".$state,
        array(
        "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
        "X-RapidAPI-Key" => "f2d504134amshdc05db9607e936bp1f596djsndc52c3acfafc"));
        
	    //finds all the unique citys in the selected state
	    $jsonPlaceData = ($response->body->Places);
	    $placeIds = array();
	    foreach($jsonPlaceData as $place)
	    {
	        if(!in_array($place->PlaceId,$placeIds))
	        {
	            $placeIds[] = $place->PlaceId;
	        }
	    }
	    //print_r($placeIds); //will need to create a table that translates city ids to actual cities
	    
	    return $placeIds;
	}
?>