<?php 
//  insertion CSS JS
add_action('wp_enqueue_scripts', 'insert_css');
function insert_css() {
    // On ajoute le css general du theme
    wp_enqueue_style('style', get_stylesheet_uri());

    // On ajoute le jQuery au thème
    wp_register_script('jquery2','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    wp_enqueue_script('jquery2');

    // On ajoute font awesome
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
    wp_enqueue_style('font');

    /*
    wp_register_script('scroll','https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
    wp_enqueue_script('scroll');
    */

}

// ajouter bloc image à la une en Back Office
add_theme_support( 'post-thumbnails' );


//insertion Sidebar Back Office
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));


// ajout de nouveau menu
add_theme_support('menus');
register_nav_menus(array(
    'menu-principal' => 'Navigation principale',
    'menu-reseaux' => 'Navigation resaux sociaux',
    'menu-footer' => 'Navigation footer'
));

// nouvelle taille d'image
function new_size(){

    // L'image sera tronquée exactement à la dimension indiquée
    add_image_size( 'propertie_size', 1300, 700, true ); 
    add_image_size( 'card_size', 700, 300, true ); 
    add_image_size( 'single_size', 600, 350, true ); 
}
add_action( 'after_setup_theme', 'new_size' );

// création custom post type
function create_post_type() { 
    register_post_type('proprietes',
        array(
            'label'                 => __('Nos propriétés'),
            'singular_label'        => __('Nos propriétés'),
            'add_new_item'          => __( 'Ajouter une propriété' ),
            'edit_item'             => __( 'Modifier une propriété' ),
            'new_item'              => __( 'Nouvelle propriété' ),
            'view_item'             => __( 'Voir la propriété' ),
            'search_items'          => __( 'Rechercher une propriété' ),
            'not_found'             =>  __( 'Aucune propriété trouvée' ),
            'not_found_in_trash'    => __( 'Aucune propriété trouvée' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-images-alt',
            'taxonomies'            => array('ville'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'realisation', 'with_front' => true)
        )
    );
}
add_action( 'init', 'create_post_type' );

function themes_taxonomy() {
    register_taxonomy(
        'ville',
        'proprietes',
        array(
            'label' => 'Ville',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'ville',
                'with_front' => true
            ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'themes_taxonomy');

// page option ACF
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
	));
}