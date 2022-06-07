<?= var_dump($offersUser) ?>

<!-- HEADER -->
<header class='bgImg-offers'>
    <div class='header-square-black'>
        <p class='header-square-title'>Bonjour</p>
        <p class='header-square-title header-square-title-name'><?= $filiale["name_user"] ?></p>
        </p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    <div class="header-container">
        <div class="header-purple"></div>
    </div>
</header>

<!-- MAIN -->
<main class="account-main">
    <!-- MES INFOS -->
    <div class="contentPage-title">
        <div class="contentPage-title-icon-container">
            <div class='contentPage-title-icon company-title-icon'></div>
            <div class="company-title-icon-inner"></div>
        </div>
        <h2 class='contentPage-title-text'>Mes informations</h2>
    </div>

    <section class='contentPage-p-container account-info-container'>
        <div class="account-info-bloc">
            <p class="account-subtitle">Filiale</p>
            <p class="account-text"><?= $filiale["name_user"] ?></p>
        </div>

        <div class="account-info-bloc">
            <p class="account-subtitle">Tel</p>
            <p class="account-text"><?= $filiale["tel_filiale"] ?></p>
        </div>

        <div class="account-info-bloc">
            <p class="account-subtitle">Email</p>
            <p class="account-text"><?= $filiale["email_filiale"] ?></p>
        </div>
    </section>

    <!-- MES OFFRES -->
    <div class="contentPage-title">
        <div class="contentPage-title-icon-container">
            <div class='contentPage-title-icon company-title-icon'></div>
            <div class="company-title-icon-inner"></div>
        </div>
        <h2 class='contentPage-title-text'>Mes offres d'emploi</h2>
    </div>

    <!-- <?= $offersUser["title_offer"] ?> -->

    <section class='contentPage-p-container account-offers'>
        <a href="index.php?page=ajouter-une-offre-d-emploi" class='btn-submit account-btn-container'>
            <span class='btn-submit-txt account-btn-text'>AJOUTER UNE OFFRE</span>
            <img class='btn-filter-arrow' src="./assets/images/icon/arrow_right_white.svg" alt="" />
        </a>
    </section>
</main>
