<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link href="styles/awesomplete.css" rel="stylesheet" id="awesomplete-css">
   <link href="styles/styles.css" rel="stylesheet" id="styles">

   <script src="js/jquery-3.3.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/awesomplete.js"></script>
   <!------ Include the above in your HEAD tag ---------->
</head>
<body>
   <?php
    include 'Unirest.php';
    $postData = $_POST;
    $startDate = $postData["tripStart"];
    $endDate = $postData["tripEnd"];
    $originAirport = $postData["airportList"];
    var_dump($postData);
    echo "<br><br><br>";
    
    
    //get all available flights on these days in that state
    require_once("functions/parseQuote.php");
    require_once("functions/getCityFromAirport.php");
    //prints out the corresponding quotes for the best flights on that day
    include "functions/getYelpForCity.php";
    require_once("functions/findFlightsForAirportCode.php");
    require_once("functions/getWeatherData.php");
    $count = 0;
    foreach($iataToCity as $city=>$code)
    {
       if($count > 2)
       {
          break;
       }
            echo "Destination: " . $city . "(" . $code. ")" ."<br>";
            //parseQuote(findFlightsForAirportCode($originAirport,$code,$startDate,$endDate));
            
            $restData = getYelpForCity($city);
            foreach($restData as $rest)
            {
                echo $rest->name . "<br>";
            }
            
            var_dump(getWeatherData($city,$startDate));
            
            echo '<form action="index3.php" method="post">
               <input type="hidden" id="custId" name="start" value='.$startDate.'>
               <input type="hidden" id="custId" name="end" value='.$endDate.'>
               <input type="hidden" id="custId" name="orig" value='.$originAirport.'>
               <input type="hidden" id="custId" name="dest" value='.$code.'>
               <input type="submit">
            </form>';
            
            echo "<br><br>";
                        $count++;
    }
    
   ?>
		
</body>
</html>