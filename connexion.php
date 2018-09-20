<?php

$hote = 'localhost';
$bdd = 'immobilier';
$utilisateur = 'root';
$passe = '';$pdoIMMO = new PDO('mysql:host='.$hote.';dbname='.$bdd,$utilisateur,$passe);
$pdoIMMO->exec("SET NAMES utf8");

?>