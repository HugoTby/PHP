<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .div{justify-content: center;text-align: center;align-items: center;padding-top: 15%;}
    .div2{padding-left: 33%;}
    strong{color:green;}
    pre{border: 1px solid lightgray;box-sizing: border-box;border-radius: 5px 5px 5px 5px;width: 55%;}
</style>
<body>
    <div class="div">
    <?php

    include("classes/personnage.php");

    $Personnage1 = new personnage3("Hugo");
    $Personnage2 = new personnage3("Faustin");

    echo"<div class=''>Je suis <strong>". $Personnage1->affichePseudo() ."</strong></div>";
    echo"<div class=''>J'ai <strong>". $Personnage1->afficheVie() ."</strong> de points de vie</div>";

    echo"<div class=''>Je suis <strong>". $Personnage2->affichePseudo() ."</strong></div>";
    echo"<div class=''>J'ai <strong>". $Personnage2->afficheVie() ."</strong> de points de vie</div>";


    
    $Personnage1->attaque($Personnage2);

    ?>
    </div>

<div class="div2">
    <pre style="color:red" >

        <strong>//tp3_ex2.php</strong>
    include("personnage.php");

    $Personnage1 = new personnage3("Hugo");
    $Personnage2 = new personnage3("Faustin");

    echo"Je suis". $Personnage1->affichePseudo() ."";
    echo"J'ai". $Personnage1->afficheVie() ."de points de vie";
    
    echo"Je suis ". $Personnage2->affichePseudo() ."";
    echo"J'ai ". $Personnage2->afficheVie() ." de points de vie";


        <strong>//personnage.php</strong>
    class personnage3{
        //propriétés
        private $pseudo;
        private $vie;

        //méthodes
        public function __construct($pseudo){
            $this->vie = 100;
            $this-> pseudo = $pseudo;
        }
        public function afficheVie(){
            return $this->vie;
        }
        public function affichePseudo(){
            return $this->pseudo;
        }

        public function attaque($cible){
            $cible->defense(50);
            echo "Oh non !".$this->affichePseudo()."a décider d'attaquer ".$cible->affichePseudo()."".$this->affichePseudo()."
            à donc ".$this->afficheVie()." de points de vie et ".$cible->affichePseudo()." à donc ".$cible->afficheVie()." 
            de points de vie !";
        }

        public function defense($attaque) {
            $this->vie -= $attaque;
            echo $this->pseudo . " subit " . $attaque . " points de dégâts";
        }

    }
    </pre>
    <a href="/tdphp.php">RETOUR MENU</a>
</div>



</body>
</html>