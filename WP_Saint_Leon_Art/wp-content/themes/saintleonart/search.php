<?php
get_header();
global $wp_query;

$search_query = $wp_query;
$search = new WP_Query($search_query);
$search->query([
    'post_type' => ['artist', 'event', 'post', 'page'],
    's' => $search_query->query_vars['s'],
]);
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/contact.jpg'); ?>);">
    <h2 id="branding">Recherche <span>SaintLeon'Art</span></h2>
</section>
<section class="search">
    <h2>'count' résultat à votre recherche de "string"</h2>
    <?php if ($search->have_posts()) : ?>
    <div class="search__result result">
        <?php while ($search->have_posts()) : $search->the_post(); ?>
        <?php $fields = get_fields(); ?>
        <div class="result__item">
            <a href="<?= $search->post->guid; ?>"><?= $search->post->post_title; ?></a>
            <time datetime=""><?= $search->post->post_date; ?></time>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>