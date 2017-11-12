<?php 

/*****************
*** Hook functions
*****************/

// Add new post type
add_action('init', 'sla_init_types');

// Change the wp_title() action result
add_filter( 'wp_title', 'sla_page_title' );

// Specify that the theme supports the images
//add_theme_support('post-thumbnails');

/****************************************************************************************************/

/*******************************************
*** Register custom post types on INIT event
*******************************************/
    function sla_init_types()
    {
        register_post_type('event', [
            'label' => 'Activités',
            'labels' => [
                'all_items' => 'Tout les événments',
                'singular_name' => 'événement',
                'add_new' => 'Ajouter un événement',
            ],
            'description' => 'Type d\'article permettant d\'ajouter de nouveaux événements au site',
            'menu_position' => 20,
            'menu_icon' => 'dashicons-screenoptions',
            'public' => true,
        ]);

        register_post_type('artist', [
            'label' => 'Artistes',
            'labels' => [
                'all_items' => 'Tout les artistes',
                'singular_name' => 'artiste',
                'add_new' => 'Ajouter un artiste',
            ],
            'description' => 'Type d\'article permettant d\'ajouter de nouveaux artistes au site',
            'menu_position' => 20,
            'menu_icon' => 'dashicons-art',
            'public' => true,
        ]);

        register_post_type('news', [
            'label' => 'Actualités',
            'labels' => [
                'all_items' => 'Toutes les actualités',
                'singular_name' => 'actualité',
                'add_new' => 'Ajouter une actualités',
            ],
            'description' => 'Type d\'article permettant d\'ajouter de nouvelles actualités au site',
            'menu_position' => 20,
            'menu_icon' => 'dashicons-feedback',
            'public' => true,
        ]);
        // si plusieur type de post code de cette manière -> ['trip','event']
        register_taxonomy('type', ['news','event'], [
            'label' => 'Type d\'événements',
            'labels' => [
            'singular_name' => 'type',
            'edit_item' => 'Éditer le type d\'événements',
            'add_new_item' => 'Ajouter une nouveau type d\'événements',
            ],
            'description' => 'Type d\'événements proposé par saint-léon\'art',
            'public' => true,
            'hierarchical' => true,
        ]);

        register_taxonomy('kind', ['news','artist'], [
            'label' => 'Genre d\'artistes',
            'labels' => [
            'singular_name' => 'genre',
            'edit_item' => 'Éditer le genre d\'artistes',
            'add_new_item' => 'Ajouter une nouveau genre d\'artistes',
            ],
            'description' => 'Genre d\'artistes proposé par saint-léon\'art',
            'public' => true,
            'hierarchical' => true,
        ]);
    }

/****************************************************************************************************/

/**********************
*** Get theme asset URL
**********************/
    function get_dw_asset($r)
    {
    return get_template_directory_uri() . '/assets/' . trim($r, '/');   
    }
/*************************
*** Output theme asset URL
*************************/
    function dw_asset($r)
    {
    echo get_dw_asset($r);
    }

/****************************************************************************************************/

/**************************
*** Register navgation menu
**************************/
    register_nav_menu( 'header', 'Menu principal, affiché dans le header.' );

/******************
**** Get menu items
******************/
    function dw_get_nav_items($location)
    {
    $nav = [];
    //Récupérer les items du menu $location et les transfomrer en un objet contenant $link et $label.
    $id = dw_get_nav_id($location);
    if(!$id ) return $nav;
    $children = [];
    foreach( wp_get_nav_menu_items($id) as $object){
        // On crée un object
        $item = new stdClass();
        
        // On récupère les valeur qui nous interresse de la fonction wp_get_nav_menu_items($id) et on les met dans la variable $object
        $item->link = $object->url;
        $item->label = $object->title;
        $item->children = [];

        if($object->menu_item_parent){
        $item->parent = $object->menu_item_parent;
        $children[] = $item;
        }
        else{
        // On met notre variable dans le tableau
        $nav[ $object->ID ] = $item;
        }
    }
    foreach( $children as $item ){
        $nav[$item->parent]->children[] = $item;
    }
    return $nav;
    }

/****************************
*** Get menu ID from location
****************************/
    function dw_get_nav_id($location)
    {
    foreach( get_nav_menu_locations() as $navLocation => $id ){
        if( $navLocation == $location) return $id;
    }
    return false;
    }
/****************************************************************************************************/

/**********************
*** Customize the title
**********************/
    function sla_page_title( $title )
    {
    if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
        $title = 'Bienvenue' ;
    }
    $title .= ' - ' . get_bloginfo( 'name' );
    return $title;
    }

/****************************************************************************************************/

/************************************************
*** Get the url & alt attribute from image
************************************************/
    function get_sla_image_attribute($fieldName)
    {
        $image = get_sub_field( $fieldName );
        if( !empty($image) ){
            $url = $image['url'];
            $alt = $image['alt'];
            $width =  $image['width'];
            $height =  $image['height'];
        }
        return '<img src="' . $url . '" alt="' . $alt . '">';
    }

    function sla_image_attribute($function)
    {
        echo get_sla_image_attribute($function);
    }

/****************************************************************************************************/

/************************************************
*** Get the taxonomy value for current post
************************************************/

    function sla_get_taxonomies($postID, $taxonomyName) {
        $terms = wp_get_post_terms($postID, $taxonomyName);
        $termsArray = [];
        foreach ($terms as $term){
            array_push($termsArray, $term->name);
        }
        return $termsArray;
    }

    function sla_taxonomies($postID, $taxonomyName){
        $taxoArray = sla_get_taxonomies($postID, $taxonomyName);
        return $taxoArray;
    }

    /****************************************************************************************************/

/***************
*** Get the slug
***************/
function sla_get_the_slug()
{
  global $post;
  return $post->post_name;
}

function sla_the_slug()
{
  echo sla_get_the_slug();
}