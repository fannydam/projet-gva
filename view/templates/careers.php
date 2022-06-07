<!-- HEADER -->
<header class='bgImg-offers'>
    <div class='header-square-black'>
        <p class='header-square-title'>Nous rejoindre</p>
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
<main>

    <!-- NOUS REJOINDRE -->
    <div class='contentPage-title'>
        <div class="contentPage-title-icon-container">
            <div class='contentPage-title-icon offers-title-icon'></div>
            <div class="offers-title-icon-inner"></div>
        </div>
        <h2 class='contentPage-title-text'>Entrer dans le projet</h2>
    </div>

    <section class='contentPage-p-container'>
        <h3 class="contentPage-subtitle">Découvrir notre réseau</h3>
        <p class='contentPage-p-text'>Group Vivendi Africa est un groupe en pleine croissance animé par la volonté de devenir leader du très haut débit en Afrique..</p>
        <p class='contentPage-p-text'>En nous rejoignant, vous travaillerez sur des projets de bien commun qui donneront du sens à votre investissement personnel et feront votre fierté.</p>
        <p class='contentPage-p-text'>Vous évoluerez avec des professionnels d’horizons différents aux compétences très variées dans un univers propice aux échanges et aux évolutions de carrière.</p>
    </section>

    <!-- SECTION OFFERS -->
    <div class='contentPage-title'>
        <div class="contentPage-title-icon-container">
            <div class='contentPage-title-icon offers-title-icon'></div>
            <div class="offers-title-icon-inner"></div>
        </div>
        <h2 class='contentPage-title-text'>Connectons nos compétences</h2>
    </div>

    <section class='contentPage-p-container'>
        <!-- BANDEAU OFFRES  -->
        <!-- <div class='offers-section'>
            <div class='offers-section-title'>offre(s)</div>
            <div class='offers-section-filter'>
                <p class='filter-txt'>FILTRER</p>
                <img class='filter-icon' src="../../assets/images/icon/icon-filter.svg" alt="" />
            </div>
        </div> -->

        <h3 class="contentPage-subtitle">Découvrir nos offres d'emplois</h3>

        <!-- AFFICHER TOUTES LES OFFRES DE LA BDD-->
        <div class='offers-card'>
            <?php foreach ($offers as $offer) { ?>
                <a href="index.php?page=offre&id=<?= $offer['id_offer']; ?>">
                    <div class='offers-content'>
                        <div class='offers-date'><?= $offer['date_offer'] ?></div>
                        <div class='offers-title'><?= $offer['title_offer'] ?></div>
                        <div class='offers-contract'><?= $offer['contract_offer'] ?></div>
                        <div class='offers-country'><?= $offer['country_offer'] ?></div>
                        <div class='offers-link'>VOIR L'OFFRE</div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>

</main>