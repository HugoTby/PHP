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
        <h1> Exercice 8 </h1>

        <!-- Reprenez l’exercice 7 et rajouter un bouton qui permet lorsque l’on clique dessus de
vider la session  -->


            <form action="ex7.php" method="post">
                <label>Veuillez saisir un numéro de téléphone :</label>
                <input type="text" placeholder="ex : 06 32 48 56 98" name="numero">
                <input type="submit" value="Confirmer">  
                <input type="reset" value="Supprimer">          
            </form> <br>

            <?php

            //Stockage de la variable
                $_SESSION["User"] = $_POST["numero"];

                if ($_SESSION["User"] == '')
                {
                    echo "<font color='purple'> Impossible de trouver le numéro saisi, veuillez à nouveau saisir un numéro</font>";
                }
                else{
                    echo "Le numéro de téléphone enregistré est le : <font color='red'>".$_SESSION["User"]."</font>";
                }

            ?>

<a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>





    <!-- echo "ipdevcode :".$_SERVER['REMOTE_ADDR']; -->



    
</body>
</html>