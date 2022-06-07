<?php

class Db
{
    public static function connexion()
    {
        try 
        {
            $db = new PDO("mysql:host=localhost;dbname=projetGva-greta", "root", "root");
            // AFFICHER LES ERREURS LIEES A LA BDD
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $db;
        }
        catch(Exception $e)
        {
            die("Problème de connexion à la BDD : $e");
        }
    }
}

// $dataBase = Db::connexion();