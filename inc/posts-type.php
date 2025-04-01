<?php
function create_case_studies_post_type() {

    $post_types = array(
        'team' => array(
            'name' => 'Team Members',
            'singular' => 'Team Member',
            'menu_icon' => 'dashicons-groups',
            'slug' => 'team'
        ),
        'case_studies' => array(
            'name' => 'Case Studies',
            'singular' => 'Case Studie',
            'menu_icon' => 'dashicons-portfolio',
            'slug' => 'case_studies'
        ),
        'photo_booths' => array(
            'name' => 'Services/Photo Booths',
            'singular' => 'Services/Photo Booth',
            'menu_icon' => 'dashicons-camera',
            'slug' => 'photo-booth'
        ),
        'experience_event' => array(
            'name' => 'Experiences & Events',
            'singular' => 'Experiences & Event',
            'menu_icon' => 'dashicons-calendar-alt',
            'slug' => 'experience-event'
        ),
        'client_logos' => array(
            'name' => 'Client Logos',
            'singular' => 'Client Logo',
            'menu_icon' => 'dashicons-format-image',
            'slug' => 'client-logos'
        ),
        'faqs' => array(
            'name' => 'FAQs',
            'singular' => 'FAQ',
            'menu_icon' => 'dashicons-editor-help',
            'slug' => 'faq'
        ),
        'testimonials' => array(
            'name' => 'Testimonials',
            'singular' => 'Testimonial',
            'menu_icon' => 'dashicons-testimonial',
            'slug' => 'testimonials'
        )
    );

    foreach ($post_types as $key => $type) {
        $labels = array(
            'name'               => _x($type['name'], 'post type general name', 'adeptphotobooths'),
            'singular_name'      => _x($type['singular'], 'post type singular name', 'adeptphotobooths'),
            'menu_name'          => __($type['name'], 'adeptphotobooths'),
            'name_admin_bar'     => __($type['singular'], 'adeptphotobooths'),
            'add_new'            => __('Add New', 'adeptphotobooths'),
            'add_new_item'       => __('Add New ' . $type['singular'], 'adeptphotobooths'),
            'new_item'           => __('New ' . $type['singular'], 'adeptphotobooths'),
            'edit_item'          => __('Edit ' . $type['singular'], 'adeptphotobooths'),
            'view_item'          => __('View ' . $type['singular'], 'adeptphotobooths'),
            'all_items'          => __('All ' . $type['name'], 'adeptphotobooths'),
            'search_items'       => __('Search ' . $type['name'], 'adeptphotobooths'),
            'not_found'          => __('No ' . strtolower($type['name']) . ' found.', 'adeptphotobooths'),
            'not_found_in_trash' => __('No ' . strtolower($type['name']) . ' found in Trash.', 'adeptphotobooths')
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => $type['slug']),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'menu_icon'          => $type['menu_icon'],
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'show_in_rest'       => true,
        );
        
        register_post_type($key, $args);
    }
}
add_action('init', 'create_case_studies_post_type');
