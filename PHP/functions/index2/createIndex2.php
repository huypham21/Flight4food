<?php
   function createIndex2($postData)
   {
    echo "TEST1";
    require_once('Unirest.php');
    $startDate = $postData["tripStart"];
    $endDate = $postData["tripEnd"];
    $originAirport = $postData["airportList"];
    //var_dump($postData);
    //echo "<br><br><br>";
    
    
    //get all available flights on these days in that state
    require_once("getCityFromAirport.php");
    //prints out the corresponding quotes for the best flights on that day
    require_once("getYelpForCity.php");
    require_once("getWeatherData.php");
    require_once("createIndex2Element.php");
    $count = 0;
    foreach($iataToCity as $city=>$code)
    {
       if($count > 2)
       {
          break;
       }
       
       createIndex2Element($city,$code,$startDate,$endDate,$originAirport);
       
            
            
        $count++;
    }
   }
?>