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

?>