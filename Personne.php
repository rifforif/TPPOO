<?php

class Personne {
    private $id;
    private $nom;
    private $email;

    public function __construct($id, $nom, $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function afficherInfos() {
        echo "ID: " . $this->id . ", Nom: " . $this->nom . ", Email: " . $this->email . "\n";
    }
}

?>