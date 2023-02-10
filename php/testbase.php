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
    .bulle{padding:2px;background-color:grey;border-radius:0.5em;width: 350px; margin: 0 auto;}
    body{align-items: center; text-align: center;}
    form{margin-top: 50px;}
    #del01{margin-bottom: 50px;}
</style>
<body>

<form action="?connection+reussie" method="post">
    <div>
        <label>Requete SQL</label>
        <input type="text" id="name" name="REQUETE">
        <input type="submit" id="name" name="REQUETESUB">
    </div>
    </form>
    <form action="?supression+bdd" method="post" id="del01">
        <input type="submit" name="DECONNECTER" value="Reset">
    </form>
 

    <?php
    try {

        
    

        $ipserver = "192.168.65.58";    // Adresse IP de l'Hote
        $nomBase = "Medecin";           // Nom base
        $loginPrivilege = "siteWeb";    // Username
        $passPrivilege = "siteWeb";     // Password

        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);


        if  (isset($_POST["REQUETESUB"])){
            $resultat = $GLOBALS["pdo"]->query($_POST["REQUETE"]);

            if ($resultat->rowCount() > 0) {
                while($tab = $resultat->fetch()){
                    echo "<div class='bulle'><h1 style='color:black; font-size:15px;'>Le <strong>nom</strong> du médicament est : <u>".$tab["nom"]."</u> <br>Son <strong>id</strong> : <u>".$tab["id"]."</u></h1></div><br>";
                }
            }
        }

       

        
        
    } catch (Exception $error) {
        echo "<h1 style='color:red; font-size:15px'><br>ERREUR D'EXECUTION, le code renvoi l'erreur : ".$error->getMessage() ."</h1><br>"; 
    }

    

    


    ?>
</body>
</html>
