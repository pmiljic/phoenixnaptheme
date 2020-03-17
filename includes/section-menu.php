<?php
$logo = (carbon_get_theme_option('crb_menu_logo_photo'));
?>
<div class="logo-div">
    <a href="#" class="menu-logo"><img src=<?php echo esc_url($logo) ?>></a>
</div>

<div class="d-flex justify-content-end">
    <nav class="navbar navbar-expand-xl navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto list">

                <li class="nav-item dropdown list__item">
                    <a class="dropdown-toggle menu__href" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COLOCATION
                    </a>
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDreopdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <button class="menu__btn-search">
                <div class="menu__btn-search-div d-flex align-items-center justify-content-center">
                    <i class="fa fa-search"></i>
                </div>
            </button>

        </div>
    </nav>
</div>