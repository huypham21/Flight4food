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
    
    <p>Select Origin Airport</p>
    <?php
    require_once("functions/getCityFromAirport.php");
    //need rider to select airport they will fly from
    echo '<select name="airportList" form="airportForm">';
    foreach($iataToCity as $key=>$value)
    {
        echo '<option value="' .$value. '">' . $key . "(" . $value . ")</option>";
    }
    echo "</select>";
    ?>
   
   
   
   <form action="index2.php" id="airportForm" method="post">
      <input type="date" id="start" name="tripStart"
       value="2019-04-24"
       min="2018-01-01" max="2019-12-31">
      <input type="date" id="end" name="tripEnd"
       value="2019-04-24"
       min="2018-01-01" max="2019-12-31">
     <input type="submit">
   </form>
			
		
</body>
</html>