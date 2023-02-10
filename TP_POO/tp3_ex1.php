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
    .div2{padding-left: 43%;}
    strong{color:green;}
    pre{border: 1px solid lightgray;box-sizing: border-box;border-radius: 5px 5px 5px 5px;width: 25%;}
</style>
<body>
    <?php

    include("user.php");

    $user1 = new user();

    $user1->afficheUser();

    ?>


<div class="div2">
    <pre style="color:red" >

        <strong>//tp3_ex1.php</strong>
    include("user.php");

    $user1 = new user();
    $user1->afficheUser();


        <strong>//user.php</strong>
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
</div>



</body>
</html>