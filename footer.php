<?php
$logo = carbon_get_theme_option('crb_footer_logo_photo');
$copyrigths = carbon_get_theme_option('crb_copyrights');
$google_plus = carbon_get_theme_option('crb_google_plus');
$facebook = carbon_get_theme_option('crb_facebook');
$dribble = carbon_get_theme_option('crb_dribble');
$twitter = carbon_get_theme_option('crb_twitter');
$instagram = carbon_get_theme_option('crb_instagram');
?>
<footer class="footer-bottom">
    <div class="container">

        <div class="row justify-content-between align-items-center footer-bottom__row">
            <div class="col-12 col-md-6 footer-bottom__col">
                <a href="#"><img src=<?php echo esc_url($logo) ?>></a>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center footer-bottom__social">
                <?php if ($google_plus) : ?>
                    <div class="social-logo d-flex align-items-center justify-content-center">
                        <a href="<?php echo $google_plus ?>"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                <?php endif; ?>
                <?php if ($facebook) : ?>
                    <div class="social-logo d-flex align-items-center justify-content-center">
                        <a href="<?php echo $facebook ?>"><i class="fab fa-facebook-square"></i></a>
                    </div>
                <?php endif; ?>
                <?php if ($dribble) : ?>
                    <div class="social-logo d-flex align-items-center justify-content-center">
                        <a href="<?php echo $dribble ?>"><i class="fas fa-basketball-ball"></i></a>
                    </div>
                <?php endif; ?>
                <?php if ($twitter) : ?>
                    <div class="social-logo d-flex align-items-center justify-content-center">
                        <a href="<?php echo $twitter ?>"><i class="fab fa-twitter"></i></a>
                    </div>
                <?php endif; ?>
                <?php if ($instagram) : ?>
                    <div class="social-logo social-logo-last-element d-flex align-items-center justify-content-center">
                        <a href="<?php echo $instagram ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 footer-bottom__col">
                <?php
                if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'footer-bottom__menu'
                        )
                    );
                }
                ?>
            </div>

            <div class="col-12 col-lg-6">
                <p><?php echo esc_html($copyrigths) ?></p>
            </div>

        </div>
    </div>
</footer>
</body>

</html>
<?php wp_footer(); ?>