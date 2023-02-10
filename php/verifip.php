<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      function checkCountry($ip) {
        $url = "http://api.ipstack.com/" . $ip . "?access_key=6047af9bd6acff631bdd4e6be20b0f6d";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        $countryCode = $data["country_code"];
        
        if ($countryCode == "FR") {
          return true;
        } else {
          return false;
        }
      }
      
      $ip = $_SERVER['REMOTE_ADDR'];
      if (checkCountry($ip)) {
        // Autoriser l'accès
        echo "test ok, vous venez de france";

      } else {
        // Refuser l'accès
        echo "test nok, vous ne venez pas de france";

      }


?>
</body>
</html>