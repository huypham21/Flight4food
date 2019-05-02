
    <?php require_once("getCityFromAirport.php");?>
    
    <div class="container">
       <br><br><br><br>
       <div class="row">
          <div class="col-xs-6 col-xs-offset-3 text-center">
             <form action="index2.php" id="airportForm" method="post">
             <h1>Trip Finder Tool</h1>
             <p>Please input your home airport, departure, and return date below:</p>
             <p>
                Home Airport: <span class="glyphicon glyphicon-home"></span>
                <?php
                echo '<select name="airportList" form="airportForm">';
                foreach($iataToCity as $key=>$value)
                {
                    echo '<option value="' .$value. '">' . $key . "(" . $value . ")</option>";
                }
                echo "</select>";
                ?>
             </p>
             <p>
                Departure Date: <span class="glyphicon glyphicon-chevron-right"></span>
                <?php
                  echo '<input type="date" id="start" name="tripStart"
                  value="'.date("Y-m-d").'"
                  min="'  .  date("Y-m-d")  .  '" max="'. date('Y-m-d', strtotime(' + 4 days')) .'">';
                ?>
             </p>
             <p>
                Return Date: <span class="glyphicon glyphicon-chevron-left"></span>
                <?php
                echo '<input type="date" id="end" name="tripEnd"
                  value="'.date("Y-m-d").'"
                  min="'  .  date("Y-m-d")  .  '" max="'. date('Y-m-d', strtotime(' + 4 days')) .'">'; 
                ?>
             </p>
             <input type="submit">
            </form>
          </div>
       </div>
    </div>
   
   
	
	