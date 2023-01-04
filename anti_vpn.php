<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPN/Proxy server detection with IPHub API and PHP</title>
</head>
<body>
    <?php
    // Get IP address
    function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
               $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }


    ## Check VPN and Proxy
    $ipaddress = get_client_ip(); // Get IP address
    $apikey = "API Key"; // Your API key
    
    $curl = curl_init();
    
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://v2.api.iphub.info/ip/".$ipaddress,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-key: ".$apikey
        ),
    ));

    $response = json_decode(curl_exec($curl));
    $err = curl_error($curl);

    curl_close($curl);
    $block = 0;
    if ($err) {
        echo "cURL Error :" . $err;
    } else {
        $block = $response->block;
    }

    if($block == 1){
        echo "Using VPN or Proxy.";
    }else{
        echo "Not using VPN or Proxy.";
    }

    echo "<pre>";
    print_r($response);
    echo "</pre>";
    ?>
</body>
</html>
