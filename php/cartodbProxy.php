<?php
session_cache_limiter('nocache');
$cache_limiter = session_cache_limiter();

function url_get_contents ($inputURL) {
    if (!function_exists('curl_init')){ 
        exit('Sorry, CURL is not installed on your server.');
    }
    $ch = curl_init();

    $options = array(CURLOPT_URL => $inputURL,
                 CURLOPT_RETURNTRANSFER => true
                );

    curl_setopt_array($ch, $options);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function goProxy($dataURL) 
{
	$baseURL = 'http://CARTODB-USER-NAME.cartodb.com/api/v2/sql?';
	//  					^ CHANGE THE 'CARTODB-USER-NAME' to your cartoDB url!
	$api = '&api_key=';
	//				 ^ENTER YOUR API KEY HERE!
	$url = $baseURL.'q='.urlencode($dataURL).$api;
	$result = url_get_contents ($url);
	return $result;
}
?>