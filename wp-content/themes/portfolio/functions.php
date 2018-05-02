<?php
add_theme_support( 'post-thumbnails' );

function project_post_type()
{
    $labels = array(
        'name' => 'Project',
        'singluar' => 'Project',
        'add_new' => 'Add Project',
        'all_items' => 'All Projects',
        'edit_item' => 'Edit Project',
        'add_new_item' => 'Add Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_item' => 'Search Project'
    );

    $args = array (
        'labels' => $labels,
        'public' => true,
				'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'publicly_queryable' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'supports'     => array('thumbnail', 'title', 'editor', 'excerpt', 'author'),
        'taxonomies' => array('category')
    );
    register_post_type('projects', $args);
}
add_action('init', 'project_post_type');


//Add custom menu support.
function register_my_menus() {
  register_nav_menus(
    array(
		'main-menu' => __( 'Main Navigation' ),
		'sidebar-menu' => __( 'Sidebar Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
