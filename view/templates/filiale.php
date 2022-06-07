<!-- HEADER -->
<header class='bgImg-company'>
    <div class='header-square-black'>
        <p class='header-square-title'>Filiale GVA</p>
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
    <section class='contentPage-p-container company-form-container'>
        <!-- INSCRIPTION FILIALE FORM -->
        <form class="form-inscription" action="" method="POST">
            <!-- TITLE FORM -->
            <div class='company-title'>
                <div class="contentPage-title filiale-title">
                    <div class="contentPage-title-icon-container">
                        <div class='contentPage-title-icon company-title-icon'></div>
                        <div class="company-title-icon-inner"></div>
                    </div>
                    <h2 class='contentPage-title-text'>Créer mon compte filiale</h2>
                </div>
            </div>

            <!-- FIELDS FORM -->
            <div class="company-bloc-filiale">
                <select class='form-input company-filiale-input' name="id_user">
                    <option value="name">Ma filiale GVA</option>
                    <?php foreach ($users as $user) { ?>
                        <option value="<?= $user["id_user"] ?>"><?= $user["name_user"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <label class="form-label" for="tel">Tel*</label>
            <input class="form-input" type="tel" name="tel" placeholder='Votre numéro de téléphone'>

            <label class="form-label" for="email">Adresse email*</label>
            <input class="form-input" type="email" name="email" placeholder='Votre adresse email'>

            <label class="form-label" for="password">Mot de passe*</label>
            <input class="form-input" type="password" name="password" placeholder='Votre mot de passe'>

            <label class="form-label" for="password">Confirmation du mot de passe*</label>
            <input class="form-input company-input" type="password" name="passwordConfirm" placeholder='Confirmation de votre mot de passe'>

            <p class='required-field'>* champs obligatoire</p>

            <!-- BUTTON FORM -->
            <button type='submit' class='btn-submit company-btn-submit'>
                <span class='btn-submit-txt company-btn-submit-txt'>JE M'INSCRIS</span>
                <img class='btn-filter-arrow' src="./assets/images/icon/arrow_right_white.svg" alt="" />
            </button>
        </form>

        <!-- BLOC CONNECTION FORM -->
        <div class="company-connection-container">
            <div class='company-connection-bg'></div>
            <div class='company-connection-inner'></div>
            <p class="company-connection-inscris">Déjà inscris ?</p>
            <a href="index.php?page=connexion">
                <p class="company-connection-connecte">Je me connecte</p>
            </a>
        </div>
    </section>

</main>