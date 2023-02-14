<?php

    class personnage{
        //propriétés
        private $pseudo;
        private $vie;

        //méthodes
        public function __construct(){
            $this->vie = 100;
        }
        public function GetVie(){
            echo"<div class='div'>Je suis <strong>user1 </strong> et j'ai <strong>". $this-> vie."</strong> de points de vie</div>";
        }
    }




    class personnage2{
        //propriétés
        private $pseudo;
        private $vie;

        //méthodes
        public function __construct($pseudo){
            $this->vie = 100;
            $this-> pseudo = $pseudo;
        }
        public function affichePseudoVie(){
            echo "<div class='div'>Je suis <strong>".$this-> pseudo."</strong> et j'ai <strong>".$this-> vie."</strong> de points de vie</div>";
        }
    }


?>