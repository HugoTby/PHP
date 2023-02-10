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
<a href="index2.php">RETOUR MENU</a>
    <h1> Exercice 7 </h1>

    <!-- Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
    le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de
    session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est
    mémorisée et le site affiche toujours la valeur saisie.  -->


        <form action="ex7.php" method="post">
            <label>Veuillez saisir un numéro de téléphone :</label>
            <input type="text" placeholder="ex : 06 32 48 56 98" name="numero">
            <input type="submit" value="Confirmer">
            <input type="submit" value="Supprimer" name="del">             
        </form> <br>

        <?php

        define("FILENAME", "ex7.php");
        //Stockage de la variable
            $_SESSION["User"] = $_POST["numero"];

            if ($_SESSION["User"] == '')
            
            {
                echo "<font color='purple'> Impossible de trouver le numéro saisi, veuillez à nouveau saisir un numéro</font>";
            }else{
                echo "Le numéro de téléphone enregistré est le : <font color='red'><br><br><strong>".$_SESSION["User"]."</strong></font><br><br><br>";
            }

        
            

        ?>



<a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>














    <!-- echo "ipdevcode :".$_SERVER['REMOTE_ADDR']; -->



    
</body>
</html>