<?php 
	// -- Main --
	$url = "https://github.com/thuannvn/url-validation-with-php";

	if (url_validate($url) == true){
		echo("$url is a valid URL\n");
	} else {
		echo("$url is not a valid URL\n");
	}

?>

<?php 
	
	/*************************************************************************
	*
	*	 URL with scheme http or https is VALID
	*
	**************************************************************************/
	function url_validate($url){
		if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED) === false) { // Must start with scheme
		    $url_parser = parse_url($url);

		    if ($url_parser['scheme'] == "http" || $url_parser['scheme'] == "https"){ // Scheme must be http or https
		    	return true;
		    }
		} 

		return false;
	}
?>