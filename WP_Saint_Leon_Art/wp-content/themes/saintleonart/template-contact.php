<?php
/*
Template Name: Page contact    
*/
get_header();
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/contact.jpg');?>);">
    <h2 id="branding">Contactez <span>SaintLeon'Art</span></h2>
</section>
<section class="form">
    <div class="hang">
        <p>
            Vous pouvez nous contacter via ce formulaire de contact pour n'importe quelle demande. Du partenariat en passant par la simple question nous sommes à votre entière disposition !
        </p>
        <div class="content">
            <span>SaintLeon'Art</span>
            <div class="info">
                <div>
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
                    <address>Quartier Saint-Léonard, Liège, 4000, Belgique</address>
                </div>
                <div>
                    <svg version="1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.731 29.731" style="enable-background:new 0 0 29.731 29.731;">
                        <g>
                            <path d="M23.895,29.731c-1.237,0-2.731-0.31-4.374-0.93c-3.602-1.358-7.521-4.042-11.035-7.556
                                c-3.515-3.515-6.199-7.435-7.558-11.037C-0.307,6.933-0.31,4.245,0.921,3.015c0.177-0.177,0.357-0.367,0.543-0.563
                                c1.123-1.181,2.392-2.51,4.074-2.45C6.697,0.05,7.82,0.77,8.97,2.201c3.398,4.226,1.866,5.732,0.093,7.478l-0.313,0.31
                                c-0.29,0.29-0.838,1.633,4.26,6.731c1.664,1.664,3.083,2.882,4.217,3.619c0.714,0.464,1.991,1.166,2.515,0.642l0.315-0.318
                                c1.744-1.769,3.25-3.296,7.473,0.099c1.431,1.15,2.15,2.272,2.198,3.433c0.069,1.681-1.27,2.953-2.452,4.075
                                c-0.195,0.186-0.385,0.366-0.562,0.542C26.103,29.424,25.126,29.731,23.895,29.731z M5.418,1C4.223,1,3.144,2.136,2.189,3.141
                                C1.997,3.343,1.811,3.539,1.628,3.722C0.711,4.638,0.804,7.045,1.864,9.856c1.31,3.472,3.913,7.266,7.33,10.683
                                c3.416,3.415,7.208,6.018,10.681,7.327c2.811,1.062,5.218,1.152,6.133,0.237c0.183-0.183,0.379-0.369,0.581-0.56
                                c1.027-0.976,2.192-2.082,2.141-3.309c-0.035-0.843-0.649-1.75-1.825-2.695c-3.519-2.83-4.503-1.831-6.135-0.176l-0.32,0.323
                                c-0.78,0.781-2.047,0.608-3.767-0.51c-1.193-0.776-2.667-2.038-4.379-3.751c-4.231-4.23-5.584-6.819-4.26-8.146l0.319-0.315
                                c1.659-1.632,2.66-2.617-0.171-6.138C7.245,1.651,6.339,1.037,5.496,1.001C5.47,1,5.444,1,5.418,1z"/>
                        </g>
                    </svg>
                    <p>04 71 37 86 16</p>
                </div>
                <div>
                    <svg version="1.1" id="email_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.012 31.012" style="enable-background:new 0 0 31.012 31.012;">
                        <g>
                            <path d="M28.512,26.529H2.5c-1.378,0-2.5-1.121-2.5-2.5V6.982c0-1.379,1.122-2.5,2.5-2.5h26.012c1.378,0,2.5,1.121,2.5,2.5v17.047
                                C31.012,25.408,29.89,26.529,28.512,26.529z M2.5,5.482c-0.827,0-1.5,0.673-1.5,1.5v17.047c0,0.827,0.673,1.5,1.5,1.5h26.012
                                c0.827,0,1.5-0.673,1.5-1.5V6.982c0-0.827-0.673-1.5-1.5-1.5H2.5z"/>
                            <path d="M15.506,18.018c-0.665,0-1.33-0.221-1.836-0.662L0.891,6.219c-0.208-0.182-0.23-0.497-0.048-0.705
                                c0.182-0.21,0.498-0.23,0.706-0.049l12.778,11.137c0.64,0.557,1.72,0.556,2.358,0L29.46,5.466c0.207-0.183,0.522-0.162,0.706,0.049
                                c0.182,0.208,0.16,0.523-0.048,0.705L17.342,17.355C16.836,17.797,16.171,18.018,15.506,18.018z"/>
                        </g>
                    </svg>
                    <p>stleonart@gmail.com</p>
                </div>
            </div>
       </div>
    </div>
    <form action="index.php" class="contact">
        <fieldset>
            <legend class="u-hidden-visually">Prénom</legend>
            <label for="first_name">Prénom</label>
            <input type="text" id="first_name" name="first_name" class="input">
            <span class="left"></span>
        </fieldset>

        <fieldset>
            <legend class="u-hidden-visually">Nom</legend>
            <label for="last_name">Nom</label>
            <input type="text" id="last_name" name="last_name" class="input">
            <span class="left"></span>
        </fieldset>

        <fieldset>
            <legend class="u-hidden-visually">Email</legend>
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" class="input">
            <span class="left"></span>
        </fieldset>

        <fieldset>
            <legend class="u-hidden-visually">Numéro</legend>
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" class="input">
            <span class="left"></span>
        </fieldset>

        <fieldset>
            <legend class="u-hidden-visually">Message</legend>
            <label for="message">Message</label>
            <textarea rows="1" cols="10" name="message" id="message" class="input"></textarea>
            <span class="left"></span>
        </fieldset>

        <!-- <button class="send-button" id="submit" type="submit" value="Envoyer">
            <div class="button">
                <span class="send-text">Envoyer</span>
                <svg version="1.1" id="send_mail" class="send-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;">
                    <path style="fill:#5f0c30;" d="M120,339.226V496.99c0,14.374,18.38,20.499,26.997,8.994l77.065-102.729l23.492-12.037L501.919,31.57
                        l4.731-27.966l-41.329,22.839L119.916,326.288L120,339.226z"/>
                    <path style="fill:#821c49;" d="M491.237,1.196C490.56,1.467,8.933,243.282,8.279,243.61c-10.503,5.251-11.149,20.024-1.157,26.191
                        l112.866,69.463L506.638,3.642l0,0C502.707,0.236,497.062-1.218,491.237,1.196z"/>
                    <path style="fill:#821c49;" d="M507.165,4.34c-0.216-0.211-0.287-0.538-0.515-0.736l-2.935,4.16l-279.653,395.49l173.071,106.509
                        c9.014,5.541,20.68,0.258,22.603-10.005l92.021-481.989C512.735,12.682,510.673,7.755,507.165,4.34z"/>
                </svg>
            </div>
        </button> -->
        <a href="" data-text="Envoyer" class="btn btn--anim">Envoyer</a>
    </form>
</section>

<?php get_footer(); ?>