<?php 
$news = new WP_Query();
$news->query([
        'post_type' => 'news',
        'posts_per_page' => 3,
]);; ?>
<?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
<?php $fields = get_fields(); ?>
    <a href="<?= get_permalink(); ?>" class="lastActu__item item">
        <img src="<?= $fields['actu_badge']; ?>" alt="Illustration de l'actualité <?= $fields['actu_title']; ?>">
        <div class="item__info info">
            <p class="info__title"><?= $fields['actu_title']; ?></p>
        </div>
    </a>
<?php endwhile;
endif; ?>