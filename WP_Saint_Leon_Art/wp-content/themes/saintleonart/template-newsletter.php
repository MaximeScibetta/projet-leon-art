<?php
/*
Template Name: Page Newsletter    
 */
get_header();
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/contact.jpg'); ?>);">
    <h2 id="branding">newsletter <span>SaintLeon'Art</span></h2>
</section>
<section class="newsletterValidation">
    <div class="success-message">
        <svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
            <circle cx="38" cy="38" r="36"/>
            <path fill="none" stroke="#821c49" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>
        </svg>
        <h1 class="success-message__title">Inscription à la newsletter validée</h1>
        <div class="success-message__content">
            <p>Vous allez recevoir un email de confirmation d'ici 15 minutes.</p>
            <p>Merci de votre confiance & à bientôt !</p>
        </div>
        <a title="Vers la page toutes nos actualités" href="<?= get_permalink('282'); ?>" class="btn btn--anim" data-text="Voir nos actualités">Voir nos actualités</a>
    </div>
</section>
<?php get_footer(); ?>