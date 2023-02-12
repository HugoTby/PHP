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
<body>
<a href="/tdphp.php">RETOUR MENU</a>

    <?php 
    
    include 'functions.php';


    echo "<div>";
    echo "<p> Tableau N°1</p>";
    $tableau1 = array(8838925270, 1064280911, 1931308789, 7414071980, 5074543814);
    tableau($tableau1);
    echo "</div>"

    ?>



    <h1>**EMPTY HTML**</h1>

    <?php

    echo "<div>";
    echo "<p> Tableau N°2</p>";
    $tableau2 = array(4201261799, 3701138054, 5447009268, 7801088952, 9284747430);
    tableau($tableau2);
    echo "</div>"

    ?>

</body>
</html>