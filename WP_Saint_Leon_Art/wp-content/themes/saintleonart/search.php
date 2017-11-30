<?php
get_header();
global $wp_query;

$search_query = $wp_query;
$search = new WP_Query($search_query);
$search->query([
    'post_type' => ['artist', 'event', 'post', 'page'],
    's' => get_search_query(),
]);
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/contact.jpg'); ?>);">
    <h2 id="branding">Recherche <span>SaintLeon'Art</span></h2>
</section>
<section class="search">
    <h2>
    <?php $count = $wp_query->found_posts;
        $several = ($count <= 1) ? '' : 's'; //pluriel

        if ($count > 0) : $output = $count . ' résultat' . $several . ' pour la recherche';
        else : $output = 'Aucun résultat pour la recherche';
        endif;

        $output .= ' "<span class="terms_search">' . get_search_query() . '</span>"';

        echo $output; ?>
    </h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="article_found" id="post-<?php the_ID(); ?>">
        <h3>
            <a href="<?php the_permalink(); ?>" title="Lire l'article &quot;<?php the_title(); ?>&quot;">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="the_excerpt">
            <a class="url" href="<?php the_permalink(); ?>">
                <?php
                $permalink = get_permalink();
                    
                    // si le permalien fait plus de 60 caractères de long on le coupe
                if (strlen($permalink) > 60) : echo mb_substr($permalink, 0, 60, "UTF-8") . '&hellip;'; ?>

                    // sinon on l'affiche simplement
                    <?php else : echo $permalink;
                    endif; ?>
            </a>
            <time datetime="<?php the_time('Y-m-d'); ?>">
                <?php the_time('l d F'); ?>
            </time>
        </p>
    </article>
<?php  endwhile; else : ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>