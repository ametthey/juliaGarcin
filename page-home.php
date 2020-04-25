<?php
/*
 * Template Name: Page d'accueil
 */
get_header();
?>

<div class="container">
    <div class="container__projects">
        <div id="project-1" class="project__item">
            <h5>CATALOGUE DES GENS CONTENTS</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-2" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-3" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-4" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-5" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-6" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-7" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-8" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-9" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-10" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-11" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-12" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-13" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
        <div id="project-14" class="project__item">
            <h5>DRE@M-X</h5>
            <span>Catégorie</span>
        </div>
    </div>

    <?php get_template_part('template-parts/home', 'navigation'); ?>

</div>

<div class="container__images">
    <div class="container_images__info">
        <h5 class="container__images__info__title">This is a title.</h5>
         <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis risus sed iaculis aliquet. Curabitur porta ac turpis eget elementum. Pellentesque ipsum purus, aliquam et urna et, tincidunt tincidunt nulla. Suspendisse laoreet elementum nisl vel luctus.  Maecenas id eros id purus pharetra egestas.
          </p>

        <p class="legend">3min10</p>
    </div>
    <!-- <div id="image&#45;1" class="container__image__item"></div> -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide container__image__item" id="image-1">
            </div>
            <div class="swiper-slide container__image__item upper--image" id="image-2">
            </div>
            <div class="swiper-slide container__image__item upper--image" id="image-3">
            </div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<?php get_template_part('template-parts/home', 'gallery'); ?>

<?php get_template_part('template-parts/home', 'message'); ?>

<?php get_footer(); ?>
