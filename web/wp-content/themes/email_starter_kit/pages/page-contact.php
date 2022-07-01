<?php
/*
Template Name: Contact
*/

get_header();
get_template_part('template-parts/general/block', 'header_nav');
$result = formulaire_contact();
$pageId = get_the_ID();
$title = get_field('contact-fields-title', $pageId);
$introduction = get_field('contact-fields-introduction', $pageId);
$formTitle = get_field('contact-fields-form-title', $pageId);
$optin = get_field('contact-fields-optin', $pageId);
$submit = get_field('constact-fields-submit', $pageId);
$political_confidentiality = get_field('constact-fields-political_confidentiality', $pageId);
$msg_validation = get_field('contact-fields-msg-validation', $pageId);

?>

<main id="main" role="main" tabindex="-1" class="page-contact" data-module="modules/custom_select">
    <?php get_template_part('template-parts/general/block', 'breadcrumb'); ?>

    <?php if (!empty($result) && empty($result['error'])) : ?>
        <div class="merci-title">
            <?php
                $args = [
                    'title' =>  strip_tags($msg_validation['contact-fields-msg-validation-title'], '<strong>'),
                ];
            ?>
            <?php get_template_part('template-parts/heros/hero', 'contact', $args); ?>
        </div>

        <img class="img-hero" src="/wp-content/themes/valorplast/assets/img/contact/hero-contact.svg" />

        <section class="merci-content">
            <div class="merci-text">
                <?= $msg_validation['contact-fields-msg-validation-text'] ?>
            </div>
            <div class="merci-cta">
                <a href="<?= $msg_validation['contact-fields-msg-validation-cta']['url'] ?>" class="btn-1">
                    <div class="picto-btn-1 picto-save"><?= icon("arrow-down", 19, 19); ?></div>
                    <?= $msg_validation['contact-fields-msg-validation-cta']['title'] ?>
                </a>
            </div>
        </section>
    <?php else : ?>
        <?php
            $args = [
                'title' =>  strip_tags($title, '<strong>'),
            ];
        ?>
        <?php get_template_part('template-parts/heros/hero', 'contact', $args); ?>

        <img class="img-hero" src="/wp-content/themes/valorplast/assets/img/contact/hero-contact.svg" />

        <section>
            <div class="rte">
                <?= $introduction ?>
            </div>
        </section>

        <section>
            <h2 class="title-2"><?= $formTitle ?></h2>

            <?php if (!empty($result['error'])) : ?>
                <div class="error-msg-php"><?= $result['msg'] ?></div>
            <?php endif; ?>

            <form action="/contact" method="post" enctype='multipart/form-data' novalidate data-module="pages/contact" data-mandatory="Vous devez remplir ce champs">
                <?php wp_nonce_field('contact', 'contact_nonce'); ?>
                <fieldset>
                    <h3 class="title-4">Informations générales</h3>
                    <div class="group-fields">
                        <div class="field">
                            <label for="">Vous êtes*</label>
                            <div class="custom-select">
                                <select name="contact-infos" required aria-describedby="error-infos" data-mandatory="Vous devez sélectionner un item">
                                    <option value="" hidden>Sélectionnez...</option>
                                    <option value="1">Une collectivité territoriale</option>
                                    <option value="2">Un centre de tri</option>
                                    <option value="3">Une entreprise</option>
                                    <option value="3">Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h3 class="title-4">Vos informations personnelles</h3>
                    <div class="group-fields">
                        <div class="field" role="group">
                            <label for="">Civilité*</label>
                            <div class="radio">
                                <input id="contact-gender-1" type="radio" name="contact-gender" value="Madame" required aria-describedby="error-gender">
                                <label for="contact-gender-1">Madame</label>
                                <input id="contact-gender-2" type="radio" name="contact-gender" value="Monsieur" required aria-describedby="error-gender">
                                <label for="contact-gender-2">Monsieur</label>
                                <input id="contact-gender-3" type="radio" name="contact-gender" value="Autre" required aria-describedby="error-gender">
                                <label for="contact-gender-3">Autre</label>
                            </div>
                        </div>
                        <div class="field"></div>
                        <div class="field">
                            <label for="contact-firstname">Prénom*</label>
                            <input id="contact-firstname" type="text" name="contact-firstname" required aria-describedby="error-firstname">
                        </div>
                        <div class="field">
                            <label for="contact-lastname">Nom*</label>
                            <input id="contact-lastname" type="text" name="contact-lastname" required aria-describedby="error-lastname">
                        </div>
                        <div class="field">
                            <label for="contact-phone">Téléphone*</label>
                            <input id="contact-phone" type="text" name="contact-phone" required aria-describedby="error-phone">
                        </div>
                        <div class="field">
                            <label for="contact-email">Email*</label>
                            <input id="contact-email" type="email" name="contact-email" required placeholder="Email..." aria-describedby="error-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-patternmismatch="Email non valide">
                        </div>
                        <div class="field">
                            <label for="contact-address">Adresse*</label>
                            <input id="contact-address" type="text" name="contact-address" required aria-describedby="error-address">
                        </div>
                        <div class="field">
                            <label for="contact-postcode">Code postal*</label>
                            <input id="contact-postcode" type="text" name="contact-postcode" required aria-describedby="error-postcode">
                        </div>
                        <div class="field">
                            <label for="contact-town">Ville*</label>
                            <input id="contact-town" type="text" name="contact-town" required aria-describedby="error-city">
                        </div>
                        <div class="field">
                            <label for="contact-country">Pays*</label>
                            <input id="contact-country" type="text" name="contact-country" required aria-describedby="error-country">
                        </div>
                    </div>

                    <h3 class="title-4">Votre message</h3>
                    <div class="group-fields full">
                        <div class="field">
                            <label for="contact-msg">Votre message*</label>
                            <textarea name="contact-msg" id="contact-msg" required aria-describedby="error-msg"></textarea>
                        </div>
                    </div>
                    <div class="group-fields full" role="group">
                        <div class="field field-row">
                            <input type="checkbox" name="contact-consent" id="contact-consent" required aria-describedby="error-optin">
                            <label for="contact-consent" class="label-checkbox rte"><?= $optin ?></label>
                        </div>
                    </div>

                    <div class="group-fields full">
                        <div class="field field-row">
                            <input type="checkbox" name="contact-newsletter" id="contact-newsletter">
                            <label for="contact-newsletter" class="label-checkbox rte">
                                <p>J’accepte de recevoir par e-mail des informations en provenance de Valorplast, via sa newsletter</p>
                            </label>
                        </div>
                    </div>

                    <br/><br/><br/>

                    <button type="submit" class="btn-1">
                        <div class="picto-btn-1 picto-save"><?= icon("arrow-down", 19, 19); ?></div>
                        <?= $submit ?>
                    </button>
                </fieldset>
            </form>

            <div class="rte">
                <?= $political_confidentiality ?>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
get_footer();
