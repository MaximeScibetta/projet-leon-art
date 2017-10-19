<?php
/*
Template Name: Page Accueil
*/
get_header();
?>
<section class="introduction" style="background-image: url(<?= dw_asset('images/home.jpg');?>);">
    <div class="introduction__container">
            <h2 class="sla">SaintLeon'Art</h2>
            <p class="introduction__tagline u-padding-horizontal-small u-10/18@tablet">
                Parcours d'artistes dans le quartier saint léonard à Liège du 19 au 21 août 2018
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
        <a href="http://saintleonart.app/?page_id=29" class="btn button btn--hover">Le programme</a>
        <a href="http://saintleonart.app/?page_id=49" class="btn btn--hover">L'Actualité</a>
    </div>
</section>
<section class="activitie">
    <h2 class="u-margin-top-large">Venez y voir des ...</h2>
    <div class="activitie__flex o-layout">
        <a class="clickable" href="http://saintleonart.app/?page_id=49">
            <div class="o-layout__item">
                <h3 class=""><span>Artist</span>es</h3>
                <p class="">Venant de toutes là Belgique, vous pourrez y découvrire des artistes de tous les genres, avec pour chacun leur histoire et le style.</p> 
            </div>
            <div id="arrow-cta">
                    <p>Voir tous nos artistes</p>
                    <svg width="92px" height="9px" viewBox="0 0 92 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Landing-Copy" transform="translate(-809.000000, -808.000000)" fill="#FFFFFF">
                                <g id="Project-Info" transform="translate(740.000000, 309.000000)">
                                    <g id="Button" transform="translate(0.000000, 497.000000)">
                                        <path d="M158.794907,7 L69.2478632,7 L69.2478632,6 L158.80056,6 L155.775798,2.97523772 L156.482905,2.26813094 L160.689284,6.47450974 L160.207862,6.95593111 L160.207862,7 L160.163793,7 L159.983688,7.18010561 L160.000308,7.19672564 L156.464774,10.7322596 L155.763711,10.0311964 L158.794907,7 Z" id="Arrow"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div> 
        </a>
        <a class="clickable" href="http://saintleonart.app/?page_id=49">
            <div class="o-layout__item activitie__item">
                <h3 class=""><span>Conce</span>rts</h3>
                <p class="">De tous genre musicaux en passant par le classic en allant jusqu'au rap, vous pourrez venir dancer face à notre scène avec un bar à proximité.</p>
                <div id="arrow-cta">
                    <p>Voir tous nos concerts</p>
                    <svg width="92px" height="9px" viewBox="0 0 92 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Landing-Copy" transform="translate(-809.000000, -808.000000)" fill="#FFFFFF">
                                <g id="Project-Info" transform="translate(740.000000, 309.000000)">
                                    <g id="Button" transform="translate(0.000000, 497.000000)">
                                        <path d="M158.794907,7 L69.2478632,7 L69.2478632,6 L158.80056,6 L155.775798,2.97523772 L156.482905,2.26813094 L160.689284,6.47450974 L160.207862,6.95593111 L160.207862,7 L160.163793,7 L159.983688,7.18010561 L160.000308,7.19672564 L156.464774,10.7322596 L155.763711,10.0311964 L158.794907,7 Z" id="Arrow"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>  
            </div>
        </a>
        <a class="clickable" href="http://saintleonart.app/?page_id=49">
            <div class="o-layout__item activitie__item">
                <h3 class=""><span>Art ur</span>bains</h3>
                <p class="">Présent dans tous le quartier avec l'avantage qu'ils soient visible toutes l'année à n'importe quelles heures. Un art d'un autre genre en pleine émergence.</p>
                <div id="arrow-cta">
                    <p>Voir tous nos art urbains</p>
                    <svg width="92px" height="9px" viewBox="0 0 92 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Landing-Copy" transform="translate(-809.000000, -808.000000)" fill="#FFFFFF">
                                <g id="Project-Info" transform="translate(740.000000, 309.000000)">
                                    <g id="Button" transform="translate(0.000000, 497.000000)">
                                        <path d="M158.794907,7 L69.2478632,7 L69.2478632,6 L158.80056,6 L155.775798,2.97523772 L156.482905,2.26813094 L160.689284,6.47450974 L160.207862,6.95593111 L160.207862,7 L160.163793,7 L159.983688,7.18010561 L160.000308,7.19672564 L156.464774,10.7322596 L155.763711,10.0311964 L158.794907,7 Z" id="Arrow"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>  
            </div>
        </a>
        <a class="clickable" href="http://saintleonart.app/?page_id=49">
            <div class="o-layout__item activitie__item">
                <h3 class=""><span>Expos</span>itions</h3>
                <p class="">Durant notre week-end, venez chez nos habitants découvrir nos artistes partenaire, venez disctuer avec eux et voir leur oeuvres.</p>
                <div id="arrow-cta">
                    <p>Voir tous nos expositions</p>
                    <svg width="92px" height="9px" viewBox="0 0 92 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Landing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Landing-Copy" transform="translate(-809.000000, -808.000000)" fill="#FFFFFF">
                                <g id="Project-Info" transform="translate(740.000000, 309.000000)">
                                    <g id="Button" transform="translate(0.000000, 497.000000)">
                                        <path d="M158.794907,7 L69.2478632,7 L69.2478632,6 L158.80056,6 L155.775798,2.97523772 L156.482905,2.26813094 L160.689284,6.47450974 L160.207862,6.95593111 L160.207862,7 L160.163793,7 L159.983688,7.18010561 L160.000308,7.19672564 L156.464774,10.7322596 L155.763711,10.0311964 L158.794907,7 Z" id="Arrow"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>  
            </div>
        </a>
    </div>
    <a href="http://saintleonart.app/?page_id=29" class="btn u-margin-top">Voir le programme</a>
</section>
<section class="artist">
    <h2 class="u-margin-bottom">Nos participants</h2>
    <div class="artist__container">
        <a href="http://saintleonart.app/?page_id=27" class="item">
            <img src="http://saintleonart.app/wp-content/uploads/2017/10/bastien-1-e1508150338632.jpg" alt="" width="400" height="225">
            <div class="item__info">
                <h3 class="">
                    Basiten 
                    <span>Damit</span>
                </h3>
                <p class="">Peintre</p>
            </div>
        </a>
        <a href="http://saintleonart.app/?page_id=27" class="item">
            <img src="http://saintleonart.app/wp-content/uploads/2017/10/maxime-e1508164303810.jpg" alt="" width="400" height="225">
            <div class="item__info">
                <h3 class="">
                    Maxime 
                    <span>Scibetta</span>
                </h3>
                <p class="">Street artiste</p>
            </div>
        </a>
        <a href="http://saintleonart.app/?page_id=27" class="item">        
        <img src="http://saintleonart.app/wp-content/uploads/2017/10/alexandre-e1508164269988.jpg" alt="" width="400" height="225">
            <div class="item__info">
                <h3 class="">
                    Alexandre 
                    <span>Lopez Calvo</span>
                </h3>
                <p class="">Acteur</p>
            </div>
        </a>
        <a href="http://saintleonart.app/?page_id=27" class="item">
            <img src="http://saintleonart.app/wp-content/uploads/2017/10/mehdi-e1508164215274.jpg" alt="" width="400" height="225">
            <div class="item__info">
                <h3 class="">
                    Mehdi 
                    <span>Bensif</span>
                </h3>
                <p class="">Chanteur</p>
            </div>
        </a>
    </div>
    <a href="http://saintleonart.app/?page_id=49" class="btn u-margin-top">Voir tous nos artistes</a>
</section>
<section class="event">
    <h2>Prochain événement</h2>
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
    <a href="" class="btn u-margin-top">Voir tous nos événements</a>
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
    <!-- <svg class="u-margin-horizontal-small" version="1.1" id="arrowLeft" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44.238 44.238" style="enable-background:new 0 0 44.238 44.238;">
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
    </svg> -->
    <div class="instagram__gallery u-margin-top">
        <img src="<?= dw_asset('images/insta.jpg');?>" alt="" class="instagram__item">
        <img src="<?= dw_asset('images/insta1.jpg');?>" alt="" class="instagram__item">
        <img src="<?= dw_asset('images/insta-2.jpg');?>" alt="" class="instagram__item">
        <img src="<?= dw_asset('images/insta3.jpg');?>" alt="" class="instagram__item">
    </div>
    <!-- <svg class="u-margin-horizontal-small" version="1.1" id="arrowRight" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44.236 44.236" style="enable-background:new 0 0 44.236 44.236;">
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
    </svg> -->
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
<?php get_footer(); ?>