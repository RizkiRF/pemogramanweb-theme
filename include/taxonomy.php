<?php 
add_action( 'init', 'register_taxonomy_types' );

function register_taxonomy_types() {

    $labels = array( 
        'name' => _x( 'Types', 'types' ),
        'singular_name' => _x( 'Type', 'types' ),
        'search_items' => _x( 'Search Types', 'types' ),
        'popular_items' => _x( 'Popular Types', 'types' ),
        'all_items' => _x( 'All Types', 'types' ),
        'parent_item' => _x( 'Parent Type', 'types' ),
        'parent_item_colon' => _x( 'Parent Type:', 'types' ),
        'edit_item' => _x( 'Edit Type', 'types' ),
        'update_item' => _x( 'Update Type', 'types' ),
        'add_new_item' => _x( 'Add New Type', 'types' ),
        'new_item_name' => _x( 'New Type', 'types' ),
        'separate_items_with_commas' => _x( 'Separate types with commas', 'types' ),
        'add_or_remove_items' => _x( 'Add or remove Types', 'types' ),
        'choose_from_most_used' => _x( 'Choose from most used Types', 'types' ),
        'menu_name' => _x( 'Types', 'types' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'types', array('files'), $args );
}
 ?>