<?php 
// https://www.exchangerate-api.com/docs/php-currency-api

// Fetching JSON
$divisaBase = 'EUR';
$req_url = 'https://v6.exchangerate-api.com/v6/84c6f22029fee31e4ccd5d74/latest/' . $divisaBase;
$response_json = file_get_contents($req_url);

// Continuing if we got a result
if(false !== $response_json) {

    // Try/catch for json_decode operation
    try {
		// Decoding
		$response = json_decode($response_json);

		// Check for success
		if('success' === $response->result) {
            foreach($response->conversion_rates as $currency => $rate){
                echo $currency . ': ' . $rate . PHP_EOL;
            }
		}
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

}
	