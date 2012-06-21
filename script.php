<?php

	// Define error text
	define( "ERROR_TEXT", "Error: Movie not found." );

	// Get query string from Alfred
	$query = $argv[1];

 	// Try to get movie data from imdbapi.com and echo result
	$jsonurl = "http://www.imdbapi.com/?t=" . urlencode($query);
	$json = file_get_contents($jsonurl,0,null,null);
	$json_output = json_decode($json);
		
	if($json_output->Response == 'True') {
		$plot = $json_output->Plot;		
		echo $plot;		
	}	
	else {
	  echo ERROR_TEXT;
	}	
		
?>