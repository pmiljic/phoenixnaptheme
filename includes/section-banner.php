<?php
$slides = carbon_get_theme_option('crb_slide');
$photo = carbon_get_theme_option('crb_banner_photo');
$indicator_index = 0;
$inner_indicator_index = 0;
?>
<section class="banner" style=" background-image: url(<?php echo esc_url($photo) ?>)">
    <div class="container">

        <div class=" row">
            <div class="col-md-12 col-lg-6 d-flex flex-column justify-content-start align-items-end">
                <div class="left-div">
                    <?php if (sizeof($slides) > 0) : ?>
                        <div id="slides" class="carousel slide img-fluid" data-ride="carousel">
                            <?php if (sizeof($slides) > 1) : ?>
                                <ul class="carousel-indicators">
                                    <?php foreach ($slides as $slide) : ?>
                                        <?php if ($indicator_index === 0) : ?>
                                            <li data-target="#slides" data-slide-to="<?php esc_attr_e($indicator_index) ?>" class="active"></li>
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
                                        <div class="carousel-item active">
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
                                    <?php else : ?>
                                        <div class="carousel-item">
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
                                    <?php endif; ?>
                                    <?php $inner_indicator_index++ ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-end banner__row">
            <div class="col-md-12 col-lg-6 d-flex flex-column">
                <div class="d-flex">
                    <h4>Agility</h4>
                    <h4 class="h4-middle">Flexibility</h4>
                    <h4>Scalability</h4>
                </div>
                <h2>phoenixNap has you covered.</h2>
                <div class="video">
                    <a href="#"><strong>Play video</strong> (3min)</a>
                    <a href="#"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>