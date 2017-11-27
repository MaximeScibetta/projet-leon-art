<?php
/*
Template Name: Page all artiss    
 */
get_header();
?>
<?php 
    // Set custom paged query.
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    // artists query
    $query = new WP_Query();
    $query->query([
        'post_type' => 'artist',
        'paged' => $page,
        'posts_per_page' => 1,
    ]);
    // pagination query
    $paginateArgs = array(
        'format' => '?page=%#%',
        'current' => $page, // Reference the custom paged query we initially set.
        'total' => $query->max_num_pages // Max pages from our custom query.
    );
?>
<section class="introduction litle" style="background-image: url(<?= dw_asset('images/all-expo.jpg'); ?>);">
    <h2 class="branding" id="branding">Artistes <span>SaintLeon'Art</span></h2>
</section>

<section class="artist all">
    <h2>Nos artistes</h2>
    <div class="all__navigation">
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
    </div>
<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	<?php
        if ($terms = get_terms('kind', 'orderby=name')) : // to make it simple I use default categories
            echo '<select name="categoryfilter"><option>Voir tous les artistes</option>';
            foreach ($terms as $term) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
            endforeach;
            echo '</select>';
        endif;
        ?>
	<label>
		<input type="radio" name="date" value="ASC" /> Date: Ascending
	</label>
	<label>
		<input type="radio" name="date" value="DESC" checked /> Date: Descending
    </label>
    <input type="submit" id="myfilter" name="myfilter" value="Apply filter">
	<input type="hidden" name="action" value="myfilter">
</form>
<?php if ($query->have_posts()) : ?>
    <div class="artist__container">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php $fields = get_fields();  ?>
            <a href="<?= get_the_permalink() ;?>" class="item">
                <img src="<?= $fields['artiste_profil'][url]; ?>" alt="" width="400" height="225">
                <div class="item__info">
                    <h3 class="">
                <?= $fields['artist_surname']; ?>
                        <span><?= $fields['artist_name']; ?></span>
                    </h3>
                    <p class=""><?= $fields['artist_job']; ?></p>
                </div>
            </a>
        <?php endwhile; ?>
        <div class="pagination p12">
            <?php echo paginate_links($paginateArgs); ?>        
        </div>
    </div>
<?php endif; ?>
    <!-- <div class="pagination p12">
      <ul>
        <a href="#"><li>Précédent</li></a>
        <a href="#"><li>1</li></a>
        <a href="#"><li>2</li></a>
        <a href="#"><li>3</li></a>
        <a href="#"><li>4</li></a>
        <a href="#"><li>5</li></a>
        <a class="is-active" href="#"><li>6</li></a>
        <a href="#"><li>Suivant</li></a>
      </ul>
    </div> -->
</section>
<?php get_footer(); ?>
