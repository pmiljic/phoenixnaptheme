<?php

$args = array(
    'post_type'        => 'sections'
);
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        $feature_list = carbon_get_the_post_meta('crb_feature_list');
        $logos = carbon_get_the_post_meta('crb_company_logos'); ?>
        <section class="section section__two">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex flex-column left-column">
                        <h2 class="section__title"><?php the_title(); ?></h2>
                        <p class="section__text"><?php the_content() ?></p>
                        <ul class="section__list">
                            <?php if ($feature_list) : ?>
                                <?php foreach ($feature_list as $list_item) : ?>
                                    <li><span><?php esc_html_e($list_item["list_item"]) ?></span></li>
                            <?php endforeach;
                            endif; ?>
                        </ul>

                        <div class="section__btn">
                            <button type="button" class="btn btn-primary btn-lg">
                                <?php esc_html_e("Learn More") ?>
                            </button>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="section__seen">
                            <div class="image-div">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                            </div>
                            <?php if ($logos) : ?>
                                <div class="logos">
                                    <p class="logos__text"><?php esc_html_e("As seen:") ?></p>
                                    <div class="d-flex justify-content-between align-items-center logos__items">
                                        <?php foreach ($logos as $logo) : ?>
                                            <a href="<?php esc_html_e($logo["link"]) ?>" class="centralized">
                                                <img src="<?php echo esc_url($logo["company_logo"]) ?>" target="_blank">
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>