<?php 
/* REGISTRERAR STÖD FÖR TEMAN OCH MENY. ADD_ACTION LÄGGER TILL EN TILL MENY */
add_theme_support('post-thumbnails');
add_theme_support('menus');

function register_my_menu(){
    register_nav_menu('huvudmeny', 'Huvudmeny');
        register_nav_menu('meny2', 'Meny2');

}

add_action('after_setup_theme', 'register_my_menu');

/* FÅR CSS OCH JAVASCRIPT FILERNA ATT FUNGERA */
function qg_enqueue() {
    wp_enqueue_script('banan', get_template_directory_uri().'/js/script.js', '', '', true);
    wp_enqueue_script('banan2', get_template_directory_uri().'/js/jquery.js', '', '', '');
    wp_enqueue_script('banan3', get_template_directory_uri().'/js/owl.carousel.js', '', '', '');
}
add_action('wp_enqueue_scripts', 'qg_enqueue');

function headersida() {
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('Header');
	
}
}

add_action('acf/init', 'headersida');

/**
* Register Movie Type
*
* @author Ren Ventura <EngageWP.com> - with some adjustments by Paal Joachim
* @link http://www.engagewp.com/nested-loops-custom-wordpress-queries
*/

add_action( 'init', 'rv_movie_cpt' );
function rv_movie_cpt() {

   $labels = array(
       'name' => _x( 'Movie', 'post type general name', 'engwp' ),
       'singular_name' => _x( 'Movie', 'post type singular name', 'engwp' ),
       'menu_name' => _x( 'Movies', 'admin menu', 'engwp' ),
       'name_admin_bar' => _x( 'Movie', 'add new on admin bar', 'engwp' ),
       'add_new' => _x( 'Add New', 'Movie', 'engwp' ),
       'add_new_item' => __( 'Add New Movie', 'engwp' ),
       'new_item' => __( 'New Movie', 'engwp' ),
       'edit_item' => __( 'Edit Movie', 'engwp' ),
       'view_item' => __( 'View Movie', 'engwp' ),
       'all_items' => __( 'All Movies', 'engwp' ),
       'search_items' => __( 'Search Movies', 'engwp' ),
       'parent_item_colon' => __( 'Parent Movie:', 'engwp' ),
       'not_found' => __( 'No Movies found.', 'engwp' ),
       'not_found_in_trash' => __( 'No Movies found in Trash.', 'engwp' )
  );

  $args = array(
      'description' => __( 'Movie', 'engwp' ),
      'labels' => $labels,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions' ), 
   // comments was removed to disable comments.
      'hierarchical' => false,
      'public' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'filmer' ), /* changed from movies to filmer */
      'show_ui' => true,
      'menu_icon' => 'dashicons-format-video',
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
   // 'menu_position' => 5,
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'show_in_rest' => 'true',
 );

  register_post_type( 'movie', $args );

}

add_action( 'init', 'rv_create_movie_taxonomies' );
function rv_create_movie_taxonomies() {

   // Add new taxonomy, make it non-hierarchical (like tags)
   $labels = array(
      'name' => _x( 'Year Made', 'taxonomy general name' ),
      'singular_name' => _x( 'Year', 'taxonomy singular name' ),
      'search_items' => __( 'Search Years' ),
      'all_items' => __( 'All Years' ),
      'parent_item' => __( 'Parent Year' ),
      'parent_item_colon' => __( 'Parent Year:' ),
      'edit_item' => __( 'Edit Year' ),
      'update_item' => __( 'Update Year' ),
      'add_new_item' => __( 'Add New Year' ),
      'new_item_name' => __( 'New Year Name' ),
      'separate_items_with_commas' => __( 'Separate Years with commas' ),
      'add_or_remove_items' => __( 'Add or remove Years' ),
      'choose_from_most_used' => __( 'Choose from the most used Years' ),
      'not_found' => __( 'No Years found.' ),
      'menu_name' => __( 'Year Made' ),
  );

  $args = array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'update_count_callback' => '_update_post_term_count',
   // 'query_var' => true,
   // 'show_in_nav_menus' => false,
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => true,
  );

  $years = array( 'rewrite' => array( 'slug' => 'movie-year' ) );
  $movie_args = array_merge( $args, $years );

  register_taxonomy( 'movie_years', 'movie', $movie_args );

}


//* Create Movie Type custom taxonomy (category)
add_action( 'init', 'custom_type_taxonomy' );
function custom_type_taxonomy() {

   register_taxonomy( 'movie-type', 'movie',
     array(
        'labels' => array(
        'name' => _x( 'Movie Category', 'taxonomy general name', 'text_domain' ),
        'add_new_item' => __( 'Add New Movie Category', 'text_domain' ),
        'new_item_name' => __( 'New Movie Type', 'text_domain' ),
     ),
       'exclude_from_search' => true,
       'has_archive' => true,
       'hierarchical' => true,
       'rewrite' => array( 'slug' => 'movie-type', 'with_front' => false ),
       'show_ui' => true,
       'show_tagcloud' => false,
   )
);

}