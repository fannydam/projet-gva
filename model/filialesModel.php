<?php

include_once('bdd.php');

class FilialesModel
{
    private $db;

    public function __construct()
    {
        $this->db = Db::connexion();
    }

    public function setDatasFiliale()
    {
        $query = $this->db->prepare('INSERT INTO filiales_form(tel_filiale,email_filiale,password_filiale, id_user) VALUES(?,?,?,?)');
        return $query->execute([$this->tel_filiale, $this->email_filiale, $this->password_filiale, $this->id_user]);
    }

    public function getFilialeByEmail()
    {
        return $this->db->query("SELECT * FROM filiales_form WHERE email_filiale='{$this->email_filiale}'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById()
    {
        return $this->db->query("SELECT users.*, filiales_form.id_filiale, filiales_form.tel_filiale, filiales_form.email_filiale FROM users JOIN filiales_form ON users.id_user=filiales_form.id_user WHERE users.id_user='{$this->id_user}';")->fetch(PDO::FETCH_ASSOC);
    }

    public function getInfoFiliale()
    {
        return $this->db->query("SELECT * FROM filiales_form")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getOffersUsers()
    {
        /* return $this->db->query("SELECT offers.*, filiales_form.id_filiale, filiales_form.id_user, users.id_user FROM users JOIN filiales_form ON filiales_form.id_user='{$this->id_user}' JOIN offers ON filiales_form.id_filiale=offers.id_filiale WHERE filiales_form.id_filiale=offers.id_filiale;")->fetch(PDO::FETCH_ASSOC); */
    }

    






    /*     public function getFilialeOffersById()
    {
        return $this->db->prepare("SELECT offers.*, filiale_form.email_filiale, filiale_form.id_user FROM offers JOIN filiale_form ON offers.id_filiale =filiale_form.id_filiale WHERE filiale_form.id_filiale='{$this->id_filiale}'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFilialeByType()
    {
        return $this->db->query("SELECT users.type_user FROM users JOIN filiale_form WHERE users.id_user=filiale_form.id_user")->fetchAll(PDO::FETCH_ASSOC);
    } */
}
