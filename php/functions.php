<style>
    strong{color:red;}; 
</style>




<?php
function tableau($tableau)
{

    echo "<table border='2px'>";

        for ($a = 0; $a < sizeof($tableau); $a++)
        {
            echo "<tr><td>Élément N°".$a. " : <strong>".$tableau[$a]."</strong></td></tr>";
        }

    echo "</table>";

}


function ex2($a, $b, $c)
{

    echo "<table border='2px'><thead><tr><th>".$a."</th><th>".$b."</th><th>".$c."</th></tr></thead><tbody><tr><td><strong>élement 1</strong></td><td><strong>élement 2</strong></td><td><strong>élement 3</strong></td></tr></tbody></table>";


}

function moyenne($note)
{
    $sum = 0;
    foreach ($note as $value) {
        $sum += $value;
    }

    $average = $sum / count($note);
    echo "La moyenne est de : $average";
}
function tableaumoy($note)
{
    echo"<table border='2px'>";
    foreach($note as $value)
    {
        echo"<tr><td align='center'>".$value."</td></tr>";
    }
    echo"</table>";
}



function connexion($username, $password)
{
    ?>
        <form action="" method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Connexion">
        </form> 
<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if (isset($username) == "root" && isset($password) == "root") {
        echo "Connexion réussie!";
        header("Location: reussite2.php");

    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
}


?>




