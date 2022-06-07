<?php
include_once("./model/usersModel.php");

class UsersController extends UsersModel
{

    protected $id_user;
    protected $type_user;
    protected $id_parent_user;

    public function usersFiliale()
    {
        $usersFiliale = $this->getFilialeById();
        include("./view/templates/filiale.php");
    }

    public function usersFiliale2()
    {
        $usersFiliale = $this->getFilialeById();
        include("./view/templates/addOffer.php");
    }

   
}