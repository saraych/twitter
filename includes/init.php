<?php

                                         
ini_set('display_errors',1);
ini_set('error_reporting',E_ALL);

/* Connexion à une base ODBC avec l'invocation de pilote */

$bdd = 'mysql:dbname=twitter;host=127.0.0.1';
$user = 'root';
$password = '';
try {
    $bdd = new PDO($bdd ,$user,$password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}




    