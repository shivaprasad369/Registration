<?php
// function get_client_ip() {
//     $ipaddress = '';
//     if (getenv('HTTP_CLIENT_IP'))
//         $ipaddress = getenv('HTTP_CLIENT_IP');
//     else if(getenv('HTTP_X_FORWARDED_FOR'))
//         $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
//     else if(getenv('HTTP_X_FORWARDED'))
//         $ipaddress = getenv('HTTP_X_FORWARDED');
//     else if(getenv('HTTP_FORWARDED_FOR'))
//         $ipaddress = getenv('HTTP_FORWARDED_FOR');
//     else if(getenv('HTTP_FORWARDED'))
//        $ipaddress = getenv('HTTP_FORWARDED');
//     else if(getenv('REMOTE_ADDR'))
//         $ipaddress = getenv('REMOTE_ADDR');
//     else
//         $ipaddress = 'UNKNOWN';
//     return $ipaddress;
// }
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
// echo $ip."<br><br>";



// Then call the date functions
date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d h:i:sa');

?>