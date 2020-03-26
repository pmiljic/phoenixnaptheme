<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar1')) : ?>
                    <?php dynamic_sidebar('footer-sidebar1'); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar2')) : ?>
                    <?php dynamic_sidebar('footer-sidebar2'); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar3')) : ?>
                    <?php dynamic_sidebar('footer-sidebar3'); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar4')) : ?>
                    <?php dynamic_sidebar('footer-sidebar4'); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar5')) : ?>
                    <?php dynamic_sidebar('footer-sidebar5'); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2 footer-main__column">
                <?php if (is_active_sidebar('footer-sidebar6')) : ?>
                    <?php dynamic_sidebar('footer-sidebar6'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>