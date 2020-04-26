<!-- project -->
<div class="container__projects" data-simplebar data-simplebar-direction='rtl'> 
    <!-- https://support.advancedcustomfields.com/forums/topic/unique&#45;id&#45;for&#45;repeater&#45;field/ -->
    <?php if( get_field('project_container') ): $i = 0; ?>
        <?php while(has_sub_field('project_container')): $i++; ?>
            <div id="project-<?php echo $i; ?>" class="project__item">
                <h5><?php echo the_sub_field('project_title'); ?></h5>
                <span><?php echo the_sub_field('project_cat'); ?></span>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
