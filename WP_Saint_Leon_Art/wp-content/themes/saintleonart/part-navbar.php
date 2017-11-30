<nav class="site-nav">
    <h2 class="u-hidden-visually">Menu de navigation</h2>
    <ul class="menu">
        <li class="menu__item sla">SaintLeon'Art</li>
    <?php foreach(dw_get_nav_items('header') as $item):?>
        <li class="menu__item <?php if( $item->link === get_permalink() ) :?>active<?php endif; ?>">
            <a href="<?php echo $item->link;?>"> <?php echo $item->label;?> </a>
        </li>  
    <?php endforeach;?>
        <li class="menu__item">
            <button class="search-icon">
                <span class="circle"></span>
                <span class="handle"></span>
            </button>
            <form role="search" method="get" action="/">
                <label class="u-hidden-visually" for="search">Recherche</label>
                <input type="search" id="search" class="search-field" placeholder="Recherche…" value="party" name="s">
                <input type="submit" class="search-submit" value="Rechercher">
            </form>
    </ul>
</nav>