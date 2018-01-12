<?php
get_header();
global $wp_query;

$search_query = $wp_query;
$search = new WP_Query($search_query);
$search->query([
    'post_type' => ['artist', 'event', 'post', 'page'],
    'orderby' => 'rand',
    's' => get_search_query(),
    'paged' => 'page',
    'posts_per_page' => 5,
]);
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/contact.jpg'); ?>);">
    <h2 id="branding">Recherche <span>SaintLeon'Art</span></h2>
</section>
<section class="search_parent">
    <div class="search open">
        <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
            <input autofocus type="text" placeholder="Votre recherche" name="s" id="s" />
            <input type="submit" class="send search-submit" value="Search" />
        </form>
        <span class="search-button">
            <span class="search-icon"></span>
        </span>
    </div>
    <h2>
        <?php $count = $wp_query->found_posts;
            $several = ($count <= 1) ? '' : 's'; //pluriel

            if ($count > 0) : $output = $count . ' résultat' . $several . ' pour la recherche';
            else : $output = 'Aucun résultat pour la recherche';
            endif;

            $output .= ' "<span class="terms_search">' . get_search_query() . '</span>"';

            echo $output;
        ?>
    </h2>
<?php if ($search->have_posts()) : while ($search->have_posts()) : $search->the_post();?>
    <article class="article_found" id="post-<?php the_ID(); ?>">
        <h3>
            <a href="<?php the_permalink(); ?>" title="Lire l'article &quot;<?php the_title(); ?>&quot;">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="createDate">
            Créé le <?= the_date('l d F'); ?>
        </p>
        <a class="btn btn--anim url" data-text="Vers l'articles" href="<?php the_permalink(); ?>">
            Vers l'article
        </a>
    </article>
    <?php endwhile;
else : ?>
<?php endif; ?>
<div class="pagination p12">
    <?= paginate_links(array(
        'total' => $search->max_num_pages,
    ));?>       
</div>
</section>
<?php get_footer(); ?>