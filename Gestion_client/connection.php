<?php
$dbhost = 'mysql-gestionclientphp.alwaysdata.net';
$dbname = 'gestionclientphp_gestion_client';
$dbuser = '323329_fabi';
$dbpswd = 'fabiND09';
try{
    $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
   
}catch (PDOException $e){
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}
