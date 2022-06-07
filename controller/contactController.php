<?php

include_once('./model/contactModel.php');

class ContactController extends ContactModel
{

    protected $id_contact;
    protected $email_contact;
    protected $firstname_contact;
    protected $lastname_contact;
    protected $message_contact;

    public function contactForm()
    {
        include("./view/templates/contact.php");
    }

    public function sendContactForm()
    {
        $this->email_contact = trim($_POST['email']); // function qui permet de supprimer les espaces avant et après la donnée entrée dans l'input
        $this->firstname_contact = trim($_POST['firstname']);
        $this->lastname_contact = trim($_POST['lastname']);
        $this->message_contact = $_POST['message'];

        if ($this->email_contact !== '' && $this->firstname_contact !== '' && $this->lastname_contact !== '' && $this->message_contact !== '') {
            if ($this->setDatasContact()) {
                echo ('Votre message a bien été envoyé');
            }
        } else {
            $this->contactForm();
        }
    }
}