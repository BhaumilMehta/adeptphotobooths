<?php 

function tap_to_email_callback() { 
    $email = get_field('email', 'option'); 
    if( !empty($email) ){
        return $email ;
    }
}
add_shortcode( 'tap-to-email', 'tap_to_email_callback' );

function tap_to_telephone_callback() { 
    $telephone = get_field('phone_number', 'option'); 
    if( !empty($telephone) ){
        return $telephone;
    }
}
add_shortcode( 'tap-to-telephone', 'tap_to_telephone_callback' );


function social_icons_header_callback() { 

    $social_media_repeater           = get_field('social_media_repeater','option');
    $output = "";

    foreach ($social_media_repeater as $social_media) {
        $logo_image = $social_media['logo_image'];
        $url = $social_media['url'];
        
        $output .= '<a href="' . esc_url($url['url']) . '">';
        $output .= wp_get_attachment_image($logo_image['id'], 'full', false, array('alt' => esc_attr($logo_image['alt'])));
        $output .= '</a>';
    }

    return $output;

}
add_shortcode( 'social-icons-header', 'social_icons_header_callback' );