<?php 
    require_once 'connection.php';
    $client= $connect->query("SELECT*FROM client")-> fetchAll()

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="accueil.css"> 
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
    <div>
        <table border="2px">
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>ADESSE</th>
                <th>TELEPHONE</th>
                <th>EMAIL</th>
                <th>SEXE</th>
                <th>STATUT</th>
            </tr>
            <tbody>
        <tr>
            <?php foreach ($client as $value){ ;?>
            <td><?php echo $value["Id"]?></td>    
            <td><?php echo $value["nom"]?></td>
            <td><?php echo $value["adresse"]?></td>
            <td><?php echo $value["telephone"]?></td>
            <td><?php echo $value["email"]?></td>
            <td><?php echo $value["sexe"]?></td>
            <td><?php echo $value["statut"]?></td>
            <td>
                <a href="modif.php?idclient=<?=$value['Id']?>">Modifier</a>
                
            </td>
        
        </tr>
    <?php } ?>
            </font>
    </tbody>
       

        </table>
    </div>
</body>
</html>