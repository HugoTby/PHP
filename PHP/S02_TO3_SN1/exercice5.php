<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .div{justify-content: center;text-align: center;align-items: center;padding-top: 5%;}
    .div2{padding-left: 33%;}
    strong{color:green;}
    pre{border: 1px solid lightgray;box-sizing: border-box;border-radius: 5px 5px 5px 5px;width: 55%;}
</style>
<body>
    <div class="div">
        <?php
        include("classes/personnage.php");
        //////////////////////////////////////////////////////////////////
        //////////////// Connexion à la base de données //////////////////
        //////////////////////////////////////////////////////////////////
        $host =                "localhost";               // Adresse IP //
        $username =            "root";                    // Username   //
        $password =            "root";                    // Password   //
        $dbname =              "poo";                     // Nom base   //
        //////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////
        $conn = mysqli_connect($host, $username, $password, $dbname);

            


        $P1 =  new personnage4($conn, 3);
        $P2 =  new personnage4($conn, 4);
        
        $P1->affichePseudoVie();
        $P2->affichePseudoVie();


            
        











        ?>
    </div>
    <div class="div2">
        <pre style="color:red" >

            <strong>//tp3_ex5.php</strong>
        include("personnage.php");

        $P1 =  new personnage4($conn, 3);
        $P2 =  new personnage4($conn, 4);
        
        $P1->affichePseudoVie();
        $P2->affichePseudoVie();


            <strong>//personnage.php</strong>
            class personnage4{
        //propriétés
        private $pseudo;
        private $vie;
        private $id;



        // Constructeur

        public function __construct($conn, $id)
       {
        if ($conn) { // Si la connexion à la bdd est réussie
            $stmt = $conn->prepare("SELECT * FROM personnage WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result != false)
            {
                $row_count = $result->num_rows;
                if($row_count > 0)
                {
                    $tabPersonnages = $result->fetch_assoc();

                    $this->id = $tabPersonnages["id"];
                    $this->pseudo = $tabPersonnages["pseudo"];
                    $this->vie = $tabPersonnages["vie"];
                }
            }
        }
        }

        //méthodes
        public function afficheId()
        {
             return $this->id;
        }

        public function afficheVie(){
            return $this->vie;
        }
        public function affichePseudo(){
            return $this->pseudo;
        }

        public function affichePseudoVie()
        {
            echo "Le Personnage n°".$this->id." s'appelle ".$this->pseudo." . Actuellement, il a".$this->vie." de points de vie.";
        }
        </pre>
        <a href="/tdphp.php">RETOUR MENU</a>
    </div>
</body>
</html>