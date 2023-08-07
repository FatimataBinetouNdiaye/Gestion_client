
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
   <div class="contener">
    <h3 class="bel">Ajouter un nouveau client</h3>
   <form action="gesclient.php" method="post">
            <fieldset>
            <legend><font color='blue'>NOUVEAU CLIENT</font></legend>
            
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="  NOM" type="text" name="nom">
            </div>
            <br>
           
            <div>
                <label for=""> </label>
                <input id="jouer" placeholder="Adresse"  type="text" name="adresse">
            </div>
           
             
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="Telephone" type="int" name="telephone">
            </div>
            
            <br>
             
            <div>
                <label for=""> </label>
                <input id="jouer" placeholder="Email" type="email" name="email">
            </div>
        
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="sexe" type="text" name="sexe">
            </div>
            <br>
           
            <div>
                <label for=""></label>
                <input id="jouer" placeholder="Statut" type="text" name="statut">
            </div>
            <br>
           
            <div>
                <button id="bouton" type="submit" name="suivant" value="suivant">SUIVANT</button>
            </div>
            
            <br>
        </fieldset>
            </form>

   </div>
</body>
</html>