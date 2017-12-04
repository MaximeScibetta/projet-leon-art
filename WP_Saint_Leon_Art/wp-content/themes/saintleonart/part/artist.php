<?php 
    $artists = new WP_Query();
    $artists->query([
        'post_type' => 'artist',
        'posts_per_page' => 4,
        'orderby' => 'rand',
    ]);
;?>
<?php if ( $artists->have_posts() ): while( $artists->have_posts() ): $artists->the_post();?>
<?php $fields = get_fields(); ?>
<a href="<?= get_permalink( );?>" class="item">
    <img src="<?= $fields['artiste_profil'][url];?>" alt="" width="400" height="225">
    <div class="item__info">
        <h3 class="">
            <?= $fields['artist_surname'];?>
            <span><?= $fields['artist_name'];?></span>
        </h3>
        <p class=""><?= $fields['artist_job'];?></p>
    </div>
</a>
<?php endwhile;endif; ?>