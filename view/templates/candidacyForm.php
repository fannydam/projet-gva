<!-- HEADER -->
<header class='offer-header'>
    <a href="./">
        <img src="./assets/images/logo/logo_noir.svg" class='logo' alt="">
    </a>
    <div class='header-square-black'>
        <!-- <a href="" class="return-offers">RETOUR AUX OFFRES</a> -->
        <p class='header-square-title'>Ma candidature</p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    <div class="header-container">
        <div class="offer-square-purple offer-square-purple-content">
            <p class="offer-text">Je souhaite postuler pour le poste</p>

            <!-- <select name="id_offres">
                <?php foreach ($offerById as $offersById) { ?>
                    <option value="<?= $offersById["id_offres"] ?>"> <?= $offersById["nom"] ?></option>
                <?php } ?>
            </select> -->

            <!-- p class="offer-intitule"><?= $offerById['intitule_offre'] ?></p> -->
           <!-- <p class="offer-contrat"><?= $oneOffer['contrat_offre'] ?></p>
            <p class="offer-pays"><?= $oneOffer['pays_offre'] ?></p> -->
        </div>
    </div>
</header>

<main>
    <!-- FORMULAIRE POUR POSTULER -->
    <form action="" class='form' enctype="multipart/form-data">
        <p class='form-title'>Merci de préparer votre Curiculum Vitae et Lettre de motivation afin de compléter votre candidature.</p>

        <div class='form-container'>
            <div class='form-container-left'>
                <label for="" class='form-label'>Prénom*</label>
                <input class='form-input candidacy-input' type="text" name="firstname" placeholder='Votre prénom' />

                <label for="" class='form-label'>Nom*</label>
                <input class='form-input candidacy-input' type="text" name="lastname" placeholder='Votre nom' />

                <label for="" class='form-label'>Adresse email*</label>
                <input class='form-input candidacy-input' type="email" name="email" placeholder='Votre adresse email' />

                <label for="fichier" class="form-label input-label">
                    CV*
                    <input type="file" class="form-input input-file candidacy-input" name="fichier" id="fichier">
                    <br>
                    <span class="input-file-text">Ajouter mon CV</span>
                </label>
            </div>

            <div class='form-container-right'>
                <label for="" class='form-label candidacy-label'>Message*</label>
                <textarea class='form-textarea candidacy-textarea' name="message" placeholder='Présentez vous en quelques lignes...'></textarea>

                <label for="fichier" class="form-label input-label">
                    Lettre de motivation
                    <input type="file" class="form-input input-file candidacy-input" name="fichier" id="fichier">
                    <br>
                    <span class="input-file-text">Ajouter ma lettre de motivation</span>
                </label>
            </div>
        </div>

        <p class='required-field'>* champs obligatoire</p>

        <button type='submit' class='btn-submit candidacy-btn-submit'>
            <span class='btn-submit-txt'>ENVOYER MA CANDIDATURE</span>
            <img class='btn-filter-arrow' src="./assets/images/icon/arrow_right_white.svg" alt="" />
        </button>

    </form>
</main>