<!-- HEADER -->
<header class='header-news'>
    <a href="./">
        <img src="./assets/images/logo/logo_noir.svg" class='logo' alt="">
    </a>
    <div class='header-square-black'>
        <p class='header-square-title'>Actualités</p>
        <a href='' class='header-page-scroll'>
            <span class='header-page-text'>SCROLL</span>
            <img class='header-page-arrow' src='./assets/images/icon/arrow_down.png' alt="" />
        </a>
    </div>

    <div class="header-container">
        <a href="" class='article-link article-left fadeUp'>
            <div class='article-left-container-img'>
                <img class='article-left-img' src="../../assets/images/kinshasa.png" alt="" />
            </div>
            <p class='article-date'>10.12.2022</p>
            <h2 class='article-left-title'>GVA RDC lance Canalbox à Kinshasa</h2>
        </a>
    </div>
</header>

<!-- MAIN -->

<?php foreach ($news as $new) { ?>
        <!-- ARTICLE GAUCHE -->
        <a href="" class='article-link article-left fadeUp'>
            <p class='article-date'><?= $new['date_news'] ?></p>
            <h2 class='article-left-title'><?= $new['title_news'] ?></h2>
            <div class='news-container-img'>
                <img class='news-img' src=<?= $new['image_news'] ?> alt="" />
            </div>
        </a>
<?php } ?>

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