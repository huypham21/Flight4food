<?php

function createIndex2Element($city, $code, $startDate, $endDate, $originAirport)
{
        $restData = getYelpForCity($city);
            
        $weatherData = getWeatherData($city,$startDate);

echo '<div class="panel-group" id="accordion">
        <div class="panel panel-default container">
                <div class="panel-heading">
                        <div class="panel-title">
                                <div class = "row">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#' . $code . '-collapse">
                                                <div class = "col-xs-10">
                                                        <span class="glyphicon glyphicon-plus"></span>' . "Destination: " . $city . "(" . $code. ")" .
                                                '</div>
                                        </a>
                                                <div class = "col-xs-2">
                                                        <form action="index3.php" method="post">
                                                       <input type="hidden" id="custId" name="start" value='.$startDate.'>
                                                       <input type="hidden" id="custId" name="end" value='.$endDate.'>
                                                       <input type="hidden" id="custId" name="orig" value='.$originAirport.'>
                                                       <input type="hidden" id="custId" name="dest" value='.$code.'>
                                                       <input type="submit" value="Show Flights">
                                                        </form>
                                                </div>
                                </div>
                        </div>
                </div>

                <div id="' . $code . '-collapse" class="panel-collapse collapse">
                        <div class="panel-body recipe-description">';
                        
                        //Restraunt Information
                        echo '<ul>Top Restaurants<hr>';
                        foreach($restData as $rest)
                        {
                                echo '<li>Name: ' . $rest->name . '</li>';
                                echo "<ul>
                                        <li>Price: $rest->price</li>
                                        <li>Rating: $rest->rating</li>
                                        <li>Phone Number: $rest->phone</li>
                                        <li>Website: <a href='$rest->url'>YELP!</a></li>
                                        </ul>";
                        }
                        echo '<hr></ul>';
                        
                        var_dump($weatherData);
                        
                        
                        //end data here
echo '                  </div>
                </div>
        </div>
</div>';


}

?>
