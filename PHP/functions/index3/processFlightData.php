<?php

function processFlightData($data)
{
	$carriers = $data->Carriers;
	//var_dump($carriers);
	$quotes = $data->Quotes;
	//var_dump($quotes);
	echo '<div class="container>
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">';
	echo '<h2>Information About Available Flights to This Destination</h2><hr>';
	foreach($quotes as $quote)
	{
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
		
		echo "<p>Cost: $$cost , Carrier: $plane, Departure: $dTime</p><hr>";
	}
	
	echo '</div></div></div>';
}

?>