<?php
/*
Template Name: Page pratique    
*/
get_header();
?>
<section class="introduction" style="background-image: url(<?= dw_asset('images/home.jpg');?>);">
    <h2 id="branding" class="branding">Venir à <span>SaintLeon'Art</span></h2>
    <p>
        Venir à Saint léonard est possible de toute la Belgique via tout type de transport. Vous pourrez y venir en voiture et la déposer dans un parking proche ou alors en transport en commun à l'aide de nos nombreux arrêts de bus à proximité grâce à la TEC ou encore en train via la SNCB si vous venez de plus loin. Vous pourrez chercher votre moyen de transport préféré via notre carte interactive.
    </p>
</section>
<section class="map" id="mapinteractiv">
    <h2>Map interactive</h2>
    <iframe src="https://www.google.fr/maps/d/embed?mid=1nmuuAJ-lLItmVbx4dM3wAajKFHk" height="480"></iframe>
</section>
<?php get_footer(); ?>