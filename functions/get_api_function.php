<?php
/*Function get_api()
@param appropriate API URL
@return JSON-converted PHP array
*/
function get_api($api_url) {
	$conversion_to_php = file_get_contents($api_url);
	return json_decode($conversion_to_php);
};