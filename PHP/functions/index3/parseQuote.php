<?php
function parseQuote($quoteJSON)
{
	$quoteJSON = $quoteJSON->Quotes;
	foreach($quoteJSON as $quote)
	{
		echo "Quote: " . $quote->MinPrice;
	}
}
?>