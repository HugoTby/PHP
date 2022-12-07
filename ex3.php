<!--
    *
    * H.Tabary -> dev de la page d'acceuil
    *
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<style>

    .var1{
        background-color: #5abd0e ;
    }

    

</style>


<body>
<a href="index2.php">RETOUR MENU</a>
    <h1> Exercice 3 </h1>
    <!-- Tableau à double entrée en PHP -->


    <table border="1px" class="var1">
        <caption>Tableau à double entrée en PHP</caption>

    <?php

    $a; $b;
    $utilisateurs = array(
        0 => array('Nom' => 'Tabary', 'Prénom' => 'Hugo', 'motDePass' => 'Sm2t4t59gYMF'),
        1 => array('Nom' => 'Dimont', 'Prénom' => 'Louis', 'motDePass' => '4aJe5CFAp6d3'),
        2 => array('Nom' => 'Dupuis', 'Prénom' => 'Justin', 'motDePass' => 's2E95V6iRFja'),
        3 => array('Nom' => 'Baudet', 'Prénom' => 'Grégoire', 'motDePass' => '4jq9MjgYE5J5'),
        4 => array('Nom' => 'Boffrand', 'Prénom' => 'Armand', 'motDePass' => '9MzU38Zbs2zU')
        // Prénom, Nom et mot de passe aléatoire https://www.motdepasse.xyz/ - https://fr.fantasynamegenerators.com/noms-fran%C3%A7ais.php

    );

    for ($a = 0; $a < sizeof($utilisateurs); $a++)
    {

    echo "<tr><td>" .$utilisateurs[$a]['Nom']. " - " .$utilisateurs[$a]['Prénom'].  " - " .$utilisateurs[$a]['motDePass']. "</td></tr>";
    }

    ?>





    </table>
    <a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>

    















    <!-- echo "ipdevcode :".$_SERVER['REMOTE_ADDR']; -->



    
</body>
</html>