<?php
$slides                = carbon_get_theme_option('crb_slide');
$photo                 = carbon_get_theme_option('crb_banner_photo');
$indicator_index       = 0;
$inner_indicator_index = 0;
$carousel_item_active  = '';
?>
<section class="banner" style=" background-color: orange">
    <div class="banner__wrapper">

        <?php if (sizeof($slides) > 0) : ?>
            <div id="slides" class="carousel slide img-fluid" data-ride="carousel">

                <?php if (sizeof($slides) > 1) : ?>
                    <ul class="carousel-indicators">
                        <?php foreach ($slides as $slide) : ?>
                            <?php if ($indicator_index === 0) : ?>
                                <li data-target="#slides" data-slide-to=<?php esc_attr_e($indicator_index) ?> class="active"></li>
                            <?php else : ?>
                                <li data-target="#slides" data-slide-to=<?php esc_attr_e($indicator_index) ?>></li>
                            <?php endif; ?>
                            <?php $indicator_index++ ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>


                <div class="carousel-inner">
                    <?php foreach ($slides as $slide) : ?>
                        <?php if ($inner_indicator_index === 0) : ?>
                            <?php $carousel_item_active = 'active'; ?>
                        <?php else : ?>
                            <?php $carousel_item_active = ''; ?>
                        <?php endif; ?>
                        <div class="carousel-item <?php echo $carousel_item_active ?>" style="background-image: url(<?php echo esc_url($slide['photo']) ?>)">
                            <div class="container">
                                <div class="col-md-12 col-lg-6 banner__left-div">
                                    <div class="banner__title">
                                        <h1><?php esc_html_e($slide['title']) ?></h1>
                                        <span class="p-one"><?php esc_html_e($slide['pre_title']) ?></span>
                                    </div>
                                    <p class="text"><?php esc_html_e($slide['caption']) ?></p>
                                    <div class="section__btn">
                                        <button type="button" class="btn btn-primary btn-lg">
                                            <?php esc_html_e($slide['btn_text']) ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $inner_indicator_index++ ?>
                    <?php endforeach; ?>
                </div>

                <div class="container banner-static-container">
                    <div class="banner-static-content col-md-12 col-lg-6 d-flex flex-column justify-content-end">
                        <div class="d-flex">
                            <h4><?php esc_html_e('Agility', 'phoenixnaptheme') ?></h4>
                            <h4 class="h4-middle"><?php esc_html_e('Flexibility', 'phoenixnaptheme') ?></h4>
                            <h4><?php esc_html_e('Scalability', 'phoenixnaptheme') ?></h4>
                        </div>
                        <h2><?php esc_html_e('phoenixNap has you covered.', 'phoenixnaptheme') ?></h2>
                        <div class="video">
                            <a href="#"><strong><?php esc_html_e('Play video', 'phoenixnaptheme') ?></strong><?php esc_html_e('(3min)', 'phoenixnaptheme') ?>
                            </a>
                            <a href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>
    </div>
</section>