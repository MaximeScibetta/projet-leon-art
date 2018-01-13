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
    register_nav_menu('all__navigation', 'Menu secondaire, affiché dans les pages all.');
    register_nav_menu('footer', 'Menu footer, affiché dans le footer.');

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
        return '<img itemprop="image" src="' . $url . '" alt="' . $alt . '">';
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
            $base = trailingslashit(home_url('/')) . "?{$wp_rewrite->pagination_base}=%#%&page_id=233";
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
                $base = trailingslashit(home_url('/')) . "?{$wp_rewrite->pagination_base}=%#%&page_id=282";
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
    return trim(substr($excerpt, 0, $length)) . '&hellip;';
    }
    /**
    *   Output a customizable excerpt
    */
    function ms_the_news_excerpt($length = null)
    {
    echo ms_get_the_news_excerpt($length);
    }
/****************************************************************************************************/
/**
 *   RETURN a customizable creation date 
 */
    function ms_get_the_creation_date()
    {
        global $post;
        $dateSrc = $post->post_date;
        $dateTime = new \Datetime($dateSrc);
        $date = $dateTime->format('d F');
        $dateArray = explode( ' ', $date);
        $dateArray[1] = substr($dateArray[1], 0, 5);     
        $date = implode( ' ', $dateArray );
        return $date;
    }

    function ms_the_creation_date()
        {
            echo ms_get_the_creation_date();
        }

    function ms_get_complete_date()
    {
        global $post;
        $dateSrc = $post->post_date;
        $dateTime = new \Datetime($dateSrc);
        $date = $dateTime->format('d F Y');
        return $date;
    }

    function ms_complete_date()
    {
        echo ms_get_complete_date();
    }
/****************************************************************************************************/
/**
 *   RETURN a customizable date for event
 */
    function ms_get_the_event_date()
    {
        $fields = get_fields();
        $date = $fields['event_date']; 
        $dateArray = explode(' ', $date);
        $dateArray[1] = substr($dateArray[1], 0, 5);
        $dataArray = array_splice($dateArray, 2);
        $date = implode(' ', $dateArray);
        return $date;
    }

    function ms_the_event_date()
    {
        echo ms_get_the_event_date();
    }
/****************************************************************************************************/
/**
 *   RETURN a date, size, title, extension, url for event
 */
function ms_get_the_data_file()
{
    // Get title, url, size
    $file = get_sub_field('file');
    $id = $file['id'];
    $title = get_the_title($id);
    $url = wp_get_attachment_url($id);
    $myfile = filesize(get_attached_file($id));
    $size = size_format($myfile, 2);

    // Get date
    $dateSrc = $file['date'];
    $dateTime = new \Datetime($dateSrc);
    $date = $dateTime->format('d F');
    $dateArray = explode(' ', $date);
    $dateArray[1] = substr($dateArray[1], 0, 3);
    $date = implode(' ', $dateArray);

    // Get extension
    $urlArray = explode('.', $url);
    $urlArrayLength = count($urlArray);
    $format = $urlArray[$urlArrayLength-1];
    
    // Create html template
    $tempalte = 
    '<div class="container__item">
        <time datetime="">'.$date.'.</time>
        <p class="title">'.$title.'</p>
        <p class="size">
            '.$size.'
        </p>
        <p class="format">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 550.801 550.801" style="enable-background:new 0 0 550.801 550.801;">
                <g>
                    <g>
                        <path d="M267.342,414.698c-6.613,0-10.884,0.585-13.413,1.165v85.72c2.534,0.586,6.616,0.586,10.304,0.586
                            c26.818,0.189,44.315-14.576,44.315-45.874C308.738,429.079,292.803,414.698,267.342,414.698z"/>
                        <path d="M152.837,414.313c-6.022,0-10.104,0.58-12.248,1.16v38.686c2.531,0.58,5.643,0.78,9.903,0.78
                            c15.757,0,25.471-7.973,25.471-21.384C175.964,421.506,167.601,414.313,152.837,414.313z"/>
                        <path d="M475.095,131.992c-0.032-2.526-0.833-5.021-2.568-6.993L366.324,3.694c-0.021-0.034-0.062-0.045-0.084-0.076
                            c-0.633-0.707-1.36-1.29-2.141-1.804c-0.232-0.15-0.475-0.285-0.718-0.422c-0.675-0.366-1.382-0.67-2.13-0.892
                            c-0.19-0.058-0.38-0.14-0.58-0.192C359.87,0.114,359.037,0,358.203,0H97.2C85.292,0,75.6,9.693,75.6,21.601v507.6
                            c0,11.913,9.692,21.601,21.6,21.601H453.6c11.908,0,21.601-9.688,21.601-21.601V133.202
                            C475.2,132.796,475.137,132.398,475.095,131.992z M193.261,463.873c-10.104,9.523-25.072,13.806-42.569,13.806
                            c-3.882,0-7.391-0.2-10.102-0.58v46.839h-29.35V394.675c9.131-1.55,21.967-2.721,40.047-2.721
                            c18.267,0,31.292,3.501,40.036,10.494c8.363,6.612,13.985,17.497,13.985,30.322C205.308,445.605,201.042,456.49,193.261,463.873z
                            M318.252,508.392c-13.785,11.464-34.778,16.906-60.428,16.906c-15.359,0-26.238-0.97-33.637-1.94V394.675
                            c10.887-1.74,25.083-2.721,40.046-2.721c24.867,0,41.004,4.472,53.645,13.995c13.61,10.109,22.164,26.241,22.164,49.37
                            C340.031,480.4,330.897,497.697,318.252,508.392z M439.572,417.225h-50.351v29.932h47.039v24.11h-47.039v52.671H359.49V392.935
                            h80.082V417.225z M97.2,366.752V21.601h250.203v110.515c0,5.961,4.831,10.8,10.8,10.8H453.6l0.011,223.836H97.2z"/>
                        <path d="M386.205,232.135c-0.633-0.059-15.852-1.448-39.213-1.448c-7.319,0-14.691,0.143-21.969,0.417
                            c-46.133-34.62-83.919-69.267-104.148-88.684c0.369-2.138,0.623-3.828,0.741-5.126c2.668-28.165-0.298-47.179-8.786-56.515
                            c-5.558-6.101-13.721-8.131-22.233-5.806c-5.286,1.385-15.071,6.513-18.204,16.952c-3.459,11.536,2.101,25.537,16.708,41.773
                            c0.232,0.246,5.189,5.44,14.196,14.241c-5.854,27.913-21.178,88.148-28.613,117.073c-17.463,9.331-32.013,20.571-43.277,33.465
                            l-0.738,0.844l-0.477,1.013c-1.16,2.437-6.705,15.087-2.542,25.249c1.901,4.62,5.463,7.995,10.302,9.767l1.297,0.349
                            c0,0,1.17,0.253,3.227,0.253c9.01,0,31.25-4.735,43.179-48.695l2.89-11.138c41.639-20.239,93.688-26.768,131.415-28.587
                            c19.406,14.391,38.717,27.611,57.428,39.318l0.611,0.354c0.907,0.464,9.112,4.515,18.721,4.524l0,0
                            c13.732,0,23.762-8.427,27.496-23.113l0.189-1.004c1.044-8.393-1.065-15.958-6.096-21.872
                            C407.711,233.281,387.978,232.195,386.205,232.135z M142.812,319.744c-0.084-0.1-0.124-0.194-0.166-0.3
                            c-0.896-2.157,0.179-7.389,1.761-11.222c6.792-7.594,14.945-14.565,24.353-20.841
                            C159.598,317.039,146.274,319.603,142.812,319.744z M200.984,122.695L200.984,122.695c-14.07-15.662-13.859-23.427-13.102-26.041
                            c1.242-4.369,6.848-6.02,6.896-6.035c2.824-0.768,4.538-0.617,6.064,1.058c3.451,3.791,6.415,15.232,5.244,36.218
                            C202.764,124.557,200.984,122.695,200.984,122.695z M193.714,256.068l0.243-0.928l-0.032,0.011
                            c7.045-27.593,17.205-67.996,23.047-93.949l0.211,0.201l0.021-0.124c18.9,17.798,47.88,43.831,82.579,70.907l-0.39,0.016
                            l0.574,0.433C267.279,235.396,228.237,241.84,193.714,256.068z M408.386,265.12c-2.489,9.146-7.277,10.396-11.665,10.396l0,0
                            c-5.094,0-9.998-2.12-11.116-2.632c-12.741-7.986-25.776-16.688-38.929-25.998c0.105,0,0.2,0,0.316,0
                            c22.549,0,37.568,1.369,38.158,1.411c3.766,0.14,15.684,1.9,20.82,7.938C407.984,258.602,408.755,261.431,408.386,265.12z"/>
                    </g>
                </g>
            </svg>
            ' . $format . '
        </p>
        <a href="'.$url.'" class="download">
            télécharger'. $title.'
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489.3 489.3" style="enable-background:new 0 0 489.3 489.3;">
                <g>
                    <g>
                        <path d="M244.65,0c-6.8,0-12.2,5.5-12.2,12.3V342l-55.9-55.9c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l76.8,76.8
                            c2.4,2.4,5.5,3.6,8.7,3.6c3.1,0,6.3-1.2,8.7-3.6l76.8-76.8c4.8-4.8,4.8-12.5,0-17.3s-12.5-4.8-17.3,0l-55.9,55.9V12.3
                            C256.95,5.5,251.45,0,244.65,0z"/>
                        <path d="M476.25,464.7H13.05c-6.8,0-12.3,5.5-12.3,12.3s5.5,12.3,12.3,12.3h463.2c6.8,0,12.3-5.5,12.3-12.3
                            S483.05,464.7,476.25,464.7z"/>
                    </g>
                </g>
            </svg>
        </a>
    </div> ';
    return $tempalte;
}

function ms_the_data_file()
{
    echo ms_get_the_data_file();
}
/****************************************************************************************************/
/**
 *   Contact form 7, delete <p> adding data-text attr on submit input
 */
// Delete <p>
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// Add attr
// add_filter('wpcf7_form_elements', 'imp_wpcf7_form_elements');
// function imp_wpcf7_form_elements($content)
// {
//     $str_pos = strpos($content, 'type="submit"');
//     $content = substr_replace($content, ' data-text="Envoyer" ', $str_pos, 0);
//     return $content;
// }
//Add class to span error
function cf7_add_custom_class($error)
{
    $error = str_replace("class=\"", "class=\"left ", $error);
    return $error;
}
add_filter('wpcf7_validation_error', 'cf7_add_custom_class');