<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code by HugoTby</title>
    <style>
        /* body{background-color: #545854;} */
        .center {text-align:center;display: flex;justify-content: center;align-items: center;height: 100vh;}
        .error {background: rgba(255, 0, 0, 0.4);padding: 10px;border-radius: 5px;}
    </style>
</head>
<body>
    
    
        <?php

        include("white_list.php");
        include("black_list.php");
        include("languages_list.php");
        include("functions.php");

        // On vérifie si l'adresse IP de l'utilisateur est égale à "127.0.0.1"
        $ip = $_SERVER['REMOTE_ADDR'];
        /* if ($ip == in_array($ip, $whitelist) or strpos($ip, '192.168.') === 0) {
             echo "<div>Your IP address is allowed to access this website :D<br>Your IP address is : " . $ip."</div>";
        }*/
        if ($ip == in_array($ip, $whitelist)) {
            echo "<div class='center'><div>Your IP address is allowed to access this website :D<br>Your IP address is : " . $ip."</div></div>";
        }
        elseif (array_key_exists($ip, $blacklist)) {
            $language = 'fr';
            $country = 'FR';
            //Affiche en Français par défaut
            $ip_adress_list = $blacklist[$ip];
            black_list($ip_adress_list,$ip,$blacklist);
            exit();
        }
        else {
            $ipRefused = "&nbspDenied IP Adress ".$ip. "&nbsp";
            
            
            // Appeler l'API ipinfo.io pour récupérer la langue et le pays
            $info = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
            $language = $info->language;
            $country = $info->country;

            // Définir la langue par défaut comme le français
            $defaultLanguage = 'fr';

            // Définir la langue du site en conséquence
            $language = isset($languagesByCountry[$country]) ? $languagesByCountry[$country] : $defaultLanguage;

            // Définir la langue pour le reste de la page
            setlocale(LC_ALL, $language);


            

            if ($ip == '127.0.0.1') {
                        $language = 'fr';
                        $country = 'FR';
                        //Affiche en Français par défaut
                        $ip_adress_list = $blacklist[$ip];
                        black_list($ip_adress_list,$ip,$blacklist);
                      } else if ($language == 'fr') {
                        //Affiche en Français
                        fr($ipRefused);                     
                      } else if ($language == 'nl') {
                        //Affiche en Néerlandais
                        nl($ipRefused);
                      } else if ($language == 'us') {
                        //Affiche en Anglais
                        us($ipRefused);
                      } else if ($language == 'jp') {
                        //Affiche en Japonais
                        jp($ipRefused);
                      } else if ($language == 'kr') {
                        //Affiche en Coréen
                        kr($ipRefused);
                      } else {
                        //Affiche en Français par défaut
                        fr($ipRefused);
            } 
            exit();       
        }
        ?>
        
    
</body>
</html>
