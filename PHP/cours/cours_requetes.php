<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



try {

    $ipserver ="192.168.65.92";
    $nomBase = "Medecin";
    $loginPrivilege ="root";
    $passPrivilege ="root";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);


    $requete = "select * from Medecin";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabMedecins = $resultat->fetchALL();

    $requete = "select * from Patient";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabPatients = $resultat->fetchALL();
    ?>
    <form action="" method="post">
        <select name="idMedecin">
            <?php
            foreach ($tabMedecins as $Medecin) {
                ?>
                <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <select name="idPatient">
            <?php
            foreach ($tabPatients as $Patient) {
                ?>
                <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <select name="idSecretaire">
            <?php
            foreach ($tabSecretairess as $Secretaire) {
                ?>
                <option value="<?=$Secretaire["id"]?>"><?=$Secretaire["nom"]." ".$Secretaire["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <input type="datetime-local" name="laDate">
        <input type="submit" value="Saisir une consultation" name="Valider">
    </form>
    
<?php

if(isset($_POST["Valider"])){
    echo "l'ID du médecin est = ".$_POST["idMedecin"]." l'ID du patient est = ".$_POST["idPatient"]." la date de la consultation est = ".$_POST["laDate"];
    //COMME J'AI LES 2 ID
    //je fait une requet pour faire un insert into consultation .... value ( idmedecin, idpatien, date)
    $requete2 = "UPDATE INTO `Medecin`(`Dateheure`, `idMedecin`, `idPatient`) VALUES ('".$_POST['laDate']."','".$_POST['idMedecin']."','".$_POST['idPatient']."','".$_POST['idSecretaire']."')";
    $result2 = $GLOBALS["pdo"]->query($requete2);

}

} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}


?>
</body>
</html>