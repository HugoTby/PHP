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

    include("classes/user.php");

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

    <style type="text/css">.tg  {border-collapse:collapse;border-spacing:0;}.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}.tg .tg-hdsp{background-color:#9f87b1;text-align:left;vertical-align:top}.tg .tg-at11{background-color:#9f87b1;text-align:center;vertical-align:top}</style>
    <table class="tg" style="table-layout: fixed; width: 319px"><colgroup><col style="width: 319px"></colgroup><thead><tr><th class="tg-at11">User<br></th></tr></thead><tbody><tr><td class="tg-hdsp">-Nom : String<br>-Prenom : String<br></td></tr><tr><td class="tg-hdsp">+AfficheUser() : void<br></td></tr></tbody></table>

    <a href="/tdphp.php">RETOUR MENU</a>
</div>
</body>
</html>