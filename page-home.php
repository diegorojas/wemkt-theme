<?php
/*
Template Name: Redirect Portfolio
*/
$location = get_site_url() . "/portfolio";
wp_redirect( $location, 301 );
exit; 
get_header(); ?>

<div class="content"></div>
		
<?php get_footer(); ?>