<?php
$logo = carbon_get_theme_option('crb_menu_logo_photo');
?>
<div class="row menu__row flex-column justify-content-between">
    <div class="logo-div">
        <a href="#" class="menu-logo"><img src=<?php echo esc_url($logo) ?>></a>
    </div>

    <div class="d-flex menu__row__list">
        <nav class="navbar navbar-expand-xl navbar-light menu__navbar">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                if (has_nav_menu('top-menu')) :
                    $nav_menu_locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_items($nav_menu_locations['top-menu']);
                    foreach ($menu as $menu_item) :
                    // var_dump($menu_item);
                    // echo "<br>";
                    // var_dump($menu_item->ID);
                    // echo "<br>";
                    // echo "<br>";

                    endforeach; ?>
                    <ul class="d-inline-flex navbar-nav mr-auto list menu__row__list__ul">
                        <?php
                        $li_id_inner = array();
                        foreach ($menu as $menu_item) :
                            foreach ($menu as $menu_item_inner) :
                                if ($menu_item->ID === (int) $menu_item_inner->menu_item_parent) :
                                    array_push($li_id_inner, $menu_item->ID);
                                endif;
                            endforeach;
                        endforeach;
                        //var_dump($li_id_inner);
                        ?>


                        <?php foreach ($menu as $menu_item) : ?>
                            <?php if ($menu_item->menu_item_parent === "0") : ?>
                                <li class="nav-item dropdown list__item">
                                    <a class="dropdown-toggle menu__href" href=<?php echo esc_url($menu_item->url) ?> role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php esc_html_e(strtoupper($menu_item->title)) ?>
                                    </a>

                                    <?php if (in_array($menu_item->ID, $li_id_inner)) : ?>
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu list__item__menu" aria-labelledby="navbarDreopdown">
                                            <?php foreach ($menu as $menu_item_inner) : ?>
                                                <?php if ($menu_item->ID === (int) $menu_item_inner->menu_item_parent) : ?>
                                                    <!-- <?php var_dump($menu_item->ID);
                                                            var_dump($menu_item_inner->title);
                                                            var_dump($menu_item_inner->menu_item_parent);
                                                            echo "<br>";
                                                            ?> -->
                                                    <a class="dropdown-item" href=<?php echo esc_url($menu_item_inner->url) ?>> <?php esc_html_e(strtoupper($menu_item_inner->title)) ?></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>



                                <?php endif; ?>

                                </li>
                        <?php endforeach;
                    endif;
                    // wp_nav_menu(
                    //     array(
                    //         'theme_location' => 'top-menu',
                    //         'menu_class' => 'navbar-nav mr-auto list menu__navbar__list'
                    //     )
                    // );

                        ?>
                        <button class="menu__btn-search">
                            <div class="menu__btn-search-div d-flex align-items-center justify-content-center">
                                <i class="fa fa-search"></i>
                            </div>
                        </button>
                        <form id="form1">
                            <div class="d-inline-flex menu__search-div">
                                <input type="text" class="form-control" id="inputSearch" placeholder="<?php esc_attr_e('Search', 'phoenixnaptheme'); ?>">
                                <button type="button" class="btn btn-primary menu__btn-submit">
                                    <?php esc_html_e("Search") ?>
                                </button>
                            </div>
                        </form>

            </div>
        </nav>
    </div>
</div>
<script>
    $('.menu__btn-search').on('click', function(e) {
        $('#form1').toggle();
    });
</script>