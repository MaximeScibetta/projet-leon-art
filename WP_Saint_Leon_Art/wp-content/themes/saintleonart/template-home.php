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
            <div class="label">heures</div>
        </li>
        <li class="counter__minutes" id="minutes">
            <div class="number">00</div>
            <div class="label">minutes</div>
        </li>
    </ul>
    <div class="introduction__cta u-padding-horizontal-small u-margin-top-large">
        <?php if( have_rows('buttons') ): while ( have_rows('buttons') ) : the_row(); ?>
        <a title="Vers la page <?php the_sub_field('btn_name') ;?>" href="<?php the_sub_field('btn_link'); ?>" class="btn btn--anim" data-text="<?php the_sub_field('btn_name'); ?>"><?php the_sub_field('btn_name'); ?></a>
        <?php endwhile; endif; ?>
    </div>
    <a title="Vers la section suivante ci-dessous" href="#next" class="demo">
        <span></span>
        Scroll
    </a>
</section>
<section class="activitie">
    <h2 class="u-margin-top-large" id="next"><?= $fields['section_title']; ?></h2>
    <div class="activitie__flex flex">
        <?php if( have_rows('type_activitie') ): while ( have_rows('type_activitie') ) : the_row(); ?>
        
        <a title="Vers la page tous nos <?php the_sub_field('title_activitie') ;?>" class="clickable" href="<?php the_sub_field('link'); ?>">
            <div class="flex__item">
                <?php sla_image_attribute('illustration'); ?>
                <div class="container">
                    <h3 class="">
                        <span><?php the_sub_field('title_activitie'); ?></span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;">
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
    <a title="Vers la page notre programme" href="<?= get_permalink('29'); ?>" class="btn btn--anim u-margin-top" data-text="Voir le programme">Voir le programme</a>
</section>
<section class="artist">
    <h2 class="u-margin-bottom">Nos participants</h2>
    <div class="artist__container">
            <!-- Le premier a supprimé -->
        <?php get_template_part('part/artist') ;?>
    </div>
    <a title="Vers la page tous nos artistes" href="<?= get_permalink('236'); ?>" class="btn btn--anim u-margin-top" data-text="Voir tous nos artistes">Voir tous nos artistes</a>
</section>
<section class="event">
    <h2>Prochain événement</h2>
        <?php get_template_part('part/event') ;?>
    <a title="Vers la page tous nos événements" href="<?= get_permalink('233') ;?>" class="btn btn--anim u-margin-top" data-text="Voir tous nos événements">Voir tous nos événements</a>
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
    <a title="Charger plus d'images de nore instagram" href="" class="btn btn--anim" data-text="Charger plus d'images"id="load-more">Charger plus d'images</a>
    
</section>
<section class="twitter">
    <svg xmlns="http://www.w3.org/2000/svg" width="96.124" height="96.123" viewBox="0 0 96.124 96.123">
        <path style="fill: #3B5998;" d="M72.089.02L59.624 0C45.62 0 36.57 9.285 36.57 23.656v10.907H24.037a1.96 1.96 0 0 0-1.96 1.961v15.803a1.96 1.96 0 0 0 1.96 1.96H36.57v39.876a1.96 1.96 0 0 0 1.96 1.96h16.352a1.96 1.96 0 0 0 1.96-1.96V54.287h14.654a1.96 1.96 0 0 0 1.96-1.96l.006-15.803a1.963 1.963 0 0 0-1.961-1.961H56.842v-9.246c0-4.444 1.059-6.7 6.848-6.7l8.397-.003a1.96 1.96 0 0 0 1.959-1.96V1.98A1.96 1.96 0 0 0 72.089.02z"/>
    </svg>
    <h2 class="u-margin-top-tiny">
        <span>Nous suivre</span>
        Facebook feed
    </h2>
    <div style="display: block;" class="fb-page" data-href="https://www.facebook.com/Saint.Leon.Art/" data-tabs="timeline, events, messages" data-width="1200" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/Saint.Leon.Art/" class="fb-xfbml-parse-ignore">
            <a title="Vers la page page facebook Saint-Leonart" href="https://www.facebook.com/Saint.Leon.Art/">Saint Léon&#039;Art</a>
        </blockquote>
    </div>
</section>
<?php endwhile;endif; ?>
<?php get_footer(); ?>