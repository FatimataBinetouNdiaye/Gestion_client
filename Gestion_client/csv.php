<?php
require_once "connection.php";
function genererCSVListeClients($clients) {
    // Nom du fichier CSV que vous souhaitez générer
    $nomFichier = 'liste_clients.csv';

    // Ouvrir le fichier en mode écriture (w)
    $fichier = fopen($nomFichier, 'w');

    // En-tête du fichier CSV
    $entetes = array('Nom', 'Adresse', 'Téléphone', 'Email', 'Sexe', 'Statut');
    fputcsv($fichier, $entetes);

    // Contenu du fichier CSV
    foreach ($clients as $client) {
        $ligne = array(
            $client['nom'],
            $client['adresse'],
            $client['telephone'],
            $client['email'],
            $client['sexe'],
            $client['statut']
        );
        fputcsv($fichier, $ligne);
    }

    // Fermer le fichier
    fclose($fichier);
}
// Exemple d'utilisation pour générer la liste des clients sous forme de fichier CSV
genererCSVListeClients($listeDesClients);
