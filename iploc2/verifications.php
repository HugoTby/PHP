<?php

include("white_list.php");
include("black_list.php");
include("languages_list.php");
include("functions.php");


$ip = $_SERVER['REMOTE_ADDR']; // Récupère l'adresse IP de l'utilisateur







if (!in_array($ip, $whitelist)) {
    // Redirige l'utilisateur vers une page d'erreur ou affiche un message d'erreur
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
                        echo"test";
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
                      } else {
                        //Affiche en Français par défaut
                        fr($ipRefused);
            }
}
// else if ($ip == in_array($ip, $whitelist)) {
//     echo "Bonjour !";
// }




?>