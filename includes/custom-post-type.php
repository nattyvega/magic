<?php

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                => 'Courses',
        'singular_name'       => 'Post Type',
        'menu_name'           => 'Courses',
        'parent_item_colon'   => 'Parent Lesson:',
        'all_items'           => 'All Lessons',
        'view_item'           => 'View Lesson',
        'add_new_item'        => 'Add New Lesson',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Lesson',
        'update_item'         => 'Update Lesson',
        'search_items'        => 'Search Lesson',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $rewrite = array(
        'slug'                => 'course',
        'with_front'          => true,
        'pages'               => true,
        'feeds'               => true,
    );
    $args = array(
        'label'               => 'ecourse',
        'description'         => 'Lessons for various e-courses',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'comments', ),
        'taxonomies'          => array( 'course-topics' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => $rewrite,
        'capability_type'     => 'post',
    );
    register_post_type( 'ecourse', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );


// Register Custom Taxonomy
function custom_taxonomy() {

    $labels = array(
        'name'                       => 'Topics',
        'singular_name'              => 'Topic',
        'menu_name'                  => 'Topics',
        'all_items'                  => 'All Topics',
        'parent_item'                => 'Parent Topic',
        'parent_item_colon'          => 'Parent Topic:',
        'new_item_name'              => 'New Topic Name',
        'add_new_item'               => 'Add New Topic',
        'edit_item'                  => 'Edit Topic',
        'update_item'                => 'Update Topic',
        'separate_items_with_commas' => 'Separate topics with commas',
        'search_items'               => 'Search Topics',
        'add_or_remove_items'        => 'Add or remove topics',
        'choose_from_most_used'      => 'Choose from the most used topics',
        'not_found'                  => 'Not Found',
    );
    $rewrite = array(
        'slug'                       => 'course-topic',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'course-topics', array( 'ecourse' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy', 0 );

?>