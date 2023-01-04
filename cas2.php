<!-- VERIFICATION DE L'UTILISATEUR VIA LE PHP-->

<?php

    session_start(); //Initialisation de la session utilisateur
    $erreur = "";



    if  (isset($_POST["CONNECTER"])) //Si le bouton de connexion est selectionné
    {

            if ($_POST["login"] == "Julien" and $_POST["password"] == "1234")
            {
                $_SESSION["Login"] = $_POST["login"]; 
                $_SESSION["Password"] = $_POST["password"]; 
                $_SESSION["REUSSITE"] = true; 
            }

            elseif ($_POST["password"] != "1234" and $_POST["login"] != "Julien")
            {
                //Si le password est différent de 1234, alors appel de la fonction error_pass
                
                $erreur = "errUP";
            }
            elseif ($_POST["login"] != "Julien")
            {
                //Si le login est différent de Julien, alors appel de la fonction error_user
                
                $erreur = "errU";
                
            }
            elseif ($_POST["password"] != "1234")
            {
                //Si le password est différent de 1234, alors appel de la fonction error_pass
                
                $erreur = "errP";
            }


    }
    else if (isset($_POST["DECONNECTER"])) //Sinon si le bouton de déconnexion est selectionné
    { 
                session_unset(); //supprimer les variables
                session_destroy(); //supprimer la session
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
</head>

<style>
    .var1{background-color: red;}
    .var2{background-color: blue;}
    body{text-align: center;}
</style>


<body>
    <h1> Exercice FINAL </h1>

    

    
    <?php
            //En cas d'erreur U & P
            if ($erreur == "errUP") {
                echo '<div class="erreur"> <p><h1 style="color:red">Le Login ou le Password est incorrect<h1></p></div>'; 
            }
            //En cas d'erreur U
            else if($erreur == "errU"){
                echo '<div class="erreur"> <p><h1 style="color:red">Le Login est incorrect<h1></p></div>';
            }
            //En cas d'erreur P
            else if($erreur == "errP"){
                echo '<div class="erreur"> <p><h1 style="color:red">Le Password est incorrect<h1></p></div>';
            }
    



            if (isset($_SESSION["REUSSITE"]) and $_SESSION["REUSSITE"] == true) //Si la condition est VRAIE alors on affiche la suite
            {
                echo "<h1>Connexion réussie</h1> <h1 style='color:red;'>".$_SESSION["Login"]." </h1>";
                ?>
                    <form action="?deconnection+utilisateur" method="post">
                        <input type="submit" name="DECONNECTER" value="Se deconnecter">
                    </form>
                <?php 
            }else{  //Si la condition est FAUSSE alors on affiche le formulaire de connexion
                ?>     
                    <form action="?connexion+utilisateur" method="post">
                            <label>Username :</label>
                        <input type="text" place holder="Username" name="login"  required>
                            <label>Mot de passe :</label>
                        <input type="password" place holder="Password" name="password"  required>
                        <input type="submit" value="Se connecter" name="CONNECTER">
                        <input type="reset" value="Effacer la saisie">
                    </form>
                <?php
            }

           
        
        
    ?>







<!-- par Hugo Tabary BTSSN1 - Octobre 2022
Modifié le 19/12/2022 -->

    
</body>
</html>
