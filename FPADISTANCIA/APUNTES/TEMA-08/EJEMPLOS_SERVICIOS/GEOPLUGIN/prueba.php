<?php
// https://www.geoplugin.com/

// $IP = "201.30.31.10";
$IP = "80.26.152.204";
// echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$IP)));


$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $IP) );
 
if ( $geoPlugin_array['geoplugin_currencyCode'] == 'USD' ) { //let's use a different base currency
 
	$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $IP . '&base_currency=EUR') );
 
	echo '<h3>A &#8364;800 television from Germany will cost you '.$geoPlugin_array['geoplugin_currencySymbol_UTF8'] . round( (800 * $geoPlugin_array['geoplugin_currencyConverter']),0) . '</h3>';
 
} else {
 
	echo '<h3>A $800 television from the US will cost you ' . $geoPlugin_array['geoplugin_currencySymbol_UTF8'] . round( (800 * $geoPlugin_array['geoplugin_currencyConverter']),0) . '</h3>';
 
}