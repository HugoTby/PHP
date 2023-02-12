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
<a href="/tdphp.php">RETOUR MENU</a>
    <h1> Exercice 1 </h1>

    <?php 
    $Variable1 = "Une variable";
    ?>
            <div>
                    <?php            
                    $Variable1 = rand(0,100);
                    ?>
                <div>
                    <?php
                    echo $Variable1;

                    if($Variable1%2==1){
                        echo '<div class="var1">
                        <h1>je suis impaire</h1>
                    </div>';

                    }else{
                        echo '<div class="var2">
                        <h1>je suis paire</h1>
                    </div>';
                    }
                    ?>
                </div>
            </div>
            <a href="codesource.txt" download="">Code source - CLIQUEZ ICI</a>


    
</body>
</html>