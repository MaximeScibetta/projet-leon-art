<?php
/*
Template Name: Page programme    
*/
get_header();
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/program.jpg');?>);">
    <h2 id="branding" class="branding">Programme <span>SaintLeon'Art</span></h2>
</section>
<div class="information">
    <address>
        <svg version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
            <g>
                <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
            </g>
        </svg>
        <span>Saint Léonard 4000, Liège, Belgique</span>
    </address>
    <p class="time">
        <span>Du 19 août à 18:00 au 21 août à 20:00</span>
        <svg version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
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
            <a href="#day1">19 août</a>
            <a href="#day2">20 août</a>
            <a href="#day3">21 août</a>
            <a href="#all">Tous le programme</a>
        </div>
        <a href="" class="order">Trier 
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.154px" height="96.154px" viewBox="0 0 96.154 96.154" style="enable-background:new 0 0 96.154 96.154;">
                <g>
                    <path d="M0.561,20.971l45.951,57.605c0.76,0.951,2.367,0.951,3.127,0l45.956-57.609c0.547-0.689,0.709-1.716,0.414-2.61
                        c-0.061-0.187-0.129-0.33-0.186-0.437c-0.351-0.65-1.025-1.056-1.765-1.056H2.093c-0.736,0-1.414,0.405-1.762,1.056
                        c-0.059,0.109-0.127,0.253-0.184,0.426C-0.15,19.251,0.011,20.28,0.561,20.971z"/>
                </g>
            </svg>
        </a>
        <a href="#mapinteractiv" class="interactiv">Map interactive</a>
    </div>
    <div class="timeline day1" id="day1" id="all">
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content">
                    <h2>Concert de Maxime Scibetta</h2>
                    <span>
                        <svg version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-2 -2 65 65" style="enable-background:new 0 0 60 60;">
                                <path stroke="#000" stroke-width="3" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                    S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                <path stroke="#000" stroke-width="1" d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                        </svg>
                        12:00
                    </span>
                    <address>
                        <svg version="1.1" id="location" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;">
                            <g>
                                <path stroke="#000" stroke-width="3"  d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
                                    s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
                                <path stroke="#000" stroke-width="3"  d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
                                    L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
                                    C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
                                    C45.576,13.08,46.321,24.468,41.099,31.431z"/>
                            </g>
                        </svg>
                        Place saint léonard
                    </address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content right">
                    <h2>Concert de Maxime Scibetta 1</h2>
                    <span>12:00</span>
                    <address>Rue de louveigné, 170/08, 4000, Liège</address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
    </div>
    <div class="timeline day2" id="day2" id="all">
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content">
                    <h2>Concert de Maxime Scibetta</h2>
                    <span>12:00</span>
                    <address>Place saint léonard</address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content right">
                    <h2>Concert de Maxime Scibetta 2</h2>
                    <span>12:00</span>
                    <address>Rue de louveigné, 170/08, 4000, Liège</address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
    </div>
    <div class="timeline day3" id="day3" id="all">
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content">
                    <h2>Concert de Maxime Scibetta</h2>
                    <span>12:00</span>
                    <address>Place saint léonard</address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="timeline-item">
                <div class="timeline-icon"></div>
                <div class="timeline-content right">
                    <h2>Concert de Maxime Scibetta 3</h2>
                    <span>12:00</span>
                    <address>Rue de louveigné, 170/08, 4000, Liège</address>
                    <p>
                        Jeune artiste belge, maxime n'a pas d'inspiration pour le contenu donc écrit n'importe quoi, on fera avec.
                    </p>
                </div>
            </div>
        </a>
    </div>
</section> 
<section class="map" id="mapinteractiv">
    <h2>Map interactive</h2>
    <div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe scrolling="no" style="overflow:hidden;" src="https://www.google.fr/maps/d/embed?mid=1nmuuAJ-lLItmVbx4dM3wAajKFHk" height="480"></iframe>
</section>

<?php get_footer(); ?>