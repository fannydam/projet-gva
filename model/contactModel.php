<?php

include_once('bdd.php');

class ContactModel 
{
    private $database;

    public function __construct()
    {
       $this->database = Db::connexion(); 
    }

    public function setDatasContact() 
    {
        $query = $this->database->prepare('INSERT INTO contact_form(email_contact,firstname_contact,lastname_contact,message_contact) VALUES(?,?,?,?)');
        return $query->execute([$this->email_contact, $this->firstname_contact, $this->lastname_contact, $this->message_contact]);
    }
}