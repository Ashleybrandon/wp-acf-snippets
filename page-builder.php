<?php 
/**
 *  Template Name: Page Builder
 */

get_header(); 

if( have_rows('page_builder') ) : while( have_rows('page_builder') ) : the_row();	

//Home Hero
if( get_row_layout() == 'home_hero' ):
    include(dirname(__DIR__).'/wp-acf-snippets/inc/home-hero.php');
endif;

// Page body
if( get_row_layout() == 'new_ways_body' ):
  include(dirname(__DIR__).'/wp-acf-snippets/inc/new-ways-body.php');
endif;

endwhile;

else : 

endif;

get_footer(); 

?>

