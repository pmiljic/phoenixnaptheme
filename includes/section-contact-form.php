<?php
$form_title = carbon_get_theme_option('crb_contact_form_title');
$form_description = carbon_get_theme_option('crb_contact_form_description');
$form_max_chars = carbon_get_theme_option('crb_contact_form_max_chars');
?>
<section class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-8 d-flex flex-column contact__text">
                <h2><?php esc_html_e($form_title); ?></h2>
                <?php if ($form_description) : foreach ($form_description as $description) : ?>
                        <p><?php esc_html_e($description["paragraph"]); ?></p>
                <?php endforeach;
                endif; ?>
            </div>
        </div>

        <form class="contact-form">

            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputFirstName"><?php esc_html_e('First Name', 'phoenixnaptheme'); ?><i class="fas fa-star label-i"></i></label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="<?php esc_attr_e('Your first name...', 'phoenixnaptheme'); ?>">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputLastName"><?php esc_html_e('Last Name', 'phoenixnaptheme'); ?><i class="fas fa-star label-i"></i></label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="<?php esc_attr_e('Your last name...', 'phoenixnaptheme'); ?>">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputEmail"><?php esc_html_e('Email', 'phoenixnaptheme'); ?><i class="fas fa-star label-i"></i></label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="<?php esc_attr_e('Valid email address...', 'phoenixnaptheme'); ?>">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputCompany"><?php esc_html_e('Company', 'phoenixnaptheme'); ?><i class="fas fa-star label-i"></i></label>
                    <input type="text" class="form-control" id="inputCompany" placeholder="<?php esc_attr_e('Company...', 'phoenixnaptheme'); ?>">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputCity"><?php esc_html_e('City', 'phoenixnaptheme'); ?></label>
                    <input type="text" class="form-control" id="inputCity" placeholder="<?php esc_attr_e('City...', 'phoenixnaptheme'); ?>">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <span class="contact-form__div-padding__caret">
                        <i class="fa fa-angle-down fa-xs"></i>
                    </span>
                    <label class="contact-label" for="inputState"><?php esc_html_e('State/Region', 'phoenixnaptheme'); ?></label>
                    <select id="inputState" class="form-control form-control-select">
                        <option selected><?php esc_html_e('Select your state/region...', 'phoenixnaptheme'); ?></option>
                    </select>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputCountry"><?php esc_html_e('Country', 'phoenixnaptheme'); ?></label>
                    <input type="text" class="form-control" id="inputCountry" placeholder="<?php esc_attr_e('Select Country...', 'phoenixnaptheme'); ?>">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-xl-4 contact-form__div-padding">
                    <label class="contact-label" for="inputPhone"><?php esc_html_e('Phone', 'phoenixnaptheme'); ?></label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="<?php esc_attr_e('Phone number...', 'phoenixnaptheme'); ?>">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-lg-12 col-xl-8 contact-form__div-padding">
                    <label class="contact-label" for="inputTellUsMore"><?php esc_html_e('Tell us more', 'phoenixnaptheme'); ?></label>
                    <span class="maximum-comment"><strong class="char-count"><?php echo $form_max_chars ?></strong> <?php esc_html_e('chars allowed', 'phoenixnaptheme'); ?></span>
                    <textarea maxlength=<?php echo $form_max_chars ?> rows="4" type="text" class="form-control form-control-more char-textarea" id="inputTellUsMore" placeholder="<?php esc_attr_e('Tell us more...', 'phoenixnaptheme'); ?>"></textarea>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-lg-12 col-xl-8 contact-form__div-padding section__btn">
                    <button type="submit" class="btn btn-primary"><?php esc_html_e('Get Started', 'phoenixnaptheme'); ?>
                    </button>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-lg-12 col-xl-8 contact-form__div-padding contact__required">
                    <div class="contact__info d-flex">
                        <i class="fas fa-star required-star contact-i"></i>
                        <div class="div"><?php esc_html_e('Required fields', 'phoenixnaptheme'); ?></div>
                    </div>
                    <div class="contact__info">
                        <?php esc_html_e('Your data is treated in compilance with ', 'phoenixnaptheme'); ?> <a href="#"><?php esc_html_e('GDPR', 'phoenixnaptheme'); ?>
                        </a><?php esc_html_e('. Powered by ', 'phoenixnaptheme'); ?><i class="fas fa-project-diagram"></i>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>