<?php
/*
Template Name: Page all event    
 */
get_header();
?>
<?php 
    // Default values for user SESSION
        if (!isset($_SESSION['event_filter'])) {
            $_SESSION['event_filter'] = 'null';
        }
        if (!isset($_SESSION['event_current_page'])) {
            $_SESSION['event_current_page'] = 1;
        }
        if (!isset($_SESSION['event_filter_date'])) {
            $_SESSION['event_filter_date'] = 'DESC';
        }

    // Set custom paged query.
        $_SESSION['event_current_page'] = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Events query
        $args = [
            'post_type' => 'event',
            'orderby' => 'date',
            'order' => $_SESSION['event_filter_date'],
            'paged' => $_SESSION['event_current_page'],
            'posts_per_page' => 1,
            'tax_query' => [
                [
                    'taxonomy' => 'type',
                    'field' => 'id',
                    'terms' => $_SESSION['event_filter'],
                ]
            ]
        ];

    // Init query
        $query = new WP_Query($args);
    
    // Pagination query
        $paginateArgs = array(
            'format' => '?page=%#%',
            'current' => ($_SESSION['event_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['event_current_page'],
            'total' => $query->max_num_pages
        );
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/all-expo.jpg'); ?>);">
    <h2 class="branding" id="branding">Événements <span>SaintLeon'Art</span></h2>
</section>
<section class="event all">
    <h2>Tous nos événements</h2>
    <?php get_template_part('part-all-navigation'); ?>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="event_filter" class="all__navigation">
        <label for="event_categoryfilter" class="u-hidden-visually">Sélectionnez un genre</label>
        <?php if ($terms = get_terms('type', 'orderby=name')) :
            echo '<select name="event_categoryfilter" id="event_categoryfilter" class="order">';
            echo '<option value="null">Tous les événements </option>';
            foreach ($terms as $term) :
                echo '<option value="' . $term->term_id . '"' . ( ($term->term_id == $_SESSION['event_filter']) ? 'selected="selected"' : "") . '>' . $term->name . '</option>';
            endforeach;
            echo '</select>';
        endif; ?>
        <fieldset class="radio">
            <legend class="u-hidden-visually">Trier les actualités par date</legend>
            <input id="radioASC" type="radio" name="event_date" value="ASC" <?php if ($_SESSION['event_filter_date'] == 'ASC') : echo 'checked'; endif; ?> /> 
            <label for="radioASC" class="radio-label">Les plus anciens</label>
            <input id="radioDESC" type="radio" name="event_date" value="DESC" <?php if ($_SESSION['event_filter_date'] == 'DESC') : echo 'checked'; endif; ?>  />
            <label for="radioDESC" class="radio-label">Les plus récent</label>
        </fieldset>
        <input type="submit" name="eventfilter" value="Filtrer les éléments" class="btn btn--anim" data-text="Filtrer les éléments">
        <input type="hidden" name="action" value="eventfilter">
    </form>
    <?php if($query->have_posts()) : ?>
    <div class="event__container">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php $fields = get_fields(); ?>
        <?php include('part/all-event.php'); ?>
        <?php endwhile; ?>
        <div class="pagination p12">
            <?php echo paginate_links($paginateArgs); ?>       
        </div>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
