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
    <h1> Exercice FINAL </h1>

    <form action="login.php" method="post">
        <label>Username :</label>
        <input type="text" place holder="Username" name="login" value="" required>
        <label>Mot de passe :</label>
        <input type="password" place holder="Password" name="password" value="" required>

        <input type="submit" value="Connexion">
        <input type="reset" value="Effacer">
    </form>
    

    <?php

        function renvoi($login, $password)
        {
        
        
            if ($login == "Julien" and $password == "1234")
            {
                header("location: reussite.php");
                //Si réussite renvoyer vers -> reussite.php
            }

            elseif ($login != "Julien")
            {
                //Si echec renvoyer :
                echo "<p style='color:purple;'>L'Username entré est incorrect.</p>";
            }
            elseif ($password != "1234")
            {
                //Si echec renvoyer :
                echo "<p style='color:purple;'>Le password est incorrect.</p>";
            }
        
        }
    ?>

    
    

    

<a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>


    <!-- echo "ipdevcode :".$_SERVER['REMOTE_ADDR']; -->



    
</body>
</html>