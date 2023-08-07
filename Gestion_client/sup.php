<?php
require_once 'connection.php';
if (isset($_POST["sup"])){
    $id=$_POST['id'];

    $fab= $connect->query("DELETE FROM client WHERE id = $id");
 
 if ( $fab) {
    
    header('Location: le_html.php');
   // echo "Supprimer avec succes";
} else {
    header('location:accueil.php');
   // echo "L'ID n'existe pas";
}}

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
        <form action="" method="POST">
        <fieldset>
            <legend><font color='blue'>Supprimer UN CLIENT</font></legend>
            
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="  id" type="int" name="id">
            </div>
            <br>
           
            <div>
                <label for=""> </label>
                <input id="jouer" placeholder="Email"  type="text" name="email">
            </div>
            <div>
                <button id="bouton" type="submit" name="sup" value="sup">Supprimer</button>
            </div>

        </form>
    </div>
</body>
</html>