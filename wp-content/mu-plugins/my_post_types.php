<?php 

function my_post_types() {
    register_post_type('project', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Projects',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Prjojects',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true
    ));
}

add_action('init', 'my_post_types');

?>