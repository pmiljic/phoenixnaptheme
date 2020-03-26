<?php

/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<?php get_template_part('includes/section', 'menu'); ?>
<main>
    <?php get_template_part('includes/section', 'banner'); ?>
    <?php get_template_part('includes/section', 'sections'); ?>
</main>
<?php get_template_part('includes/section', 'contact-form'); ?>
<?php get_template_part('includes/section', 'contact-info'); ?>
<?php get_template_part('includes/section', 'footer-main'); ?>
<?php get_footer(); ?>