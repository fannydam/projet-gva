<?php

include_once('./model/filialesModel.php');

class FilialesController extends FilialesModel
{
    /* protected $nom_user; */
    protected $id_filiale;
    protected $tel_filiale;
    protected $email_filiale;
    protected $password_filiale;

    protected $id_user;

    // INSCRIPTION
    public function filialeForm()
    {
        include_once('./model/usersModel.php');
        $user = new UsersModel;
        $users = $user->getUsers();

        include("./view/templates/filiale.php");
    }

    public function sendFilialeForm()
    {
        $this->tel_filiale = trim($_POST['tel']);
        $this->email_filiale = trim($_POST['email']);
        $this->password_filiale = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $this->id_user = $_POST['id_user'];

        if ($this->email_filiale != '' && $this->password_filiale != '') {
            if ($this->setDatasFiliale()) {
                $this->connectionForm();
                echo ('<div class="messageOk">Votre compte a bien été enregistré.</div>');
            }
        } else {
            $this->filialeForm();
            echo ('<div class="messageOk">Merci de remplir de bien compléter les champs.</div>');
        }
    }

    // CONNECTION
    public function connectionForm()
    {
        include("./view/templates/connectionForm.php");
    }

    public function sendConnectionForm()
    {
        $this->email_filiale = trim($_POST['email']);
        $this->password_filiale = $_POST['password'];

        if ($this->email_filiale != '' && $this->password_filiale != '') {

            $filiale = $this->getFilialeByEmail();

            if (password_verify($this->password_filiale, $filiale['password_filiale'])) {
                $_SESSION['name_filiale'] = $filiale['name_filiale'];
                $_SESSION['tel_filiale'] = $filiale['tel_filiale'];
                $_SESSION['email_filiale'] = $filiale['email_filiale'];
                $_SESSION['id_user'] = $filiale['id_user'];
                header('Location: index.php?page=mon-compte');
            }
            echo ($filiale);
        } else {
            echo ('<div class="messageOk">Erreur de connexion</div>');
            $this->connectionForm();
        }
    }

    public function infoUser()
    {
        $this->id_user = @$_SESSION['id_user'];
        $filiale = $this->getUserById();

        include("./view/templates/myAccount.php");
    }

    public function offersUser()
    {
        $this->id_user = @$_SESSION['id_user'];
        $offersUser = $this->getOffersUsers();

        include("./view/templates/myAccount.php");
    }



    // DECONNECTION
    public function deconnexion()
    {
        session_destroy();
        header("Location: index.php");
    }
}
