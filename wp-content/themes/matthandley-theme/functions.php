<?php

if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// register_options_page('Global');




function my_theme_add_editor_styles() { 
    add_editor_style( '/assets/css/editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );


// CREATE MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'main menu' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );

// ALLOW POST THUMBNAILS
add_theme_support( 'post-thumbnails' );


add_image_size( 'banner', 9999, 600, false );
add_image_size( 'gridimg', 500 , 500, true );

// POST TYPE - Projects
function custom_post_projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add new Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Projects' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
  
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array(
      'slug' => 'projects',
      'with_front' => true
    ),
    'hierarchical'       => true,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-welcome-add-page',
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
  
    /*'labels'        => $labels,
    'description'   => '',
    'public'        => true,
    'menu_position' => 8,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,*/
  );
  register_post_type( 'projects', $args ); 
}
add_action( 'init', 'custom_post_projects' );

function project_taxonomies() {
  $labels = array(
    'name'              => _x( 'Projects Tags', 'taxonomy general name' ),
    'singular_name'     => _x( 'Project Tag', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Project Tags' ),
    'all_items'         => __( 'Project Tags' ),
    'edit_item'         => __( 'Edit Project Tag' ), 
    'update_item'       => __( 'Update Project Tag' ),
    'add_new_item'      => __( 'Add New Project Tag' ),
    'new_item_name'     => __( 'New Project Tag' ),
    'menu_name'         => __( 'Tags' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
  );
  register_taxonomy( 'project_tags', 'projects', $args );
}
add_action( 'init', 'project_taxonomies', 0 );

function remove_menus() {
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );

?>