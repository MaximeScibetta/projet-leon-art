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
    function register_my_session()
    {
        if (!session_id()) {
            session_start();
        }
    }

    add_action('init', 'register_my_session');

function wpdocs_after_setup_theme()
{
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');
/****************************************************************************************************/

/*******************************************
*** Register custom post types on INIT event
*******************************************/
    function sla_init_types()
    {
        register_post_type('event', [
            'label' => 'Événements',
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

        register_taxonomy('subject', 'news', [
            'label' => 'Sujet de l\'actualité',
            'labels' => [
                'singular_name' => 'subject',
                'edit_item' => 'Éditer le sujet de l\'actualité',
                'add_new_item' => 'Ajouter une nouveau Sujet d\'actualité',
            ],
            'description' => 'Sujet de l\'actualité proposé par saint-léon\'art',
            'public' => true,
            'hierarchical' => true,
        ]);

        // si plusieur type de post code de cette manière -> ['trip','event']
        register_taxonomy('type', 'event', [
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

        register_taxonomy('kind', 'artist', [
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

/****************************************************************************************************/

/**
 * AJAX filter artist posts by taxonomy term
 */
    function ms_filter_function()
    {
        // Creation of my session
            if (isset($_POST['categoryfilter'])) {
                $_SESSION['artist_filter'] = $_POST['categoryfilter'];
            }
            if (isset($_POST['date'])) {
                $_SESSION['artist_filter_date'] = $_POST['date'];
            }
        // Set custom artists query.
            $args = [
                'orderby' => 'date',
                'order' => $_SESSION['artist_filter_date'],
                'paged' => ($_SESSION['current_page'] > $query->max_num_pages) ? 1 : $_SESSION['current_page'],
                'posts_per_page' => 1,
                'tax_query' => [
                    [
                        'taxonomy' => 'kind',
                        'field' => 'id',
                        'terms' => $_SESSION['artist_filter'],
                    ]
                ]
            ];

        // Init query
            $query = new WP_Query($args);
        
            
        // Set custom pagination query.
            global $wp_rewrite;
            $base = trailingslashit('http://saintleonart.app/') . "?{$wp_rewrite->pagination_base}=%#%&page_id=236";
            $paginateArgs = array(
                'format' => '?page/%#%/',
                'current' => ($_SESSION['current_page'] > $query->max_num_pages) ? 1 : $_SESSION['current_page'], // Reference the custom paged query we initially set.
                'total' => $query->max_num_pages, // Max pages from our custom query.
                'base' => $base,
            );
            
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            $fields = get_fields();
            include('part/all-artist.php');
        endwhile;
        echo '<div class="pagination p12">';
        echo paginate_links($paginateArgs);
        echo '</div>';
        wp_reset_postdata();
        else :
            echo 'Aucun artistes n\'a été trouvé';
        endif;

        die();
    }
        add_action('wp_ajax_artistfilter', 'ms_filter_function');
        add_action('wp_ajax_nopriv_artistfilter', 'ms_filter_function');

/****************************************************************************************************/

/**
 * AJAX filter event posts by taxonomy term
 */
    function ms_event_filter_function()
    {
        // Creation of my session
            if (isset($_POST['event_categoryfilter'])) {
                $_SESSION['event_filter'] = $_POST['event_categoryfilter'];
            }
            if (isset($_POST['event_date'])) {
                $_SESSION['event_filter_date'] = $_POST['event_date'];
            }
        // Set custom artists query.
            $args = [
                'orderby' => 'date',
                'order' => $_SESSION['event_filter_date'],
                'paged' => ($_SESSION['event_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['event_current_page'],
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
        
            
        // Set custom pagination query.
            global $wp_rewrite;
            $base = trailingslashit('http://saintleonart.app/') . "?{$wp_rewrite->pagination_base}=%#%&page_id=233";
            $paginateArgs = array(
                'format' => '?page/%#%/',
                'current' => ($_SESSION['event_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['event_current_page'], // Reference the custom paged query we initially set.
                'total' => $query->max_num_pages, // Max pages from our custom query.
                'base' => $base,
            );
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            $fields = get_fields();
            include('part/all-event.php');
        endwhile;
        echo '<div class="pagination p12">';
            echo paginate_links($paginateArgs);
        echo '</div>';
        wp_reset_postdata();
        else :
            echo 'Aucun event n\'a été trouvé';
        endif;

        die();
    }
    add_action('wp_ajax_eventfilter', 'ms_event_filter_function');
    add_action('wp_ajax_nopriv_eventfilter', 'ms_event_filter_function');
/****************************************************************************************************/

/**
 * AJAX filter news posts by taxonomy term
 */
    function news_filter_function()
    {
            // Creation of my session
                if (isset($_POST['news_categoryfilter'])) {
                    $_SESSION['news_filter'] = $_POST['news_categoryfilter'];
                }
                if (isset($_POST['news_date'])) {
                    $_SESSION['news_filter_date'] = $_POST['news_date'];
                }
            // Set custom artists query.
                $args = [
                    'orderby' => 'date',
                    'order' => $_SESSION['news_filter_date'],
                    'paged' => ($_SESSION['news_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['news_current_page'],
                    'posts_per_page' => 1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'subject',
                            'field' => 'id',
                            'terms' => $_SESSION['news_filter'],
                        ]
                    ]
                ];

            // Init query
                $query = new WP_Query($args);
            
                
            // Set custom pagination query.
                global $wp_rewrite;
                $base = trailingslashit('http://saintleonart.app/') . "?{$wp_rewrite->pagination_base}=%#%&page_id=282";
                $paginateArgs = array(
                    'format' => '?page/%#%/',
                    'current' => ($_SESSION['news_current_page'] > $query->max_num_pages) ? 1 : $_SESSION['news_current_page'], // Reference the custom paged query we initially set.
                    'total' => $query->max_num_pages, // Max pages from our custom query.
                    'base' => $base,
                );

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        $fields = get_fields();
        include('part/all-news.php');
        endwhile;
        echo '<div class="pagination p12">';
        echo paginate_links($paginateArgs);
        echo '</div>';
        wp_reset_postdata();
        else :
            echo 'Aucun event n\'a été trouvé';
        endif;

        die();
    }
    add_action('wp_ajax_newsfilter', 'news_filter_function');
    add_action('wp_ajax_nopriv_newsfilter', 'news_filter_function');

/****************************************************************************************************/
/**
*   RETURN a customizable excerpt for news
*/
function ms_get_the_news_excerpt($length = null)
{
    $fields = get_fields();
  $excerpt = $fields['actu_content']; 
  if(is_null($length) || strlen($excerpt) <= $lenght) return $excerpt;
    echo trim(substr($excerpt, 0, $length)) . '&hellip;';
}
/**
*   Output a customizable excerpt
*/
function ms_the_news_excerpt($length = null)
{
  echo ms_get_the_news_excerpt($length);
}