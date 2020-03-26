<?php
$background_color = (carbon_get_theme_option('crb_contact_info_color') !== '' ? carbon_get_theme_option('crb_contact_info_color') : '#016ba7');
$contact_menu = carbon_get_theme_option('crb_contact_menu');
?>
<section class="contact-info-menu" style="background-color:<?php echo esc_attr($background_color) ?>">
    <div class="container">
        <div class="row">
            <div class="col contact-info-menu__menu-items">
                <?php if (sizeof($contact_menu) > 0) : ?>
                    <?php foreach ($contact_menu as $menu_item) : ?>
                        <div class="contact-info-menu__menu-item">
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
            </div>
        </div>
    </div>
</section>