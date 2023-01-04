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
<body>

    <form action="?connection-reussie" method="post">
    <div>
        <label>Envoyer</label>
        <input type="text" id="name" name="REQUETE">
        <input type="submit" id="name" name="REQUETESUB">
    </div>
    </form>
 

    <?php
    try {

        $ipserver = "192.168.65.58";    // Adresse IP VM
        $nomBase = "Medecin";           // Nom base
        $loginPrivilege = "siteWeb";    // Username
        $passPrivilege = "siteWeb";     // Password

        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

        $requete = 0;

        if  (isset($_POST["REQUETESUB"])){
            $resultat = $GLOBALS["pdo"]->query($_POST["REQUETE"]);

            if ($resultat->rowCount() > 0) {
                while($tab = $resultat->fetch()){
                    echo "Le nom est :".$tab["nom"]." id : ".$tab["id"]."<br>";
                }
            }
        }

       

        
        
    } catch (Exception $error) {
        echo "<h1 style='color:red; font-size:15px'><br>ERREUR D'EXECUTION, le code renvoi l'erreur : ".$error->getMessage() ."</h1><br>"; 
    }

    

    


    ?>
</body>
</html>
