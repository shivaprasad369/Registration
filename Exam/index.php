<?php 
	
    
    function getBrowser()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browser = "N/A";
    
        $browsers = [
            '/msie/i' => 'Internet explorer',
            '/firefox/i' => 'Firefox',
            '/safari/i' => 'Safari',
            '/edge/i' => 'Edge',
            '/chrome/i' => 'Chrome',
           
            '/opera/i' => 'Opera',
            '/mobile/i' => 'Mobile browser',
        ];
    
        foreach ($browsers as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser = $value;
            }
        }
    
        return $browser;
    }
    $browser =getBrowser();
    // echo "Browser: " . getBrowser().'<br><br>';

   $os=$_SERVER['HTTP_USER_AGENT'] ;
 
  // Using get_browser() to display 
  // capabilities of the user browser
 

 

?>
