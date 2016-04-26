<?php

	function get_curl($url)
	{
		$curl_handle=curl_init();
		
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 5);
		$result= curl_exec($curl_handle);

		return $result;
	}
	function scrape_between($data, $start, $end)
	{
        $data = stristr($data, $start); 
        $data = substr($data, strlen($start));  
        $stop = stripos($data, $end);   
        $data = substr($data, 0, $stop);   
        return $data; 
    }	

	$res = get_curl("http://www.bookrix.com/book.html?bookID=mrgum56_1323103158.4947938919");
	$scraped_data= scrape_between($res,"Chapter 1", "All Rights Reserved");
	
	echo $scraped_data;
?>
