<?php 

		$url = "http://localhost:1337/ingrediente/";
		$url .= 1;
		echo $url;
		$curl = curl_init();
		curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url
		));
		$result = curl_exec($curl);
		print_r($result);

?>