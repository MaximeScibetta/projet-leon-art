<nav class="site-nav">
    <h2 class="u-hidden-visually">Menu de navigation</h2>
    <ul class="menu">
        <li class="menu__item sla">SaintLeon'Art</li>
    <?php foreach(dw_get_nav_items('header') as $item):?>
        <li class="menu__item<?php if( $item->link === get_permalink() ) :?> active<?php endif; ?>">
            <a href="<?php echo $item->link;?>"> <?php echo $item->label;?> </a>
        </li>  
    <?php endforeach;?>
        <li class="menu__item">
            <a href="<?= site_url('/');?>?s">
                <button class="search-icon">
                    <span class="circle"></span>
                    <span class="handle"></span>
                </button>
            </a>
            <!-- <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <label class="u-hidden-visually" for="search">Recherche</label>
                <input type="search" id="search" class="search-field" placeholder="Recherche…" value="<?php echo get_search_query() ?>" name="search">
                <input type="submit" class="search-submit" value="Rechercher">
            </form>  -->
        </li>
    </ul>
</nav>