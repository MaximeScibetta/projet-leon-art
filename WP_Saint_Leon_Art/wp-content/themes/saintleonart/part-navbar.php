<nav class="site-nav">
    <h2 class="u-hidden-visually">Menu de navigation</h2>
    <ul class="menu">
        <li class="menu__item sla">SaintLeon'Art</li>
    <?php foreach(dw_get_nav_items('header') as $item):?>
        <li class="menu__item<?php if( $item->link === get_permalink() ) :?> active<?php endif; ?>">
            <a title="Vers la page <?= $item->label; ?>" href="<?php echo $item->link;?>"> <?php echo $item->label;?> </a>
        </li>  
    <?php endforeach;?>
        <li class="menu__item">
            <a title="Vers la page recherche" href="<?= site_url('/');?>?s">
                <button class="search-icon">
                    <span class="circle"></span>
                    <span class="handle"></span>
                </button>
            </a>
        </li>
    </ul>
</nav>