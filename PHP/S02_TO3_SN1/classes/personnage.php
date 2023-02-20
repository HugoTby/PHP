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
            echo "<div class=''>Oh non !<br> <strong>".$this->affichePseudo()."</strong> a décider d'attaquer <strong>".$cible->affichePseudo()."</strong> !<br> <strong>".$this->affichePseudo()."</strong> à donc <strong>".$this->afficheVie()."</strong> de points de vie et <strong>".$cible->affichePseudo()."</strong> à donc <strong>".$cible->afficheVie()."</strong> de points de vie !</div>";
        }

        public function defense($attaque) {
            $this->vie -= $attaque;
            echo $this->pseudo . " subit <strong>" . $attaque . "</strong> points de dégâts<br>";
        }

    }




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
            echo "<p>Le Personnage n°<strong>".$this->id."</strong> s'appelle <strong>".$this->pseudo."</strong> . Actuellement, il a <strong>".$this->vie."</strong> de points de vie.</p>";
        }
    }



    
    


?>