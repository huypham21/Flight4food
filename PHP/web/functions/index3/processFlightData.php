<?php

function processFlightData($data, $sDate, $eDate)
{
	$carriers = $data->Carriers;
	//var_dump($carriers);
	$quotes = $data->Quotes;
	//var_dump($quotes);
	echo '<div class="container>
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">';
	echo '<h2>Information About Available Flights to This Destination</h2><hr>';
	echo "<ol>Available Flights: [Departure: $sDate, Return: $eDate]<hr>"; 
	foreach($quotes as $quote)
	{
		//var_dump($quote);
		$cost;
		$dTime;
		$plane;
		$cost = $quote->MinPrice;
		$dTime = $quote->OutboundLeg->DepartureDate;
		foreach($carriers as $carry)
		{
			if($carry->CarrierId === $quote->OutboundLeg->CarrierIds[0])
			{
				$plane = $carry->Name;
			}
		}
		
		echo "<li>Cost: $$cost , Carrier: $plane</li><hr>";
	}
	if(count($quotes) < 1)
	{
		echo "<p>No available flights for the given date range to this destination, sorry for the inconvinience.</p>";
	}
	echo "</ol>";
	
	echo '</div></div></div>';
}

?>