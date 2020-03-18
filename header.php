<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script text="text/js" src="/wp-content/themes/phoenixnaptheme/js/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/phoenixnaptheme/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/phoenixnaptheme/css/main.css">
    <script type="text/javascript" src="/wp-content/themes/phoenixnaptheme/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/phoenixnaptheme/fontawesome-free-5.12.1-web/css/all.min.css">
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
                                    <a href="#" class="header-href"><?php esc_html_e($menu_item['title']) ?></a>
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