<?php
/*
Template Name: Page programme    
*/
get_header();
?>
<?php 
    $programs = new WP_Query();
    $programs->query([
        'post_type' => 'page',
        'meta_query' => [ 
                [
                    'key'   => '_wp_page_template', 
                    'value' => 'template-program.php'
                ]
            ],
        ]);
;?>
<?php if ( $programs->have_posts() ): while( $programs->have_posts() ): $programs->the_post();?>
<?php $fields = get_fields(); ?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/program.jpg');?>);">
    <h2 id="branding" class="branding">Programme <span>SaintLeon'Art</span></h2>
</section>
<div class="information">
    <address>
        <svg version="1.1" class="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
            <g>
                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
            </g>
        </svg>
        <span><?= $fields['address'] ;?></span>
    </address>
    <p class="time">
        <span><?= $fields['date']; ?></span>
        <svg version="1.1" class="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
            <g>
                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
            </g>
        </svg>
    </p>
</div>
<section class="program">
    <div class="program__navigation">
        <div class="day"> 
            <?php if( have_rows('days') ): $i=1; $first = true; while( have_rows('days') ): the_row(); ?>
                <a href="#day<?php if($i): echo $i; endif; $i++;?>"><?php the_sub_field('date'); ?> <?= $key ;?> </a>
            <?php endwhile; endif; ?>
            <a  class="<?php if ($first) : echo 'active'; endif; ?>" href="#all">Tous le programme</a>
        </div>
        <a href="#mapinteractiv" class="interactiv">Map interactive</a>

    </div>
    <?php if( have_rows('days') ): $d=1;  while ( have_rows('days') ) : the_row(); ?>
        <div class="timeline<?php if($d): echo ' day'.$d; endif;?>" id="<?php if($d): echo 'day'.$d; endif; $d++;?>">
        <h3>Ancre section</h3>
        <?php if( have_rows('events') ): $i=0; while ( have_rows('events') ) : the_row(); ?>
            <a href="<?php  the_sub_field('event_link'); ?>">
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content<?php if($i%2 == 1): echo ' right'; endif; $i++;?>">
                        <h2><?php  the_sub_field('event_name'); ?></h2>
                        <span>
                            <svg version="1.1" class="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-2 -2 65 65" style="enable-background:new 0 0 60 60;">
                                    <path stroke="#000" stroke-width="3" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                        S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                    <path stroke="#000" stroke-width="1" d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </svg>
                            <?php  the_sub_field('event_hour'); ?>
                        </span>
                        <address>
                            <svg version="1.1" class="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                                <g>
                                    <path stroke="#000" stroke-width="3"  d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                        s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                    <path stroke="#000" stroke-width="3"  d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                        L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                        C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                        C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                                </g>
                            </svg>
                            <?php  the_sub_field('event_address'); ?>
                        </address>
                        <p>
                            <?php  the_sub_field('event_description'); ?>
                        </p>
                    </div>
                </div>
            </a>
        <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>
    <div class="timeline all here" id="all">
        <h3>Ancre section</h3>
        <?php if (have_rows('days')) :while (have_rows('days')) : the_row(); ?>
            <?php if (have_rows('events')) : $i = 0; while (have_rows('events')) : the_row(); ?>
                <a href="<?php the_sub_field('event_link'); ?>">
                    <div class="timeline-item">
                        <div class="timeline-icon"></div>
                        <div class="timeline-content<?php if ($i % 2 == 1) : echo ' right'; endif; $i++; ?>">
                            <h2><?php the_sub_field('event_name'); ?></h2>
                            <span>
                                <svg version="1.1" class="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-2 -2 65 65" style="enable-background:new 0 0 60 60;">
                                        <path stroke="#000" stroke-width="3" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                            S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                        <path stroke="#000" stroke-width="1" d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                                </svg>
                                <?php the_sub_field('event_hour'); ?>
                            </span>
                            <address>
                                <svg version="1.1" class="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                                    <g>
                                        <path stroke="#000" stroke-width="3"  d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                            s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                        <path stroke="#000" stroke-width="3"  d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                            L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                            C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                            C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                                    </g>
                                </svg>
                                <?php the_sub_field('event_address'); ?>
                            </address>
                            <p>
                                <?php the_sub_field('event_description'); ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
    </div>
</section> 
<section class="map" id="mapinteractiv">
    <h2>Map interactive</h2>
    <div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1B2Fa7MMRLEa1NCRbI7VADypd4FzlDOVM" title="Map interactive de l'événement saitn-leonart" style="overflow:hidden; height: 480px;"></iframe>
</section>
<?php endwhile;endif; ?>
<?php get_footer(); ?>