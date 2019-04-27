<?php

function processFlightData($data)
{
	$carriers = $data->Carriers;
	//var_dump($carriers);
	$quotes = $data->Quotes;
	//var_dump($quotes);
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
		
		echo "<p>Cost: $cost , Carrier: $plane, Departure: $dTime</p>";
	}
}

?>