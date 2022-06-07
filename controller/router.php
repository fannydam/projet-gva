<?php


$page = @$_GET['page'];

switch ($page) {

        // FILIALE
    case 'filiale':

        include('./controller/filialesController.php');
        $users = new FilialesController;

        if (isset($_POST['email'])) {   // isset() = si l'email est bien complété
            $users->sendFilialeForm();  // se diriger sur sendFilialeForm()
        } else {
            $users->filialeForm();  // sinon, se diriger sur filialeForm()
        }
        break;

        // GROUPE
    case 'a-propos-de-gva':
        include('./controller/aboutController.php');
        $about = new AboutController;
        $about->about();
        break;

    case 'notre-activite':
        include('./controller/activitiesController.php');
        $activities = new ActivitiesController;
        $activities->activities();
        break;

    case 'notre-mission':
        include('./controller/missionsController.php');
        $missions = new MissionsController;
        $missions->missions();
        break;

    case 'gouvernance':
        include('./controller/governanceController.php');
        $governance = new GovernanceController;
        $governance->governance();
        break;

        // ENGAGEMENT
    case 'notre-engagement':
        include('./controller/commitmentController.php');
        $commitment = new CommitmentController;
        $commitment->commitment();
        break;

        // CARRIERES ET OFFRES
    case 'carrieres':
        include('./controller/offersController.php');
        $offers = new OffersController;
        $offers->careers();

    case 'offre':
        include('./controller/offersController.php');
        $articles = new OffersController;
        $articles->showOneOffer();
        break;



    case 'connexion':
        include('./controller/filialesController.php');
        $filiale = new FilialesController;

        if (isset($_POST['email'])) {
            $filiale->sendConnectionForm();
        } else {
            $filiale->connectionForm();
        }
        break;

    case 'mon-compte':
        include('./controller/filialesController.php');
        $account = new FilialesController;
        $account->infoUser();
        $account->offersUser();
        break;

    case 'ajouter-une-offre-d-emploi':
        include("./controller/offersController.php");
        $offer = new OffersController;

        if (isset($_POST["title"])) {
            $offer->addOffer();
        } else {
            $offer->formOffer();
        }
        break;

    case 'deconnexion':
        include('./controller/filialesController.php');
        $users = new FilialesController;
        $users->deconnexion();
        break;

        // CANDIDAT
    case 'postuler':
        include('controller/candidacyController.php');
        $candidacy = new CandidacyController;

        if (isset($_POST["email"])) {
            $candidacy->sendCandidacyForm();
        } else {
            $candidacy->candidacyForm();
        }
        break;

        // NEWS
        /*  case 'actualites':
        include('./controller/newsController.php');
        $news = new NewsController;
        $news->showNews();
        break; */

        // PRESSE
    case 'presse':
        include('./controller/pressController.php');
        $press = new PressController;
        $press->press();
        break;

        // CONTACT
    case 'nous-contacter':
        include('./controller/contactController.php');
        $users = new ContactController;

        if (isset($_POST['email'])) {   // isset() = si l'email est bien complété
            $users->sendContactForm();      // se diriger sur inscription()
        } else {
            $users->contactForm();  // sinon, aller sur showFormInscription()
        }
        break;

        // ERROR 404
        /*  case '':
        include('controller/404Controller.php');
        $home = new NotFoundController;
        $home->notFound(); */

        /*     case './':
        include('./controller/homeController.php');
        $about = new HomeController;
        $about->home();
        break; */
    default:
        include('controller/homeController.php');
        $home = new HomeController;
        $home->home();
}
