<?php 
if(!isset($_SESSION)){
        session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if(empty($_SESSION)){
    //vérification de connexion
        echo "<script type='text/javascript'>alert('Vous devez vous connecter pour accéder à cette page'); </script>";
        echo "<script type='text/javascript'>window.location.replace('http://localhost/Projet-2/Accueil_et_Mentions_légales/Index.php');</script>";
        
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../Elements/Header.php")?>
        <link rel="stylesheet" href="../Elements/Style.css">


        <title>Notre Sponsor</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu_connected.php"); ?>
</header>
<body>
    <div class="box">
    </div>
</body>

<footer>
        <?php require_once("../Elements/footer_connected.php"); ?>
</footer>
</html>