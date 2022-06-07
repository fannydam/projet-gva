<nav>
    <a href="./">
        <img class='logo' src="./assets/images/logo/logo_blanc2.svg" alt="" />
    </a>

    <?php
    if (isset($_SESSION['email_filiale'])) {
    ?>
        <a class="navbar-btn-filiale navbar-btn-addOffer" href="index.php?page=mon-compte">
            <div>MON COMPTE</div>
            <span>MON COMPTE</span>
        </a>
        <a class="navbar-btn-filiale navbar-btn-logout" href="index.php?page=deconnexion">
            <div>ME DECONNECTER</div>
            <span>ME DECONNECTER</span>
        </a>

    <?php } else { ?>
        <a class="navbar-btn-filiale" href="index.php?page=filiale">
            <div>GVA FILIALE</div>
            <span>GVA FILIALE</span>
        </a>

    <?php } ?>


    <div class="burger">
        <span></span>
    </div>

</nav>

<!-- MENU LATERAL -->
<div class='menu-lat'>
    <ul class='list'>
        <li class='list-name list-name-groupe anim-name'>LE GROUPE <span class="list-name-arrow">></span></li>
        <a href='index.php?page=notre-engagement'>
            <li class='list-name list-name-engage anim-name'>NOS ENGAGEMENTS</li>
        </a>
        <a href='index.php?page=carrieres'>
            <li class='list-name list-name-carriere anim-name'>CARRIÈRES</li>
        </a>
        <a href='index.php?page=actualites'>
            <li class='list-name list-name-actualite anim-name'>ACTUALITÉS</li>
        </a>
        <a href='index.php?page=presse'>
            <li class='list-name list-name-presse anim-name'>PRESSE</li>
        </a>
        <a href='index.php?page=nous-contacter'>
            <li class='list-name list-name-contact anim-name'>NOUS CONTACTER</li>
        </a>
    </ul>
</div>

<!-- SOUS MENU -->
<div class='submenu-lat'>
    <ul class='submenu-list'>
        <a href='index.php?page=a-propos-de-gva'>
            <li class='submenu-name'>À PROPOS DE GVA</li>
        </a>
        <a href='index.php?page=notre-activite'>
            <li class='submenu-name'>NOTRE ACTIVITÉ</li>
        </a>
        <a href='index.php?page=notre-mission'>
            <li class='submenu-name'>NOTRE MISSION</li>
        </a>
        <a href='index.php?page=gouvernance'>
            <li class='submenu-name'>GOUVERNANCE</li>
        </a>
    </ul>
</div>

<!-- OVERLAY -->
<div class='overlay'></div>
<a href="https://www.linkedin.com/company/gva-africa/" target="_blank"><img class='overlay-img-in' src="./assets/images/icon/picto_linkedin_white.svg" alt="" /></a>