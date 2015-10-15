# URL validation with php
## Introduction
  This code is based on filter_var & parse_url to check URL must begin with scheme http|https

## Usage

$url = "https://github.com/thuannvn/url-validation-with-php";

if (url_validate($url) == true){

	echo("$url is a valid URL\n");

} else {

	echo("$url is not a valid URL\n");
	
}
