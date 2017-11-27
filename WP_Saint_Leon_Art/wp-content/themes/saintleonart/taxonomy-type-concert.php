<?php
/*
Template Name: Page test    
 */
get_header();
?>
<?php 
$concerts = new WP_Query();
$concerts->query([
    'post_type' => 'page',
    'tax_query' => [
        [
            'taxonomy' => 'type',
            //'field' => 'slug',
            'terms' => 'concert',
        ],
    ],
]);; ?>
<section>
    
</section>