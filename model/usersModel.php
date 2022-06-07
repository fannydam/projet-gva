<?php

include_once("bdd.php");

class UsersModel {

    private $dataB;

    // function contruct pour instancier la class Db du fichier bdd.php
    public function __construct()
    {
        $this->dataB = Db::connexion();
    }

    public function getUsers()
    {
        return $this->dataB->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }
    
   
}