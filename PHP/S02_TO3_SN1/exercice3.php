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
    <?php

    include("classes/personnage.php");

    $user1 = new personnage2('Julien');

    $user1->affichePseudoVie();

    ?>


<div class="div2">
    <pre style="color:red" >

        <strong>//tp3_ex3.php</strong>
    include("personnage.php");

    $user1 = new personnage('Julien');
    $user1->affichePseudoVie();


        <strong>//personnage.php</strong>
    class personnage{
        //propriétés
        private $pseudo;
        private $vie;

        //méthodes
        public function __construct($pseudo){
            $this->vie = 100;
            $this-> pseudo = $pseudo;
        }
        public function affichePseudoVie(){
            echo "Je suis ".$this-> pseudo." et j'ai ".$this-> vie." de points de vie";
        }
    }
    </pre>
    <a href="/tdphp.php">RETOUR MENU</a>
</div>



</body>
</html>