<?php
//$connect=new PDO("mysql:host=localhost;dbname=gestion_client",'root','');
require_once 'connection.php';
$pdoStat=$connect->prepare('INSERT INTO client VALUES (NULL,:nom, :adresse, :telephone, :email, :sexe, :statut)');


$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
$pdoStat->bindValue(':statut', $_POST['statut'], PDO::PARAM_STR);

$insertion= $pdoStat->execute();

if ($insertion){
    header('location:liste.php');
   // $message='le client a été ajouté';
}
else{
    header('location:client.php');
    //$message='echec de linsertion';
}







