<?php

/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<section class="menu">
    <div class="container-fluid">
        <?php get_template_part('includes/section', 'menu'); ?>
    </div>
</section>

<main>
    <?php get_template_part('includes/section', 'banner'); ?>
    <?php get_template_part('includes/section', 'sections'); ?>
</main>
<section class="contact">
    <div class="container">
        <?php get_template_part('includes/section', 'contact-form'); ?>
    </div>
</section>
<?php get_template_part('includes/section', 'contact-info'); ?>
<?php get_template_part('includes/section', 'footer-main'); ?>

<?php get_footer(); ?>