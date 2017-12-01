<?php
/*
Template Name: Page all news    
 */
get_header();
?>
<?php 
    // Default values for user SESSION
        if (!isset($_SESSION['news_filter'])) {
            $_SESSION['news_filter'] = 'null';
        }
        if (!isset($_SESSION['news_current_page'])) {
            $_SESSION['news_current_page'] = 1;
        }
        if (!isset($_SESSION['news_filter_date'])) {
            $_SESSION['news_filter_date'] = 'DESC';
        }

    // Set custom paged query.
        $_SESSION['news_current_page'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Events query
        $args = [
            'post_type' => 'news',
            'orderby' => 'date',
            'order' => $_SESSION['news_filter_date'],
            'paged' => $_SESSION['news_current_page'],
            'posts_per_page' => 1,
            'tax_query' => [
                [
                    'taxonomy' => 'subject',
                    'field' => 'id',
                    'terms' => $_SESSION['news_filter'],
                ]
            ]
        ];

    // Init query
        $query = new WP_Query($args);
    
    // Pagination query
        $paginateArgs = array(
            'format' => '?page=%#%',
            'current' => ($_SESSION['news_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['news_current_page'],
            'total' => $query->max_num_pages
        );
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/all-expo.jpg'); ?>);">
    <h2 class="branding" id="branding">Actualités <span>SaintLeon'Art</span></h2>
</section>
<section class="event all">
    <h2>Toutes nos actualités</h2>
    <div class="all__navigation">
        <ul class="see">
            <li>Je veux voir ...</li>
            <?php foreach (dw_get_nav_items('all__navigation') as $item) :?>
                <li><a href="<?php echo $item->link; ?>"><?php echo $item->label; ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="news_filter" class="all__navigation">
        <?php if ($terms = get_terms('subject', 'orderby=name')) :
            echo '<select name="news_categoryfilter" class="order">';
        echo '<option value="null">Tous les événements </option>';
        foreach ($terms as $term) :
            echo '<option value="' . $term->term_id . '"' . ( ($term->term_id == $_SESSION['news_filter']) ? 'selected="selected"' : "") . '>' . $term->name . '</option>';
        endforeach;
        echo '</select>';
        endif; ?>
        <div class="radio">
            <input id="radioASC" type="radio" name="news_date" value="ASC" <?php if ($_SESSION['news_filter_date'] == 'ASC') : echo 'checked';
                                                                            endif; ?> /> 
            <label for="radioASC" class="radio-label">Les plus anciens</label>
        </div>
        <div class="radio">
            <input id="radioDESC" type="radio" name="news_date" value="DESC" <?php if ($_SESSION['news_filter_date'] == 'DESC') : echo 'checked';
                                                                                endif; ?>  />
            <label for="radioDESC" class="radio-label">Les plus récent</label>
        </div>
        <input type="submit" name="newsfilter" value="Filtrer les éléments" class="btn btn--anim" data-text="Filtrer les éléments">
        <input type="hidden" name="action" value="newsfilter">
    </form>
    <?php if ($query->have_posts()) : ?>
    <div class="event__container">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php $fields = get_fields(); ?>
        <?php include('part/all-news.php'); ?>
        <?php endwhile; ?>
        <div class="pagination p12">
            <?php echo paginate_links($paginateArgs); ?>       
        </div>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
