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

    include("user.php");

    $user1 = new user();

    $user1->afficheUser();

    ?>



    <pre style="color:red" >

    //tp3_ex1.php
    include("user.php");

    $user1 = new user();

    $user1->afficheUser();


    //user.php
    class user{
        //propriétés
        private $prenom;
        private $nom;

        //méthodes
        public function afficheUser(){
            echo "Je suis un User";
        }
    }
    </pre>



</body>
</html>