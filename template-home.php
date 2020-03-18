<?php

/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<section class="menu">
    <div class="container-fluid">
        <div class="row menu__row justify-content-between">
            <?php get_template_part('includes/section', 'menu'); ?>
        </div>
    </div>
</section>

<main>
    <?php get_template_part('includes/section', 'banner'); ?>
    <?php get_template_part('includes/section', 'sections'); ?>
</main>