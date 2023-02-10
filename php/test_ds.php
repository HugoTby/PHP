<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #text{color:red;text-align: center;}
</style>
<body>

<?php

    if(isset($_POST["reset"]))
    {
        session_unset();
        session_destroy();
    }

    if(isset($_POST["confirmer"]))
    {
        if($_POST["utilisateur"] == "root" && $_POST["motdepasse"] == "root")
        {
            $_SESSION["EtatConnexion"]=true ;
        }
        elseif ($_POST["utilisateur"]!="root" && $_POST["motdepasse"]!="root") {
            echo "<p id='text'>Ce n'est pas le bon Login et le bon mot de passe</p>";
        }
        elseif ($_POST["motdepasse"]!="root") {
            echo "<p id='text'>Ce n'est pas le bon mdp</p>";
        }
        elseif ($_POST["utilisateur"]!="root") {
            echo "<p id='text'>Ce n'est pas le bon Login</p>";
        }
        
    }

    if($_SESSION["EtatConnexion"]==true)
    {
        echo '
        <form action="" method="post" class="form-example">
            <input type="submit" value="Deconnexion" name="reset" >
        </form>

        <br>
        <br>

        <table border="2">
        <thead>
            <tr>
                <th>hola</th>
                <th>hola2</th>
                <th>hola3</th>
                <th>hola4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>hola</td>
                <td>hola2</td>
                <td>hola3</td>
                <td>hola4</td>
            </tr>
            <tr>
                <td>hola</td>
                <td>hola2</td>
                <td>hola3</td>
                <td>hola4</td>
            </tr>
        </tbody>
        </table>




        ';
    }
    else{
    echo '
    <form action="" method="post" >
            <label>Username</label>
        <input type="text" name="utilisateur"  required>
        <label>Password</label>
        <input type="password" name="motdepasse" required>
        <input type="submit" value="Valider" name="confirmer" >  
    </form>
    ';
    }

?>
    
</body>
</html>