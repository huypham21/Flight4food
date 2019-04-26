<?php
    function createIndex3($postData)
    {
        require_once('Unirest.php');
        $startDate = $postData["start"];
        $endDate = $postData["end"];
        $originAirport = $postData["orig"];
        $destAirport = $postData["dest"];
        var_dump($postData);
        echo "<br><br><br>";
        
        
        //get all available flights on these days in that state
        require_once("functions/index3/parseQuote.php");
        //prints out the corresponding quotes for the best flights on that day
        require_once("functions/index3/findFlightsForAirportCode.php");

        //echo "Destination: " . $city . "(" . $code. ")" ."<br>";
        parseQuote(findFlightsForAirportCode($originAirport,$destAirport,$startDate,$endDate));
    }
    
   ?>