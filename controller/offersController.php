<?php

include_once("./model/offersModel.php");

class OffersController extends OffersModel
{
    protected $id_offer ;
    protected $date_offer;
    protected $title_offer;
    protected $country_offer;
    protected $contract_offer;
    protected $domain_offer;
    protected $duration_offer;
    protected $description_offer;
    protected $mission_offer;
    protected $profile_offer;

    protected $id_filiale;

    // function pour monter les offres
    public function careers()
    {
        $offers = $this->getOffers();
        include("./view/templates/careers.php");
    }

    public function showOneOffer()
    {
        $this->id_offer = @$_GET['id'];
        $oneOffer = $this->getOfferById();
        include("./view/templates/offer.php");
    }

    public function formOffer()
    {
        include_once('./model/categoriesModel.php');
        $categories = new CategoriesModel;
        
        $countries = $categories->getSubcatCountry();
        $contracts = $categories->getSubcatContract();
        $durations = $categories->getSubcatDuration();
        $domains = $categories->getSubcatDomain();

        include_once('./model/filialesModel.php');
        $filiales = new FilialesModel;
        
        $infosFiliale = $filiales->getInfoFiliale();

        include_once("./view/templates/addOffer.php");
    }
    
    public function addOffer()
    {
        $this->country_offer = trim(@$_POST['country']);
        $this->date_offer = date('Y-m-d');
        $this->title_offer = trim(@$_POST['title']);
        $this->contract_offer = trim(@$_POST['contract']);
        $this->domain_offer = trim(@$_POST['domain']);
        $this->duration_offer = trim(@$_POST['duration']);
        $this->description_offer = trim(@$_POST['description']);
        $this->mission_offer = trim(@$_POST['mission']);
        $this->profile_offer = trim(@$_POST['profile']);
        
        $this->id_filiale = @$_POST['id_filiale']; 

        if ($this->title_offer != ""  && $this->contract_offer != "" && $this->domain_offer != "" && $this->duration_offer != "" && $this->description_offer != "" && $this->mission_offer != "" && $this->profile_offer != "") 
        {
            $this->setNewOffer();
            echo ("<div class='error-msg'>Offre envoyée</div>");
        } else {
            echo ("<div class='error-msg'>Erreur d'envoi</div>");
            $this->formOffer();
        }
    }


}
