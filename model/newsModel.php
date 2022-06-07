<?php

include_once("bdd.php");

class NewsModel {

    private $dataB;

    public function __construct()
    {
        $this->dataB = Db::connexion();
    }

    public function getNews()
    {
        return $this->dataB->query("SELECT * FROM news")->fetchAll(PDO::FETCH_ASSOC);
    }
}