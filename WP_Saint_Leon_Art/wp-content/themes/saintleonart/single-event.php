<?php
/*
Template Name: Page single news
 */
get_header();
$news = new WP_Query();
$news->query([
    'post_type' => 'event',
    'name' => sla_get_the_slug(),
]); ?>
<div itemscope itemtype="http://schema.org/Event">
<?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
    <?php $fields = get_fields(); ?>
    <section class="news__introduction" style="background-image: url(<?= $fields['event_branding']; ?>);">
        <div class="title">
            <h2 itemprop="name"><?= $fields['event_name']; ?></h2>
        </div>
    </section>
    <?php if ($fields['event_date'] || $fields['event_hour'] || $fields['event_address']) : ?>
        <div class="news__information">
            <time datetime="">
                <svg version="1.1" id="calendar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                    <g>
                        <path d="M57,4h-7V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H19V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H3C2.447,4,2,4.447,2,5v11v43c0,0.553,0.447,1,1,1h54c0.553,0,1-0.447,1-1V16V5C58,4.447,57.553,4,57,4z M43,2h5v3v3h-5V5V2z M12,2h5v3v3h-5V5V2z M4,6h6v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h22v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h6v9H4V6zM4,58V17h52v41H4z"/>
                        <path d="M38,23h-7h-2h-7h-2h-9v9v2v7v2v9h9h2h7h2h7h2h9v-9v-2v-7v-2v-9h-9H38z M31,25h7v7h-7V25z M38,41h-7v-7h7V41z M22,34h7v7h-7 V34z M22,25h7v7h-7V25z M13,25h7v7h-7V25z M13,34h7v7h-7V34z M20,50h-7v-7h7V50z M29,50h-7v-7h7V50z M38,50h-7v-7h7V50z M47,50h-7v-7h7V50z M47,41h-7v-7h7V41z M47,25v7h-7v-7H47z"/>
                    </g>
                </svg>
                <span itemprop="startTime">
                    <?= $fields['event_date']; ?>
                </span>
            </time>
            <span class="hour" itemprop="doorTime">
                <svg version="1.1" id="hour_right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                    <g>
                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                            S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                        <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                    </g>
                </svg>
                <?= $fields['event_hour']; ?>
                <svg version="1.1" id="hour_left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;">
                    <g>
                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                            S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                        <path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/>
                    </g>
                </svg>
            </span>
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
                <?= $fields['event_address']; ?>
            </address itemprop="location">
        </div>
    <?php endif; ?>
    <section class="news__content">
        <h2><?= $fields['event_name']; ?></h2>
        <div itemprop="description">
            <?= $fields['event_description']; ?>   
        </div>
    </section>
    <div class="news__cta">
        <a title="Vers la page toutes nos actualités" href="<?= get_page_link(282); ?>" class="btn btn--anim" data-text="Voir toutes nos actualités">Voir toutes nos actualités</a>
        <a title="Vers la page tous nos artistes" href="<?= get_page_link(236); ?>" class="btn btn--anim" data-text="Voir tous nos artistes">Voir tous nos artistes</a>
        <a title="Vers la page tous nos événements" href="<?= get_page_link(233); ?>" class="btn btn--anim" data-text="Voir tous nos événements">Voir tous nos événements</a>
    </div>
    <?php if (have_rows('event_gallery')) : ?>
    <section class="news__gallery">
    <h2 class="u-hidden-visually">Présentation d'image de <?= $fields['event_name']; ?></h2>
        <?php $images = get_field('event_gallery');
        if ($images) : ?>
            <?php foreach ($images as $image) : ?>
                <img itemprop="image" src="<?php echo $image['gallery_item']['url']; ?>" alt="<?php echo $image['gallery_item']['alt']; ?>" />
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <?php endif; ?>
<?php endwhile;
endif; ?>
</div>
<?php get_footer(); ?>