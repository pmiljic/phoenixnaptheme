<?php
$logo = (carbon_get_theme_option('crb_menu_logo_photo'));
?>
<div class="logo-div">
    <a href="#" class="menu-logo"><img src=<?php echo esc_url($logo) ?>></a>
</div>

<div class="d-flex justify-content-end">
    <nav class="navbar navbar-expand-xl navbar-light menu__navbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (has_nav_menu('top-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navbar-nav mr-auto list'
                    )
                );
            }
            ?>
            <button class="menu__btn-search">
                <div class="menu__btn-search-div d-flex align-items-center justify-content-center">
                    <i class="fa fa-search"></i>
                </div>
            </button>

        </div>
    </nav>
</div>