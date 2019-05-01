<?php

function createIndex2Element($city, $code, $startDate, $endDate, $originAirport)
{
        $restData = getYelpForCity($city);
            
        $weatherDataStart = getWeatherData($city,$startDate);
        $weatherDataEnd = getWeatherData($city, $endDate);

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
                        echo '<div class= "row">';
                        echo '<ul>Top Restaurants<hr>';
                        echo '</div>';
                        
                        $count = 0;
                        foreach($restData as $rest)
                        {
                                if($count % 2 == 0)
                                {
                                        if($count > 0)
                                        {
                                                echo '</div>';
                                        }
                                        echo '<div class="row">';
                                }
                                
                                echo '<div class="col-xs-6">';
                                echo '<li>Name: ' . $rest->name . '</li>';
                                echo "<ul>
                                        <li>Rating: $rest->rating/5 Stars</li>
                                        <li>Category: " . $rest->categories[0]->title . "</li>
                                        <li>Phone Number: $rest->phone</li>
                                        </ul>";
                                echo '</div>';
                                //<li>Price: $rest->price</li>
                                //<li>Website: <a href='$rest->url'>YELP!</a></li>
                                
                                $count++;
                        }
                        echo '</div>';
                        echo '<hr></ul>';
                        
                        echo '<div class="row">';
                        
                        echo '<div class="col-xs-6">';
                        echo '<ul>Arrival Weather:<hr>';
                        echo "<li>Temperature: ". ((($weatherDataStart->main->temp) - 273.15) * 9 /5 + 32) . "*F</li>";
                        if(isset($weatherDataStart->rain->{'3h'}))
                        {
                                echo "<li>Chance of Rain: " . $weatherDataStart->rain->{'3h'} * 100 . "%</li>"; 
                        }
                        else
                        {
                                echo "<li>Chance of Rain: " . 0 . "%</li>"; 
                        }
                        echo "<hr></ul>";
                        echo '</div>';
                        
                        echo '<div class="col-xs-6">';
                        echo '<ul>Departure Weather:<hr>';
                        echo "<li>Temperature: ". ((($weatherDataEnd->main->temp) - 273.15) * 9 /5 + 32) . "*F</li>";
                        if(isset($weatherDataStart->rain->{'3h'}))
                        {
                                echo "<li>Chance of Rain: " . $weatherDataEnd->rain->{'3h'} * 100 . "%</li>"; 
                        }
                        else
                        {
                                echo "<li>Chance of Rain: " . 0 . "%</li>"; 
                        }
                        echo "<hr></ul>";
                        echo '</div>';
                        
                        //end data here
echo '                  </div>
                </div>
        </div>
</div>';


}

?>
