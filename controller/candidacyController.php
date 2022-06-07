<?php

include_once("./model/offersModel.php");

class CandidacyController extends OffersModel
{
    protected $id_candidate;
    protected $firstname_candidate;
    protected $lastname_candidate;
    protected $email_candidate;
    protected $message_candidate;
    protected $resume_candidate;
    protected $coverletter_candidate;
      
    protected $id_offer;

    public function candidacyForm()
    {
        /* $this->id_offres = @$_GET['id'];
        $offerById = $this->getOfferCatById(); */

        include("./view/templates/candidacyForm.php");
    }
    
    public function sendCandidacyForm()
    {
        $this->firstname_candidate = trim($_POST['firstname']);
        $this->lastname_candidate = trim($_POST['lastname']);
        $this->email_candidate = trim($_POST['email']); 
        $this->message_candidate = $_POST['message'];
        $this->resume_candidate = $this->fileUpload(); 
        $this->coverletter_candidate = $this->fileUpload();

        if ($this->firstname_candidate != '' && $this->lastname_candidate != '' && $this->email_candidate != '' && $this->message_candidate != '' && $this->resume_candidate != '') {
            if ($this->setDatasCandidacy()) {
                echo ('Votre candidature a bien été envoyé');
            }
        } else {
            echo ("Erreur d'envoi du message");
            $this->candidacyForm();
        }
    }

    public function fileUpload()
    {
        // var_dump($_FILES['fichier']);

        $file = explode('.', $_FILES['fichier']['name']);
        $extension = end($file);

        $path = 'media/' . microtime(true) . '.' . $extension;
        $typeFichierTmp = mime_content_type($_FILES['fichier']['tmp_name']);

        $fileOk = ['image/jpeg', 'image/png'];

        if (in_array($typeFichierTmp, $fileOk)) {
            if (move_uploaded_file($_FILES['fichier']['tmp_name'], $path)) {
                return $path;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}