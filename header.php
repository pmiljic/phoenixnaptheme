<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php get_the_title(); ?>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $header_color = (carbon_get_theme_option('crb_header_color') !== '' ? carbon_get_theme_option('crb_header_color') : '#2f3133');
    $contact_menu = carbon_get_theme_option('crb_contact_menu');
    ?>
    <header style="background-color:<?php echo esc_attr($header_color) ?>">
        <div class="menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col header-menu">
                        <?php if (sizeof($contact_menu) > 0) : ?>
                            <?php foreach ($contact_menu as $menu_item) : ?>
                                <div class="header-menu__item d-flex align-items-center">
                                    <i class="far fa-<?php esc_html_e($menu_item['icon_name']) ?>"></i>
                                    <?php if (empty($menu_item['phone'])) : ?>
                                        <a href="#" class="header-href"><?php esc_html_e($menu_item['title']) ?></a>
                                    <?php else : ?>
                                        <a href="tel:<?php esc_html_e($menu_item['phone']) ?>" class="header-href">
                                            <?php esc_html_e($menu_item['title'] . ' | ' . $menu_item['phone']) ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="d-flex">
                            <div class="header-menu__item-btn">
                                <button type="button" class="btn btn-outline-secondary">
                                    <?php esc_html_e('LOGIN') ?>
                                </button>
                            </div>
                            <div class="header-menu__item-btn">
                                <button type="button" class="btn btn-outline-secondary">
                                    <?php esc_html_e('PARTNERS') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>