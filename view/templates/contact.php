<!-- HEADER -->
<header class='bgImg-contact'>
    <div class='header-square-black'>
        <p class='header-square-title'>Nous contacter</p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    <div class="header-container">
        <div class="header-purple"></div>
    </div>
</header>


<!-- FORM CONTACT -->
<form class='form contact-form' action="" method="POST" onsubmit="return validation()">
    <p class='form-title'>Si vous n’avez pas trouvé les informations que vous souhaitiez sur notre site, nous sommes à votre écoute via le formulaire de contact :</p>

    <div class='form-container'>
        <div class='form-container-left'>
            <label for="" class='form-label'>Adresse email*</label>
            <input class='form-input' type="email" name="email" placeholder='Votre adresse email' />

            <label for="" class='form-label'>Prénom*</label>
            <input class='form-input' type="text" name="firstname" placeholder='Votre prénom' />
            <p class="error-message"></p>

            <label for="" class='form-label'>Nom*</label>
            <input class='form-input' type="text" name="lastname" placeholder='Votre nom' />
            <p class="error-message"></p>
        </div>

        <div class='form-container-right'>
            <label for="" class='form-label'>Message*</label>
            <textarea class='form-textarea' name="message" placeholder='Tapez ici votre message'></textarea>
            <p class="error-message"></p>

            <p class='required-field'>* champs obligatoire</p>
        </div>
    </div>

    <label class='radio radio-text' for="cg">
        <input type="checkbox" id="cg" value="cg" />
        J’accepte les conditions générales relatives au traitement de mes données personnelles telles que définies dans la politique de confidentialité
        <span class='radio-checkmark'></span>
    </label>

    <button type='submit' class='btn-submit'>
        <span class='btn-submit-txt'>ENVOYER LE MESSAGE</span>
        <img class='btn-filter-arrow' src="./assets/images/icon/arrow_right_white.svg" alt="" />
    </button>

</form>



<!-- BLOC GROUPE COMPLET -->

<div class='bloc-group fadeLeft'>

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
        <img class='btn-filter-arrow' src='./../../assets/images/icon/arrow_right_white.svg' alt="" />
        </a>

        <a href='index.php?page=notre-activite' class="categories categories-2 border-b border-l">
            <p class="categories-txt">NOTRE ACTIVITÉ</p>
            <img class='btn-filter-arrow' src='./../../assets/images/icon/arrow_right_white.svg' alt="" />
        </a>

        <a href='index.php?page=notre-mission' class="categories categories-3">
        <p class="categories-txt">NOTRE MISSION</p>
        <img class=' btn-filter-arrow' src='./../../assets/images/icon/arrow_right_white.svg' alt="" />
        </a>

        <a href='index.php?page=gouvernance' class="categories categories-4 border-l">
        <p class="categories-txt">GOUVERNANCE</p>
        <img class=' btn-filter-arrow' src='./../../assets/images/icon/arrow_right_white.svg' alt="" />
        </a>
    </div>

</div>