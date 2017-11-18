<?php
/*
Template Name: Page Accueil
*/
get_header();
?>
<?php 
    $home = new WP_Query();
    $home->query([
        'post_type' => 'page',
        'meta_query' => [ 
                [
                    'key'   => '_wp_page_template', 
                    'value' => 'template-home.php'
                ]
            ],
        ]);
;?>
<?php if ( $home->have_posts() ): while( $home->have_posts() ): $home->the_post();?>
<?php $fields = get_fields();?>
<section class="introduction home" style="background-image: url(<?= dw_asset('images/home.jpg');?>);">
    <div class="introduction__container">
            <h2 class="sla">SaintLeon'Art</h2>
            <p class="introduction__tagline u-padding-horizontal-small u-10/18@tablet">
                <?= $fields['tagline']; ?>
            </p>
    </div>
    <ul class="introduction__counter counter u-padding-horizontal-small u-margin-top-large" id="countdown">
        <li class="counter__days" id="days">
            <div class="number">00</div>
            <div class="label">jours</div>
        </li>
        <li class="counter__hours" id="hours">
            <div class="number">00</div>
            <div class="label">heures<div>
        </li>
        <li class="counter__minutes" id="minutes">
            <div class="number">00</div>
            <div class="label">minutes</div>
        </li>
    </ul>
    <div class="introduction__cta u-padding-horizontal-small u-margin-top-large">
        <?php if( have_rows('buttons') ): while ( have_rows('buttons') ) : the_row(); ?>
        <a href="<?php the_sub_field('btn_link'); ?>" class="btn btn--anim" data-text="<?php the_sub_field('btn_name'); ?>"><?php the_sub_field('btn_name'); ?></a>
        <?php endwhile; endif; ?>
    </div>
</section>
<section class="activitie">
    <h2 class="u-margin-top-large"><?= $fields['section_title']; ?></h2>
    <div class="activitie__flex flex">
        <?php if( have_rows('type_activitie') ): while ( have_rows('type_activitie') ) : the_row(); ?>
        
        <a class="clickable" href="http://saintleonart.app/?page_id=49">
            <div class="flex__item">
                <?php sla_image_attribute('illustration'); ?>
                <div class="container">
                    <h3 class="">
                        <span><?php the_sub_field('title_activitie'); ?></span>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;">
                            <g>
                                <g id="Right">
                                    <g>
                                        <path d="M277.58,179.679l-0.057,0.077c-5.125-4.705-11.857-7.631-19.335-7.631c-15.835,0-28.688,12.852-28.688,28.688
                                            c0,8.377,3.634,15.835,9.352,21.076l-0.057,0.077L330.48,306l-91.686,84.055l0.057,0.076c-5.718,5.221-9.352,12.68-9.352,21.057
                                            c0,15.836,12.852,28.688,28.688,28.688c7.478,0,14.21-2.926,19.335-7.611l0.057,0.076l114.75-105.188
                                            c5.91-5.451,9.295-13.101,9.295-21.152s-3.385-15.702-9.295-21.152L277.58,179.679z M306,0C137.012,0,0,137.012,0,306
                                            s137.012,306,306,306s306-137.012,306-306S474.988,0,306,0z M306,554.625C168.912,554.625,57.375,443.088,57.375,306
                                            S168.912,57.375,306,57.375S554.625,168.912,554.625,306S443.088,554.625,306,554.625z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </h3>
                    <p class=""><?php the_sub_field('info_activitie'); ?></p> 
                </div>
            </div>
        </a>
        <?php endwhile; endif; ?>
    </div>
    <a href="http://saintleonart.app/?page_id=29" class="btn btn--anim u-margin-top" data-text="Voir le programme">Voir le programme</a>
</section>
<section class="artist">
    <h2 class="u-margin-bottom">Nos participants</h2>
    <div class="artist__container">
            <!-- Le premier a supprimé -->
        <?php get_template_part('part/artist') ;?>
        <?php get_template_part('part/artist') ;?>

    </div>
    <a href="http://saintleonart.app/?page_id=49" class="btn btn--anim u-margin-top" data-text="Voir tous nos artistes">Voir tous nos artistes</a>
</section>
<section class="event">
    <h2>Prochain événement</h2>
            <!-- Le premier a supprimé -->
    <?php get_template_part('part/event') ;?>
    <?php get_template_part('part/event') ;?>
    <a href="" class="btn btn--anim u-margin-top" data-text="Voir tous nos événements">Voir tous nos événements</a>
</section>
<section class="instagram">
    <svg class="" version="1.1" id="instagram_color" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 551.034 551.034;">
        <g id="XMLID_13_">
                <linearGradient id="XMLID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.5714" x2="275.517" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)">
                <stop  offset="0" style="stop-color:#E09B3D"/>
                <stop  offset="0.3" style="stop-color:#C74C4D"/>
                <stop  offset="0.6" style="stop-color:#C21975"/>
                <stop  offset="1" style="stop-color:#7024C4"/>
            </linearGradient>
            <path id="XMLID_17_" style="fill:url(#XMLID_2_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722
                c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156
                C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156
                c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722
                c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>
            
                <linearGradient id="XMLID_3_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.5714" x2="275.517" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)">
                <stop  offset="0" style="stop-color:#E09B3D"/>
                <stop  offset="0.3" style="stop-color:#C74C4D"/>
                <stop  offset="0.6" style="stop-color:#C21975"/>
                <stop  offset="1" style="stop-color:#7024C4"/>
            </linearGradient>
            <path id="XMLID_81_" style="fill:url(#XMLID_3_);" d="M275.517,133C196.933,133,133,196.933,133,275.516
                s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6
                c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083
                C362.6,323.611,323.611,362.6,275.517,362.6z"/>
            
                <linearGradient id="XMLID_4_" gradientUnits="userSpaceOnUse" x1="418.306" y1="4.5714" x2="418.306" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)">
                <stop  offset="0" style="stop-color:#E09B3D"/>
                <stop  offset="0.3" style="stop-color:#C74C4D"/>
                <stop  offset="0.6" style="stop-color:#C21975"/>
                <stop  offset="1" style="stop-color:#7024C4"/>
            </linearGradient>
            <circle id="XMLID_83_" style="fill:url(#XMLID_4_);" cx="418.306" cy="134.072" r="34.149"/>
        </g>
    </svg>
    <h2 class="u-margin-top-tiny">
        <span>Nous suivre</span>
        Instagram feed
    </h2>
    <div id="instafeed" class="instagram__gallery u-margin-top">
    </div>
    <a href="" class="btn btn--anim" data-text="Charger plus d'images"id="load-more">Charger plus d'images</a>
    
</section>
<section class="twitter">
    <svg class="" version="1.1" id="twitter_color" fill="purple" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;">
        <g>
            <g>
                <path style="fill:#00ACED;" d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
                    c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
                    c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
                    c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
                    c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
                    c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
                    c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
            </g>
        </g>
    </svg>
    <h2 class="u-margin-top-tiny">
        <span>Nous suivre</span>
        Twitter feed
    </h2>
    <div class="twitter__item">
        <svg class="u-margin-horizontal-small" version="1.1" id="arrowLeft" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44.238 44.238" style="enable-background:new 0 0 44.238 44.238;">
            <g>
                <g>
                    <path d="M22.119,44.237C9.922,44.237,0,34.315,0,22.119S9.922,0.001,22.119,0.001s22.119,9.922,22.119,22.118
                        S34.314,44.237,22.119,44.237z M22.119,1.501C10.75,1.501,1.5,10.75,1.5,22.119c0,11.368,9.25,20.618,20.619,20.618
                        s20.619-9.25,20.619-20.618C42.738,10.75,33.488,1.501,22.119,1.501z"/>
                    <path d="M24.667,29.884c-0.192,0-0.384-0.072-0.53-0.22l-7.328-7.334c-0.292-0.293-0.292-0.768,0-1.061l7.328-7.333
                        c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061L18.4,21.8l6.798,6.805c0.292,0.293,0.292,0.769,0,1.061
                        C25.051,29.812,24.859,29.884,24.667,29.884z"/>
                </g>
            </g>
        </svg>
        <p class="u-margin-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p class="u-margin-top-small">@MaximeScibetta - 23 Juillet 2017</p>
        <svg class="u-margin-horizontal-small" version="1.1" id="arrowRight" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44.236 44.236" style="enable-background:new 0 0 44.236 44.236;">
            <g>
                <g>
                    <path d="M22.118,44.236C9.922,44.236,0,34.314,0,22.118S9.922,0,22.118,0s22.118,9.922,22.118,22.118S34.314,44.236,22.118,44.236
                        z M22.118,1.5C10.75,1.5,1.5,10.749,1.5,22.118c0,11.368,9.25,20.618,20.618,20.618c11.37,0,20.618-9.25,20.618-20.618
                        C42.736,10.749,33.488,1.5,22.118,1.5z"/>
                    <path d="M19.341,29.884c-0.192,0-0.384-0.073-0.53-0.22c-0.293-0.292-0.293-0.768,0-1.061l6.796-6.804l-6.796-6.803
                        c-0.292-0.293-0.292-0.769,0-1.061c0.293-0.293,0.768-0.293,1.061,0l7.325,7.333c0.293,0.293,0.293,0.768,0,1.061l-7.325,7.333
                        C19.725,29.811,19.533,29.884,19.341,29.884z"/>
                </g>
            </g>
        </svg>
    </div>
</section>
<?php endwhile;endif; ?>
<?php get_footer(); ?>