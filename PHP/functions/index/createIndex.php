    <p>Select Origin Airport</p>
    <?php
    require_once("getCityFromAirport.php");
    //need rider to select airport they will fly from
    echo '<select name="airportList" form="airportForm">';
    foreach($iataToCity as $key=>$value)
    {
        echo '<option value="' .$value. '">' . $key . "(" . $value . ")</option>";
    }
    echo "</select>";
   
   
   
   echo '<form action="index2.php" id="airportForm" method="post">
      <input type="date" id="start" name="tripStart"
       value="'.date("Y-m-d").'"
       min="'.date("Y-m-d").'" max="2019-12-31">
      <input type="date" id="end" name="tripEnd"
       value="'.date("Y-m-d").'"
       min="'.date("Y-m-d").'" max="2019-12-31">
     <input type="submit">
   </form>';
	?>