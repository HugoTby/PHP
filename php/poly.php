<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Polynome 2nd degré</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<style>
    .var1 {background-color: red;}
    .var2 {background-color: blue;}
    strong {color: red;}
    #divp {margin: 0 auto;padding-top: 100px;width: 350px;}
    .box {margin-top: 20px;}
</style>
<body>
    <div id="divp">
        <form action="poly.php" method="post">
            <div class="box" style="background-color: grey;color: black;padding: 6px;border-radius: 6px;">
                <label>Veuillez saisir La valeur de A</label>
                <input type="text" placeholder="ex : 264" name="numero" style="margin-top: 5px;">
            </div>
            <br>
            <div class="box" style="background-color: grey;color: black;padding: 6px;border-radius: 6px;">
                <label>Veuillez saisir La valeur de B</label>
                <input type="text" placeholder="ex : 24" name="numero2" style="margin-top: 5px;">
            </div>
            <br>
            <div class="box" style="background-color: grey;color: black;padding: 6px;border-radius: 6px;">
                <label>Veuillez saisir La valeur de C</label>
                <input type="text" placeholder="ex : 547" name="numero3" style="margin-top: 5px;">
            </div>

            <input type="submit" value="Confirmer" style="margin-top: 20px;margin-left:37%;">
        </form>
        <br>
        <div id="divresult" style="background-color: lightgrey;color: black;padding: 6px;border-radius: 6px;">
            <?php
            $a = $_POST["numero"];
            $b = $_POST["numero2"];
            $c = $_POST["numero3"];
            // Équation réalisé avec https://calculis.net/resoudre-equation-second-degre
            $delta = pow($b, 2) - (4*$a*$a);
            //b²-4ac
            $x0 = -$b/(2*$a);
            //Si 1 solution -> -b/2a
            $x1 = (-$b+sqrt($delta))/(2*$a);
            $x2 = (-$b-sqrt($delta))/(2*$a);
            //Si 2 solutions -> (-b+Rd)/(2a)  et  (-b-Rd)/(2a) -> SQRT = racine

            echo "<br> On cherche à résoudre l'équation <strong> ax²+bx+c </strong> avec pour valeurs :<br>A=<strong> " . $a . "</strong><br>B= <strong>" . $b . "</strong><br>C= <strong>" . $c . "</strong><br><br>";
            //Consigne

            if ($delta > 0)
            //Si Delta > 0 alors 2 solutions
            {
                echo "L'équation admet deux solutions <strong>X1</strong> et <strong>X2</strong> qui sont : <br> X1= <strong>" . $x1 . "</strong><br> X2 =<strong> " . $x2 . "</strong>";
            } elseif ($delta == 0)
            //Sinon si Delta est strictement = 0 alors 1 solutions
            {
                echo "L'équation n'admet qu'un solution X0 qui est :<br>" . $x0;
            } elseif ($delta < 0)
            //Sinon si Delta < 0 alors 0 solution
            {
                echo "L'équation donnée n'admet pas de solution :/ ";
            }
            ?>
        </div>
    </div>
</body>

</html>