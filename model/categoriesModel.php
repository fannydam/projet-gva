<?php

include_once("bdd.php");

class CategoriesModel
{

    private $dataB;

    public function __construct()
    {
        $this->dataB = Db::connexion();
    }

    public function getAllCategories()
    {
        return $this->dataB->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSubcatContract()
    {
        return $this->dataB->query("SELECT * FROM categories WHERE id_parent=1")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSubcatCountry()
    {
        return $this->dataB->query("SELECT * FROM categories WHERE id_parent=2")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getSubcatDuration()
    {
        return $this->dataB->query("SELECT * FROM categories WHERE id_parent=3")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getSubcatDomain()
    {
        return $this->dataB->query("SELECT * FROM categories WHERE id_parent=4")->fetchAll(PDO::FETCH_ASSOC);
    }
}