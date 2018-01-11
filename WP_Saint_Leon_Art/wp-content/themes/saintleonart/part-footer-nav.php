
<ul class="secondMenu">
    <?php foreach (dw_get_nav_items('header') as $item) : ?>
        <li class="secondMenu__item"> 
            <a href="<?php echo $item->link; ?>"> <?php echo $item->label; ?> </a>
        </li>
    <?php endforeach; ?>
</ul>