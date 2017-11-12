<?php
/*
Template Name: Page perso    
*/
get_header();
?>
<?php 
    $perso = new WP_Query();
    $perso->query([
        'post_type' => 'artist',
        'name' => sla_get_the_slug(),
        ]);
;?>
<?php if ( $perso->have_posts() ): while( $perso->have_posts() ): $perso->the_post();?>
<?php $fields = get_fields();?>
<section class="introduction" style="background-image: url(<?= $fields['artist_branding'] ;?>);">
    <h2 id="branding"><?= $fields['artist_name']; ?><span> SaintLeon'Art</span></h2>
    <?php if( have_rows('artist_location') ): the_row(); ?>
        <div class="location">
            <a href="#map">
                <address>
                    <?php the_sub_field('artist_address'); ?>
                </address>
            </a>
        </div>
    <?php endif; ?>
</section>
<?php if( have_rows('section_description') ): while ( have_rows('section_description') ) : the_row(); ?>
    <section class="description">
        <?php sla_image_attribute('artist_description_img'); ?>
        <div>
            <h3><?= $fields['artist_name']; ?></h3>
            <p class="content">
                    <?php the_sub_field('artist_description'); ?>
            </p>
            <div class="theme">
            <?php foreach( sla_taxonomies(get_the_ID(), 'kind') as $taxo): ?>
                <p><a href="">#<?= $taxo; ?></a></p>
            <?php endforeach; ?>  
            </div>
            <a href="http://saintleonart.app/?page_id=49" class="btn btn--anim"  data-text="Voir tous nos artistes">Voir tous nos artistes</a>
        </div>
    </section>
<?php endwhile; endif;?>
<?php $images = get_field('artist_gallery'); if( $images ): ?>
    <section class="artwork">
        <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endforeach; ?>
    </section>
<?php endif; ?>
<div id="map"></div>
<?php if( have_rows('artist_social') ): the_row(); ?>
<section class="social">
    <h2>Retrouvez <?= $fields['artist_name']; ?> sur les réseaux sociaux !</h2>
    <div>
        <a href="<?php the_sub_field('social_twitter'); ?>">
            <svg version="1.1" id="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;">
                <g>
                    <g>
                        <path  d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
                            c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
                            c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
                            c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
                            c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
                            c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
                            c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
                    </g>
                </g>
            </svg>
            <span class="u-hidden-visually">twitter</span>    
        </a>
        <a href="<?php the_sub_field('social_facebook'); ?>" class="">
            <svg xmlns="http://www.w3.org/2000/svg" height="96.123" viewBox="0 0 96.124 96.123">
                <path  d="M72.089.02L59.624 0C45.62 0 36.57 9.285 36.57 23.656v10.907H24.037a1.96 1.96 0 0 0-1.96 1.961v15.803a1.96 1.96 0 0 0 1.96 1.96H36.57v39.876a1.96 1.96 0 0 0 1.96 1.96h16.352a1.96 1.96 0 0 0 1.96-1.96V54.287h14.654a1.96 1.96 0 0 0 1.96-1.96l.006-15.803a1.963 1.963 0 0 0-1.961-1.961H56.842v-9.246c0-4.444 1.059-6.7 6.848-6.7l8.397-.003a1.96 1.96 0 0 0 1.959-1.96V1.98A1.96 1.96 0 0 0 72.089.02z"/>
            </svg>
            <span class="u-hidden-visually">facebook</span>    
        </a>
        <a href="<?php the_sub_field('social_instagram'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" height="169.063" viewBox="0 0 169.063 169.063">
                <path  d="M122.406 0H46.654C20.929 0 0 20.93 0 46.655v75.752c0 25.726 20.929 46.655 46.654 46.655h75.752c25.727 0 46.656-20.93 46.656-46.655V46.655C169.063 20.93 148.133 0 122.406 0zm31.657 122.407c0 17.455-14.201 31.655-31.656 31.655H46.654C29.2 154.063 15 139.862 15 122.407V46.655C15 29.201 29.2 15 46.654 15h75.752c17.455 0 31.656 14.201 31.656 31.655v75.752z"/>
                <path  d="M84.531 40.97c-24.021 0-43.563 19.542-43.563 43.563 0 24.02 19.542 43.561 43.563 43.561s43.563-19.541 43.563-43.561c0-24.021-19.542-43.563-43.563-43.563zm0 72.123c-15.749 0-28.563-12.812-28.563-28.561 0-15.75 12.813-28.563 28.563-28.563s28.563 12.813 28.563 28.563c0 15.749-12.814 28.561-28.563 28.561zM129.921 28.251c-2.89 0-5.729 1.17-7.77 3.22a11.053 11.053 0 0 0-3.23 7.78c0 2.891 1.18 5.73 3.23 7.78 2.04 2.04 4.88 3.22 7.77 3.22 2.9 0 5.73-1.18 7.78-3.22 2.05-2.05 3.22-4.89 3.22-7.78 0-2.9-1.17-5.74-3.22-7.78-2.04-2.05-4.88-3.22-7.78-3.22z"/>
            </svg>
            <span class="u-hidden-visually">Instagram</span>    
        </a>
    </div>
</section>
<?php endif; ?>
<?php endwhile;endif; ?>
<?php get_footer(); ?>