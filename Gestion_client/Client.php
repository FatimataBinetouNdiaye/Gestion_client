<?php
require_once "connection.php";
include "gesclient.php";
class Client {
    private $id;
    private $nom;
    private $adresse;
    private $telephone;
    private $email;
    private $sexe;
    private $statut;

    // Constructeur
    public function __construct($id, $nom, $adresse, $telephone, $email, $sexe, $statut) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->sexe = $sexe;
        $this->statut = $statut;
    }

    // Méthodes d'accès (getters)
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function getTelephone() {
        return $this->telephone;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getSexe() {
        return $this->sexe;
    }
    public function getStatut() {
        return $this->statut;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }
}
?>