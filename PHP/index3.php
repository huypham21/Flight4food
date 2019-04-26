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
    $startDate = $postData["start"];
    $endDate = $postData["end"];
    $originAirport = $postData["orig"];
    $destAirport = $postData["dest"];
    var_dump($postData);
    echo "<br><br><br>";
    
    
    //get all available flights on these days in that state
    require_once("functions/parseQuote.php");
    //prints out the corresponding quotes for the best flights on that day
    require_once("functions/findFlightsForAirportCode.php");

            //echo "Destination: " . $city . "(" . $code. ")" ."<br>";
            parseQuote(findFlightsForAirportCode($originAirport,$destAirport,$startDate,$endDate));
    
   ?>
		
</body>
</html>