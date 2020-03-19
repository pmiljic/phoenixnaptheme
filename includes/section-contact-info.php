<?php
$background_color = (carbon_get_theme_option('crb_contact_info_color') !== '' ? carbon_get_theme_option('crb_contact_info_color') : '#016ba7');
$contact_menu = carbon_get_theme_option('crb_contact_menu');
?>
<section class="contact-info-menu" style="background-color:<?php echo esc_attr($background_color) ?>">
    <div class="container">
        <div class="row d-flex justify-content-start">
            <?php if (sizeof($contact_menu) > 0) : ?>
                <?php foreach ($contact_menu as $menu_item) : ?>
                    <div class="d-flex align-items-center contact-info-menu__menu-item">
                        <i class="far fa-<?php esc_html_e($menu_item['icon_name']) ?>"></i>
                        <a href="#" class="header-href"><?php esc_html_e($menu_item['title']) ?></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>