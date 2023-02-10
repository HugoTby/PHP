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

    #tab{
        color: blue;
    }

    h4{
        padding-left: 30px;
    }

    .ex2_2{
        color: red;
       
    }

</style>


<body>
<a href="index2.php">RETOUR MENU</a>
    <h1> Exercice 2 </h1>

    <div>

    <table border="2px" id="tab">
        <caption>2.1</caption>

    <?php
            

            
            // 2.1
            $i;
            $legumes = array(25,42,47,24, 56);

            

            for ($i = 0; $i < sizeof($legumes); $i++)
            {
                echo "<tr><td>Element " .($i+1). " = " .$legumes[$i]. "</td></tr>";
            }



    
    ?>



</table>

                    <div class="ex2_2">
                    <?php

                    // 2.2
                    $identite = array(             
                        'Nom' => 'Tabary', 
                        'Prenom' => 'Hugo', 
                        'MDP' => '1234',     
                    );

                    echo "<br>";
                    echo "<h4>2.2</h4>";
                    echo "Nom : " .$identite['Nom']."<br>";
                    echo "Prenom : " .$identite['Prenom']."<br>";
                    echo "MDP : " .$identite['MDP']."<br>";


                    ?>

                    </div>

    </div>
    <a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>



    <!-- echo "ipdevcode :".$_SERVER['REMOTE_ADDR']; -->



    
</body>
</html>