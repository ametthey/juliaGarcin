<!-- navigation -->
<nav>
    <p>Julia Garcin</p>
    <p>A propos</p>    

    <div class="container__about">
        <div class="about__me">
            <a href="mailto:coucou@juliagarcin.com"><h5>coucou@juliagarcin.com</h5></a>         
            <p class="about__description"><?php echo the_field('about_presentation', 'option'); ?></p>
        </div>

        <div class="about__parutions">
            <h5>Articles QUD Magazine</h5>        
            <!--
            <?php if( have_rows('link_container' , 'option') ): ?>
                <?php while( have_rows('link_container', 'option') ):
                    $text = get_sub_field('link_text');
                    $link = get_sub_field('link_link');
                ?>
                    <a href="<?php echo $link; ?>"><?php echo $text; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
            -->

        </div>
    </div>
</nav>