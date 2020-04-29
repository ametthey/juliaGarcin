<?php if( have_rows('gallery_container') ): $i = 0 ?>

<?php while( have_rows('gallery_container') ): the_row(); $i++;

        $title = get_sub_field('gallery_title');
        $desc = get_sub_field('gallery_description');
        $sub = get_sub_field('gallery_sub');
        $galleries = get_sub_field('gallery_gallery');

    ?>

<div class="wrapper__container__images" id="project-<?php echo $i; ?>">

    <div class="container__images">

        <div class="container_images__info">
            <h5 class="container__images__info__title"><?php echo $title; ?></h5>
            <p><?php echo $desc; ?></p>
            <p class="legend"><?php echo $sub; ?></p>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php if( have_rows('gallery_element') ): ?>

                <?php while( have_rows('gallery_element') ): the_row();

                    $image = get_sub_field('gallery_element_image');
                    $embed = get_sub_field('gallery_element_embed');

?>

                <?php if( $embed ) { ?>
                
                
                    <div class="swiper-slide container__image__item">
                        <div class="vimeo__container">
                            <?php echo $embed; ?>    
                        </div>
                    </div>

                <?php } else { ?>

                    <div class="swiper-slide container__images__item" style="background-image: url(<?php echo $image; ?>)">
                    </div>

                <?php } ?>


                <?php endwhile; ?>

                <?php endif; ?>
            </div>
            <div class="swiper-controller">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>

    </div>
</div>

<?php endwhile; ?>

<?php endif; ?>






<div class="wrapper__container__images" id="project-3">
    <div class="container__images">
        <div class="container_images__info">
            <h5 class="container__images__info__title">This is a title.</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis risus sed iaculis aliquet.
                Curabitur porta ac turpis eget elementum. Pellentesque ipsum purus, aliquam et urna et, tincidunt
                tincidunt nulla. Suspendisse laoreet elementum nisl vel luctus. Maecenas id eros id purus pharetra
                egestas.
                <br>
                <br>
                <a href="http://lemonde.fr" target="_blank">Voir le projet</a>
            </p>

            <p class="legend">3min10</p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide container__image__item" id="image-1">
                </div>
                <div class="swiper-slide container__image__item upper--image" id="image-2">
                </div>
                <div class="swiper-slide container__image__item upper--image" id="image-3">
                </div>
                <div class="swiper-slide container__image__item upper--image">
                    <div class="vimeo__container">
                        <!-- allow="autoplay; -->
                        <iframe src="https://player.vimeo.com/video/237872331" frameborder="0" fullscreen
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- <button class="button__gallery">X</button> -->

    </div>
</div>
