<nav class="site-nav">
    <h2 class="u-hidden-visually">Menu de navigation</h2>
    <ul class="menu">
        <li class="menu__item sla">SaintLeon'Art</li>
    <?php foreach(dw_get_nav_items('header') as $item):?>
        <li class="menu__item">
            <a href="<?php echo $item->link;?>"> <?php echo $item->label;?> </a>
        </li>  
    <?php endforeach;?>
        <li class="menu__item">
            <button class="search-icon">
                <span class="circle"></span>
                <span class="handle"></span>
            </button>
        </li>
    </ul>
</nav>