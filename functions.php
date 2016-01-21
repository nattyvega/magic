<?php
/*
 * Clean up the WordPress header
 */
function head_cleanup() {
    remove_action('wp_head', 'feed_links_extra', 3); // Category Feeds
    remove_action('wp_head', 'rsd_link'); // EditURI link
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
    remove_action('wp_head', 'index_rel_link'); // index link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // previous link
    remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Links for Adjacent Posts
    remove_action('wp_head', 'wp_generator'); // WP version
}

add_action('init', 'head_cleanup');

/*
 * Add support for thumbnails & nav menus
 */
function theme_features_support() {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 200, 150, true );
	add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menus(
        array(
            'main_nav' => 'Main Menu',
        )
    );
}

add_action('after_setup_theme', 'theme_features_support');

/*
 * Add sidebars
 */
function register_theme_sidebars() {
    // Main sidebar start
    register_sidebar(array(
        'id'            => 'main_sidebar',
        'name'          => 'Sidebar',
        'description'   => 'The sidebar on the right-hand side.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
    // end main sidebar

    // Footer widget - Column #1
    register_sidebar(array(
        'id'            => 'footer_area_1',
        'name'          => 'Footer Widget #1',
        'description'   => 'The first column in the widget area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    // Footer widget - Column #2
    register_sidebar(array(
        'id'            => 'footer_area_2',
        'name'          => 'Footer Widget #2',
        'description'   => 'The second column in the widget area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    // Footer widget - Column #3
    register_sidebar(array(
        'id'            => 'footer_area_3',
        'name'          => 'Footer Widget #3',
        'description'   => 'The third column in the widget area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'register_theme_sidebars');

/*
 * Navigation bar
 */
function main_navigation() {
    wp_nav_menu(
        array(
            'menu'           => 'main_nav',
            'menu_class'     => 'navigation',
            'theme_location' => 'main_nav',
            'container'      => 'nav',
            'container_id'   => 'navigation',
            'depth'          => '2'
        )
    );
}

/*
 * Quick reply code for comments
 */
function comment_reply_js() {
    if (!is_admin()) {
        if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

/* 
 * Grid Display of Post Thumbnails
 */








add_action('wp_print_scripts', 'comment_reply_js');

?>