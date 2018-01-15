<?php
/*
Template Name: Page all artist   
 */
get_header();
?>
<?php 
    // Default values for user SESSION
        if(!isset($_SESSION['artist_filter'])){
            $_SESSION['artist_filter'] = 'null';
        }
        if (!isset($_SESSION['current_page'])) {
            $_SESSION['current_page'] = 1;
        }
        if (!isset($_SESSION['artist_filter_date'])) {
            $_SESSION['artist_filter_date'] = 'DESC';
        }

    // Set custom paged query.
        $_SESSION['current_page'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Artists query
        $args = [
            'post_type' => 'artist',
            'orderby' => 'date',
            'order' => $_SESSION['artist_filter_date'],
            'paged' => $_SESSION['current_page'],
            'posts_per_page' => 4,
            'tax_query' => [
                [
                    'taxonomy' => 'kind',
                    'field' => 'id',
                    'terms' => $_SESSION['artist_filter'],
                ]
            ]
        ];

    // Init query
        $query = new WP_Query($args);
    
    // Set custom pagination query.
        global $wp_rewrite;
        $base = trailingslashit(home_url('/')) . "?{$wp_rewrite->pagination_base}=%#%&page_id=236";
        $paginateArgs = array(
            'format' => '?page=%#%',
            'current' => ($_SESSION['current_page'] > $query->max_num_pages) ? 1 : $_SESSION['current_page'],
            'total' => $query->max_num_pages,
            'base' => $base,
        );
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/all-expo.jpg'); ?>);">
    <h2 class="branding" id="branding">Artistes <span>SaintLeon'Art</span></h2>
</section>
<section class="artist all">
    <h2>Tous nos artistes</h2>
    <?php get_template_part('part-all-navigation'); ?>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" class="all__navigation">
        <label for="categoryfilter" class="u-hidden-visually">Sélectionnez un genre</label>
        <?php if ($terms = get_terms('kind', 'orderby=name')) : 
            echo '<select name="categoryfilter" id="categoryfilter" class="order">';
            echo '<option value="null">Voir tous les artistes </option>';
            foreach ($terms as $term) :
                echo '<option value="' . $term->term_id . '"'.(($term->term_id == $_SESSION['artist_filter'])?'selected="selected"':"").'>' . $term->name . '</option>';
            endforeach;
            echo '</select>';
        endif;?>
        <fieldset class="radio">
            <legend class="u-hidden-visually">Trier les artistes par date</legend>
            <input id="radioASC" type="radio" name="date" value="ASC" <?php if($_SESSION['artist_filter_date'] == 'ASC'): echo 'checked'; endif;?> /> 
            <label for="radioASC" class="radio-label">Les plus anciens</label>
            <input id="radioDESC" type="radio" name="date" value="DESC" <?php if ($_SESSION['artist_filter_date'] == 'DESC') : echo 'checked'; endif; ?>  />
            <label for="radioDESC" class="radio-label">Les plus récent</label>
        </fieldset>
        <input type="submit" name="artistfilter" value="Filtrer les éléments" class="btn btn--anim" data-text="Filtrer les éléments">
        <input type="hidden" name="action" value="artistfilter">
    </form>
    <?php if ($query->have_posts()) : ?>
        <div class="artist__container">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php $fields = get_fields(); ?>
                <?php include('part/all-artist.php'); ?>
            <?php endwhile; ?>
            <div class="pagination p12">
                <?php echo paginate_links($paginateArgs); ?>        
            </div>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
