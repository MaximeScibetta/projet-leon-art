<?php
/*
Template Name: Page pratique    
*/
get_header();
?>
<section class="introduction all" style="background-image: url(<?= dw_asset('images/home.jpg');?>);">
    <h2 id="branding" class="branding">Venir à <span>SaintLeon'Art</span></h2>
</section>
<section class="map" id="mapinteractiv">
    <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;">
        <style type="text/css">
            .st0{fill:#D94636;}
            .st1{fill:#FFCC79;}
            .st2{fill:#7F174A;}
        </style>
        <g>
            <path class="st0" d="M178.2,99.8c0,42.8-34.7,77.4-77.4,77.4c-42.8,0-77.4-34.7-77.4-77.4c0-42.8,34.7-77.4,77.4-77.4
                C143.5,22.4,178.2,57,178.2,99.8"/>
        </g>
        <rect x="60.3" y="10.8" class="st1" width="80.9" height="177.9"/>
        <polygon class="st2" points="187.9,106.3 13.6,2.9 13.6,92.8 13.6,93.2 187.9,196.7 187.9,106.7 "/>
    </svg>
    <p>
        Venir à Saint léonard est possible de toute la Belgique via tout type de transport. Vous pourrez y venir en voiture et la déposer dans un parking proche ou alors en transport en commun à l'aide de nos nombreux arrêts de bus à proximité grâce à la TEC ou encore en train via la SNCB si vous venez de plus loin. Vous pourrez chercher votre moyen de transport préféré via notre carte interactive.
    </p>
    <h2>Map interactive</h2>
    <iframe src="https://www.google.fr/maps/d/embed?mid=1nmuuAJ-lLItmVbx4dM3wAajKFHk" height="480"></iframe>
</section>
<?php get_footer(); ?>