<?php 
/*
Template Name: Homepage
*/

get_header(); 
?>

<main class="homepage">
    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/solutions'); ?>
    <?php get_template_part('template-parts/products-highlight'); ?>
</main>

<?php get_footer(); ?>
