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

</style>
<body>
<a href="index2.php">RETOUR MENU</a>


<?php 
    
    include 'functions.php';


    echo "<div>";
    echo "<p> Tableau N°1</p>";
    $a = 'titre 1';
    $b = 'titre 2';
    $c = 'titre 3';
    
    ex2($a, $b, $c);
    echo "</div>"

    ?>



    
</body>
</html>