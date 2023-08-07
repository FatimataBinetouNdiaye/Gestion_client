<?php 
    require_once "connection.php";
    
     $sql=$connect->prepare( "SELECT * FROM client WHERE Id=:Id ");
     $sql->bindValue(':Id', $_GET['idclient'], PDO:: PARAM_INT);
     $sql->execute();
     $value= $sql->fetch();
     
     
    



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
   <div class="contener">
    <h2 class="bel">Modifier un client</h2>
   <form action="modifier.php" method="POST">
            <fieldset>
            <legend><font color='blue'>Mdifications</font></legend>
            <input type="hidden" name=idclient value="<? $value['Id']?>">
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="  NOM" type="text" name="nom"value="<?php echo $value['nom'];?>">
            </div>
            <br>
           
            <div>
                <label for=""> </label>
                <input id="jouer" placeholder="Adresse"  type="text" name="adresse"value="<?php echo $value['adresse'];?>">
            </div>
           
             
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="Telephone" type="int" name="telephone"value="<?php echo  $value['telephone'];?>">
            </div>
            
            <br>
             
            <div>
                <label for=""> </label>
                <input id="jouer" placeholder="Email" type="email" name="email"value="<?php echo $value['email'];?>">
            </div>
        
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="sexe" type="text" name="sexe"value="<?php echo $value['sexe'];?>">
            </div>
            <br>
           
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="Statut" type="text" name="statut"value="<?php echo  $value['statut'];?>">
            </div>
            <br>
           
            <div>
                <button id="bouton" type="submit" name="suivant" value="suivant">Enregistrer les modifications</button>
            </div>
            
            <br>
        </fieldset>
            </form>

   </div>
</body>
</html>