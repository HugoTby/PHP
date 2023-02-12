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
        background-color: red;
    }

    .var2{
        background-color: blue;
    }

</style>
<body>
<a href="/tdphp.php">RETOUR MENU</a>    <h1> Exercice 6 </h1>

        <!-- Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
        le bouton la page doit afficher ce que vous avez saisie en violet U.  -->


        <form action="#" method="get">
            <label>Veuillez saisir un numéro de téléphone :</label>
            <input type="text" placeholder="ex : 06 32 48 56 98" name="numero">
            <input type="submit" value="Confirmer">            
        </form> <br>

        <?php
        echo "Le numéro de téléphone enregistré est le : <font color='purple'>".$_GET["numero"]."</font>";
        ?>

<a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>
</body>
</html>