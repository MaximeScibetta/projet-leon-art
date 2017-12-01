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
    <!-- <div class="all__navigation">
        <a href="" class="order">Trier par date
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.154px" height="96.154px" viewBox="0 0 96.154 96.154" style="enable-background:new 0 0 96.154 96.154;">
                <g>
                    <path d="M0.561,20.971l45.951,57.605c0.76,0.951,2.367,0.951,3.127,0l45.956-57.609c0.547-0.689,0.709-1.716,0.414-2.61
                        c-0.061-0.187-0.129-0.33-0.186-0.437c-0.351-0.65-1.025-1.056-1.765-1.056H2.093c-0.736,0-1.414,0.405-1.762,1.056
                        c-0.059,0.109-0.127,0.253-0.184,0.426C-0.15,19.251,0.011,20.28,0.561,20.971z"/>
                </g>
            </svg>
        </a>
        <ul class="see">
            <li>Voir les
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.154px" height="96.154px" viewBox="0 0 96.154 96.154" style="enable-background:new 0 0 96.154 96.154;">
                    <g>
                        <path d="M0.561,20.971l45.951,57.605c0.76,0.951,2.367,0.951,3.127,0l45.956-57.609c0.547-0.689,0.709-1.716,0.414-2.61
                            c-0.061-0.187-0.129-0.33-0.186-0.437c-0.351-0.65-1.025-1.056-1.765-1.056H2.093c-0.736,0-1.414,0.405-1.762,1.056
                            c-0.059,0.109-0.127,0.253-0.184,0.426C-0.15,19.251,0.011,20.28,0.561,20.971z"/>
                    </g>
                </svg>
            </li>
            <li><a href="">actualités</a></li>
            <li><a href="">événements</a></li>
            <li><a href="">concerts</a></li>
            <li><a href="">expositions</a></li>
            <li><a href="">artistes</a></li>
            <li><a href="">arts urbains</a></li>
        </ul>
    </div> -->
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="event_filter" class="all__navigation">
        <?php if ($terms = get_terms('type', 'orderby=name')) :
            echo '<select name="event_categoryfilter" class="order">';
            echo '<option value="null">Tous les événements </option>';
            foreach ($terms as $term) :
                echo '<option value="' . $term->term_id . '"' . ( ($term->term_id == $_SESSION['event_filter']) ? 'selected="selected"' : "") . '>' . $term->name . '</option>';
            endforeach;
            echo '</select>';
        endif; ?>
        <div class="radio">
            <input id="radioASC" type="radio" name="event_date" value="ASC" <?php if ($_SESSION['event_filter_date'] == 'ASC') : echo 'checked'; endif; ?> /> 
            <label for="radioASC" class="radio-label">Les plus anciens</label>
        </div>
        <div class="radio">
            <input id="radioDESC" type="radio" name="event_date" value="DESC" <?php if ($_SESSION['event_filter_date'] == 'DESC') : echo 'checked'; endif; ?>  />
            <label for="radioDESC" class="radio-label">Les plus récent</label>
        </div>
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
