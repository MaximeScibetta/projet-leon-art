<nav class="site-nav">
    <h2 class="u-hidden-visually">Menu de navigation</h2>
    <ul class="menu">
    <?php foreach(dw_get_nav_items('header') as $item):?>
        <li class="menu__item">
            <a href="<?php echo $item->link;?>"> <?php echo $item->label;?> </a>
        </li>  
    <?php endforeach;?>
    </ul>
</nav>