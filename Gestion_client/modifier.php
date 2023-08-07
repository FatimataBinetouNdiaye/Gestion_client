<?php
require_once 'connection.php';
$pdoStat=$connect->prepare('UPDATE client set nom=:nom, adresse=:adresse,
 telephone=:telephone, email=:email, sexe=:sexe, statut=:statut 
 WHERE Id=:Id LIMIT 1');

$pdoStat->bindValue(':Id', $_POST['idclient'], PDO:: PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
$pdoStat->bindValue(':statut', $_POST['statut'], PDO::PARAM_STR);

$modif = $pdoStat->execute();
if ($modif){
   // header('location:liste.php');
    $mess='le client a été modifier';
}
else{
    //header('location:client.php');
    $mess ='echec de la modification';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
            <ul>
                <li> <a href='accueil.php'>ACCUEIL</a></li>
                <li> <a href='le_html.php'>Ajouter un client</a></li>
                <li> <a href='liste.php'>Liste des clients</a></li>
                <li> <a href='sup.php'>Supprimer un client</a></li>
            </ul>
        </nav>
   <h1> <?php echo ($mess) ;?></h1>

  
</body>
</html>