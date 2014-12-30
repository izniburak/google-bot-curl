<?php

function googleBot($url) 
{
	$header = array();
	$header[] = 'Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5'; 
	$header[] = 'Cache-Control: max-age=0'; 
	$header[] = 'Connection: keep-alive'; 
	$header[] = 'Keep-Alive: 300'; 
	$header[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'; 
	$header[] = 'Accept-Language: en-us,en;q=0.5'; 
	$header[] = 'Pragma:'; 
	 
	$curl = curl_init();     
	curl_setopt($curl, CURLOPT_URL, $url); 
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'); 
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
	curl_setopt($curl, CURLOPT_REFERER, 'http://www.google.com'); 
	curl_setopt($curl, CURLOPT_ENCODING, 'gzip, deflate'); 
	curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($curl, CURLOPT_TIMEOUT, 10); 
	$body = curl_exec($curl); 
	curl_close($curl); 
	return $body; 
}  

