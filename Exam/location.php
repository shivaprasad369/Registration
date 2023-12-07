<?php
//if latitude and longitude are submitted

// PHP code to obtain country, city, 
// continent, etc using IP Address 
// function get_IP_address()
// {
//     foreach (array('HTTP_CLIENT_IP',
//                    'HTTP_X_FORWARDED_FOR',
//                    'HTTP_X_FORWARDED',
//                    'HTTP_X_CLUSTER_CLIENT_IP',
//                    'HTTP_FORWARDED_FOR',
//                    'HTTP_FORWARDED',
//                    'REMOTE_ADDR') as $key){
//         if (array_key_exists($key, $_SERVER) === true){
//             foreach (explode(',', $_SERVER[$key]) as $IPaddress){
//                 $IPaddress = trim($IPaddress); // Just to be safe

//                 if (filter_var($IPaddress,
//                                FILTER_VALIDATE_IP,
//                                FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
//                     !== false) {

//                     return $IPaddress;
//                 }
//             }
//         }
//     }
// }

// $ip = get_IP_address(); 
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
// echo "<script>console.log($ip)</script>";

// Use JSON encoded string and converts 
// it into a PHP variable 
$locations = @json_decode(file_get_contents( 
	"http://ip-api.com/json/223.228.6.126" )); 
	
	$location=$locations->city;
?>