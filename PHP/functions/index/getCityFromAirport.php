<?php

$iataToCity = array(
	"Atlanta"=>"ATL-sky",
"Anchorage"=> "ANC-sky",
"Austin"=> "AUS-sky",
"Baltimore"=>"BWI-sky",
'Boston'=>"BOS-sky",
'Charlotte'=>"CLT-sky",
'Chicago'=>"MDW-sky",
'Chicago'=>"ORD-sky",
'Cincinnati'=>"CVG-sky",
'Cleveland'=>"CLE-sky",
'Columbus'=>"CMH-sky",
'Dallas'=>"DFW-sky",
'Denver'=>"DEN-sky",
'Detroit'=>"DTW-sky",
'Fort Lauderdale'=>"FLL-sky",
'Fort Myers'=>"RSW-sky",
'Hartford'=>'BDL',
'Honolulu'=>'HNL',
'Houston'=>'IAH',
'Houston'=>'HOU',
'Indianapolis'=>"IND-sky",
'Kansas City'=>"MCI-sky",
'Las Vegas'=>"LAS-sky",
'Los Angeles'=>"LAX-sky",
'Memphis'=>"MEM-sky",
'Miami'=>"MIA-sky",
'Minneapolis'=>"MSP-sky",
'Nashville'=>"BNA-sky",
'New Orleans'=>"MSY-sky",
'New York'=>"JFK-sky",
'New York'=>"LGA-sky",
'Newark'=>"EWR-sky",
'Oakland'=>"OAK-sky",
'Ontario'=>"ONT-sky",
'Orlando'=>"MCO-sky",
'Philadelphia'=>"PHL-sky",
'Phoenix'=>"PHX-sky",
'Pittsburgh'=>"PIT-sky",
'Portland'=>"PDX-sky",
'Raleigh'=>"RDU-sky",
'Sacramento'=>"SMF-sky",
'Salt Lake City'=>"SLC-sky",
'San Antonio'=>"SAT-sky",
'San Diego'=>"SAN-sky",
'San Francisco'=>"SFO-sky",
'San Jose'=>"SJC-sky",
'Santa Ana'=>"SNA-sky",
'Seattle'=>"SEA-sky",
'St. Louis'=>"STL-sky",
'Tampa'=>"TPA-sky",
'Washington, D. C.'=>"IAD-sky",
'Washington, D. C.'=>"DCA"
);
	

function getCityFromAirport($code, $iataToCity)
{
	$code = str_replace("-sky-sky","-sky",$code);
	//echo $code;
	$res = $iataToCity[$code];
	if(strlen($res) < 1)
	{
		return "INVALID";
	}
	else
	{
		return $res;
	}
}

//echo (getCityFromAirport("BWI-sky-sky", $iataToCity));
?>