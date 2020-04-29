<?php
/*
 * Template Name: Demo Page Template
 * the template for displaying demo page
 
 get_header(); 


if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    }
}

 else {
     // what happes if there are no posts!
     echo '<p>Para</p>'
 }

get_sidebar();
get_footer();
