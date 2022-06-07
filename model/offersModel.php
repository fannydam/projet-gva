<?php

include_once("bdd.php");

class OffersModel {

    private $dataB;

    // function contruct pour instancier la class Db du fichier bdd.php
    public function __construct()
    {
        $this->dataB = Db::connexion();
    }

    // function getOffers pour sélectionner une offre de la table offre
    public function getOffers()
    {
        return $this->dataB->query("SELECT * FROM offers")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOfferById()
    {
        return $this->dataB->query("SELECT * FROM offers WHERE offers.id_offer='{$this->id_offer}'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getOfferCatById()
    {
        return $this->dataB->query("SELECT * FROM offers INNER JOIN categories ON offers.id_category=categories.id_category WHERE offers.id_category='{$this->id_offer}'")->fetch(PDO::FETCH_ASSOC);
    }
   
    public function setNewOffer()
    {
        $query = $this->dataB->prepare("INSERT INTO offers(date_offer, domain_offer, title_offer, country_offer, contract_offer, description_offer, mission_offer, profile_offer, duration_offer, id_filiale) VALUES (?,?,?,?,?,?,?,?,?,?)");
        return $query->execute([$this->date_offer, $this->domain_offer, $this->title_offer, $this->country_offer, $this->contract_offer, $this->description_offer, $this->mission_offer, $this->profile_offer, $this->duration_offer, $this->id_filiale]);
    }

    public function setOffers()
    {
        $query = $this->dataB->prepare("INSERT INTO offers(title_offer, date_offer, domain_offer, contract_offer, description_offer, duration_offer, id_filiale) VALUES (?,?,?,?,?,?,?)");
        return $query->execute([$this->title_offer, $this->date_offer, $this->domain_offer, $this->contract_offer, $this->description_offer, $this->duration_offer, $this->id_filiale]);
    }

    public function setDatasCandidacy()
    {
        $query = $this->dataB->prepare('INSERT INTO candidate_form(firstname_candidate, lastname_candidate, email_candidate, message_candidate, resume_candidate, coverletter_candidate) VALUES(?,?,?,?,?,?)');
        return $query->execute([$this->firstname_candidate, $this->lastname_candidate, $this->email_candidate, $this->message_candidate, $this->resume_candidate, $this->coverletter_candidate]);
    }
}