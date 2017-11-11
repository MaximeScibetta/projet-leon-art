<?php
/*
Template Name: Page all    
*/
get_header();
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/all-expo.jpg');?>);">
    <h2 class="branding" id="branding">Actualités <span>SaintLeon'Art</span></h2>
</section>
<section class="event all">
    <h2>Tous nos événements</h2>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <a href="">
        <div class="event__item">
            <div class="head">
                <p class="date"><span>23 sept.</span></p>
                <img src="<?= dw_asset('images/next event.jpg');?>" alt="" class="">
            </div>
            <div class="content">
                <p class="title u-margin-top-small">Macadam Party et Lancement de l'appel à candidature</p>
                <p class="hour u-margin-top-small">
                    <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                        <g>
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                            <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </g>
                    </svg>
                    12:00 à 20:00
                </p>
                <address class="u-margin-top-tiny">
                    <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                        <g>
                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                        </g>
                    </svg>
                    Place Vieille-Montagne, 4000
                </address>
            </div>
        </div>
    </a>
    <div class="pagination p12">
      <ul>
        <a href="#"><li>Précédent</li></a>
        <a href="#"><li>1</li></a>
        <a href="#"><li>2</li></a>
        <a href="#"><li>3</li></a>
        <a href="#"><li>4</li></a>
        <a href="#"><li>5</li></a>
        <a class="is-active" href="#"><li>6</li></a>
        <a href="#"><li>Suivant</li></a>
      </ul>
    </div>
</section>
    <!-- <section class="artist all">
        <h2>Nos artistes</h2>
        <div class="artist__container">
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/bastien-1-e1508150338632.jpg" alt="" width="400" height="225">
                <div class="item__info">
                    <h3 class="">
                        Basiten 
                        <span>Damit</span>
                    </h3>
                    <p class="">Peintre</p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/maxime-e1508164303810.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">
                        Maxime 
                        <span>Scibetta</span>
                    </h3>
                    <p class="">Street artiste</p>
                </div>
            </a>
            <a href="" class="item">        
            <img src="http://saintleonart.app/wp-content/uploads/2017/10/alexandre-e1508164269988.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">
                        Alexandre 
                        <span>Lopez Calvo</span>
                    </h3>
                    <p class="">Acteur</p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/mehdi-e1508164215274.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">
                        Mehdi 
                        <span>Bensif</span>
                    </h3>
                    <p class="">Chanteur</p>
                </div>
            </a>
        </div>
    </section> -->
    <!-- <section class="artist all concert-expo">
        <h2>Nos concerts</h2>
        <div class="artist__container">
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/bastien-1-e1508150338632.jpg" alt="" width="400" height="225">
                <div class="item__info">
                    <h3 class="">Red hot chilly pupers</h3>
                    <p class="">Rock</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/maxime-e1508164303810.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">XV Barbar</h3>
                    <p class="">Hardcore</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">        
            <img src="http://saintleonart.app/wp-content/uploads/2017/10/alexandre-e1508164269988.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">Les frères lumières</h3>
                    <p class="">Rap</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/mehdi-e1508164215274.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">Les enfoirés</h3>
                    <p class="">Humanitaire</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
        </div>
    </section> -->
    <!-- <section class="artist all concert-expo urbanart">
        <h2>Nos concerts</h2>
        <div class="artist__container">
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/bastien-1-e1508150338632.jpg" alt="" width="400" height="225">
                <div class="item__info">
                    <h3 class="">Red hot chilly pupers</h3>
                    <p class="">Rock</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/maxime-e1508164303810.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">XV Barbar</h3>
                    <p class="">Hardcore</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">        
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/alexandre-e1508164269988.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">Les frères lumières</h3>
                    <p class="">Rap</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
            <a href="" class="item">
                <img src="http://saintleonart.app/wp-content/uploads/2017/10/mehdi-e1508164215274.jpg" alt="" width="400" height="400">
                <div class="item__info">
                    <h3 class="">Les enfoirés</h3>
                    <p class="">Humanitaire</p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place Vieille-Montagne, 4000
                    </p>
                    <p class="onhover">
                        <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                            <g>
                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                            </g>
                        </svg>
                        12:00 à 20:00
                    </p>
                </div>
            </a>
        </div>
    </section> -->
<?php get_footer(); ?>