
<!-- HEADER -->
<header class='offer-header'>
    <a href="./">
        <img src="./assets/images/logo/logo_noir.svg" class='logo' alt="">
    </a>
    <div class='header-square-black'>
        <!-- <a href="" class="return-offers">RETOUR AUX OFFRES</a> -->
        <p class='header-square-title'>Nos offres d'emploi</p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    
    <div class="header-container">
        <div class="offer-square-purple offer-square-purple-content">
            <p class="offer-date"><?= $oneOffer['date_offer'] ?></p>
            <p class="offer-intitule"><?= $oneOffer['title_offer'] ?></p>
            <p class="offer-contrat"><?= $oneOffer['contract_offer'] ?></p>
            <p class="offer-pays"><?= $oneOffer['country_offer'] ?></p>
        </div>
    </div>
</header>

<!-- MAIN -->
<main class="offer-main">

    <!-- DESCRIPTION DE L'OFFRE -->
    <section class='contentPage-p-container'>
        <p class="offer-description"><?= $oneOffer['description_offer'] ?></p>

        <h3 class="contentPage-subtitle">Missions rattachées au poste</h3>
        <p class="offer-mission"><?= $oneOffer['mission_offer'] ?></p>

        <h3 class="contentPage-subtitle">Profil attendu</h3>
        <p class="offer-mission"><?= $oneOffer['profile_offer'] ?></p>
    </section>

    <a href="index.php?page=postuler" class='btn-container offer-btn-container'>
        <div class='btn-content offer-btn-content'>
            <p class='offer-btn-txt'>POSTULER À L'OFFRE</p>
        </div>
    </a>


    <!-- BLOC GROUPE COMPLET -->

    <div class='bloc-group'>

        <div class="bloc-group-in2">
            <div class="bloc-group-titles">
                <h2 class="title-1">gva</h2>
                <h3 class="title-2">aujourd'hui et demain</h3>
                <p class="title-3">Rendre accessible le très haut débit en Afrique pour décupler l’impact positif d’Internet</p>
            </div>
        </div>

        <div class="bloc-group-in2 bloc-group-categories">
            <a href='index.php?page=a-propos-de-gva' class="categories categories-1 border-b">
                <p class="categories-txt">À PROPOS DE GVA</p>
                <img class='btn-filter-arrow' src='../assets/images/icon/arrow_right_black.svg' alt="" />
            </a>

            <a href='index.php?page=notre-activite' class="categories categories-2 border-b border-l">
                <p class="categories-txt">NOTRE ACTIVITÉ</p>
                <img class='btn-filter-arrow' src='./.assets/images/icon/arrow_right_black.svg' alt="" />
            </a>

            <a href='index.php?page=notre-mission' class="categories categories-3">
                <p class="categories-txt">NOTRE MISSION</p>
                <img class=' btn-filter-arrow' src='../assets/images/icon/arrow_right_black.svg' alt="" />
            </a>

            <a href='index.php?page=gouvernance' class="categories categories-4 border-l">
                <p class="categories-txt">GOUVERNANCE</p>
                <img class=' btn-filter-arrow' src='../assets/images/icon/arrow_right_black.svg' alt="" />
            </a>
        </div>

    </div>

</main>