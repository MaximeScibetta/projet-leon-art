<a href="<?= get_the_permalink() ;?>">
    <div class="event__item">
        <div class="head">
            <p class="date"><span><?php ms_the_creation_date();?> .</span></p>
            <img src="<?= $fields['actu_badge']; ?>" 
            alt="Illustration de l'actualité <?= $fields['actu_title']; ?>" 
            srcset="
                <?= $fields['actu_badge_mobile']; ?> 700w,
                <?= $fields['actu_badge']; ?> 150w" 
            sizes="
                (max-width: 919px) 70vw,
                (max-width: 9000px) 5vw,
                150px">
        </div>
        <div class="content">
            <p class="title u-margin-top-small"><?= $fields['actu_title']; ?></p>
            <?php if(!$fields['actu_hour'] == "") :?>
            <p class="hour u-margin-top-small">
                <svg class="u-margin-right-small" version="1.1" id="hour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                    <g>
                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                            S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                        <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                    </g>
                </svg>
                <?= $fields['actu_hour']; ?>
            </p>
            <?php endif; ?>
            <?php if (!$fields['actu_address'] == "") : ?>
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
                <?= $fields['actu_address']; ?>
            </address>
            <?php endif; ?>
            <?php if($fields['actu_address'] == "" && $fields['actu_hour'] == "") :?>
            <p><?php ms_the_news_excerpt(100) ;?></p>
            <?php endif; ?>
        </div>
    </div>
</a>