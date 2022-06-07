<!-- HEADER -->
<header class='bgImg-addOffer'>
    <div class='header-square-black'>
        <p class='header-square-title'>Ajouter une offre d'emploi</p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    <div class="header-container">
        <div class="header-purple"></div>
    </div>
</header>

<main>
    <!-- TITRE -->
    <div class='contentPage-title'>
        <div class="contentPage-title-icon-container">
            <div class='contentPage-title-icon offers-title-icon'></div>
            <div class="offers-title-icon-inner"></div>
        </div>
        <h2 class='contentPage-title-text'>Ma nouvelle offre d'emploi</h2>
    </div>

    <!-- FORM AJOUTER UNE OFFRE -->
    <form class='form' action="" method="POST">

        <div class="form-addOffer-bloc form-addOffer-bloc-filiale-date">

            <div class="form-addOffer-bloc-left filiale-bloc">
                <label for="" class='form-label filiale-label'>Lieu</label>
                <select class='form-input company-filiale-input' name="country">
                    <option value="name">Pays</option>
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?= $country["name_category"] ?>"> <?= $country["name_category"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-addOffer-bloc-right date-bloc">
                <label class='form-label date-label' for="">Date de mise en ligne</label>
                <input class='form-input date-input' name="date" type="date">
            </div>
        </div>

        <div class="form-addOffer-bloc">
            <div class="form-addOffer-bloc-left">
                <label for="" class='form-label'>Intitulé du poste</label>
                <input class='form-input intitule-input' type="name" name="title" placeholder='Intitulé du poste' />

                <label for="" class='form-label'>Domaine professionnel</label>
                <select class='form-input' name="domain">
                    <option value="domaine">Domaine professionnel</option>
                    <?php foreach ($domains as $domain) { ?>
                        <option value="<?= $domain["name_category"] ?>"> <?= $domain["name_category"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-addOffer-bloc-right">
                <label for="" class='form-label'>Type de contrat</label>
                <select class='form-input' name="contract">
                    <option value="contrat">Type de contrat</option>
                    <?php foreach ($contracts as $contract) { ?>
                        <option value="<?= $contract["name_category"] ?>"> <?= $contract["name_category"] ?></option>
                    <?php } ?>
                </select>

                <label for="" class='form-label'>Durée hebdomadaire</label>
                <select class='form-input' name="duration">
                    <option value="contrat">Durée hebdomadaire</option>
                    <?php foreach ($durations as $duration) { ?>
                        <option value="<?= $duration["name_category"] ?>"> <?= $duration["name_category"] ?></option>
                    <?php } ?>
                </select>
            </div>

        </div>

        <label for="" class='form-label'>Description du poste</label>
        <textarea class='form-textarea addOffer-textarea' name="description" cols="30" rows="10" placeholder="Description du poste"></textarea>

        <div class="form-addOffer-bloc">
            <div class="form-addOffer-bloc-left">
                <label for="" class='form-label'>Missions rattachées au poste</label>
                <textarea class='form-textarea addOffer-textarea-mission' name="mission" cols="30" rows="5" placeholder="Missions rattachées au poste"></textarea>
            </div>
            <div class="form-addOffer-bloc-left">
                <label for="" class='form-label'>Profil attendu</label>
                <textarea class='form-textarea addOffer-textarea-profil' name="profile" cols="30" rows="5" placeholder="Profil attendu"></textarea>
            </div>
        </div>

        <label for="" class='form-label'>Contact</label>
        <select class='form-input' name="id_filiale">
            <option value="">Adresse email</option>
            <?php foreach ($infosFiliale as $infoFiliale) { ?>
                <option value="<?= $infoFiliale["id_filiale"] ?>"><?= $infoFiliale["email_filiale"] ?></option>
            <?php } ?>
        </select>


        <button type='submit' class='btn-submit'>
            <p class='btn-submit-txt addOffer-btn'>ENVOYER MON OFFRE</p>
            <img class='btn-filter-arrow' src="./assets/images/icon/arrow_right_white.svg" alt="" />
        </button>

    </form>
</main>