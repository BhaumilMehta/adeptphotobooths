<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adeptphotobooths
 */

get_header();
$blog_count = wp_count_posts('post')->publish;
global $wp_query;
$total_posts = $wp_query->found_posts; 
?>


<!-- inner-banner-sec start --->
<section class="inner-banner-sec">
   <!--If the slider appears, add the class "image-slider", otherwise the class will not appear. -->
   <div class="container">
      <div class="inner-banner-text">
         <h1><?php _e('Blog' , 'adeptphotobooths'); ?></h1>                   
      </div>
   </div>
</section>
<!-- inner-banner-sec End --->

<!--blog-post-section Start -->
<section class="blog-post-section">
    <div class="container">
            <div class="list-with-search-btn">
                  <div class="list"><span><?php echo $total_posts; ?></span><?php _e('Blogs' , 'adeptphotobooths'); ?></div>
                  <div class="seacrh-btn">
                        <form class="example" action="" id="searchform">
                              <input type="text" name="blog_search" placeholder="Search articles" name="search" value="<?php echo isset($_GET['blog_search'])? $_GET['blog_search']:''; ?>">
                        </form>
                  </div>
            </div>
            <div class="blog-post-list">
                  <div id="blog-loader" style="display: none;">
                        <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." />
                  </div>
                  <?php if(have_posts()){ ?>
                  
                        <?php while(have_posts()){ the_post();
                              ?>
                              <div class="blog-post-iner">
                                    <a href="<?php the_permalink(); ?>" class="blog-post-box">
                                    <div class="blog-items">
                                          <?php 
                                          if (has_post_thumbnail()) {
                                                the_post_thumbnail('full'); 
                                          } else { ?>
                                                <img src="https://via.placeholder.com/600x400" alt="<?php the_title_attribute(); ?>">
                                          <?php } ?>
                                    </div>
                                    <div class="blog-content">
                                          <h4><?php the_title(); ?></h4>
                                          <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                          <div class="defualt_btn"><?php _e('Read Article' , 'adeptphotobooths'); ?></div>
                                    </div>
                                    </a>
                              </div>
                        <?php } ?>
                  
                  <?php }else{

                        echo '<p>Post Not found</p>';

                  } ?>
            </div>
            <div class="pagination">
                  <?php
                  global $wp_query;

                  echo paginate_links(array(
                        'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $wp_query->max_num_pages,
                        'prev_text' => '<img src="'.get_template_directory_uri('').'/assets/images/slick-left-yello.svg" alt="Previous">',
                        'next_text' => '<img src="'.get_template_directory_uri('').'/assets/images/slick-right-yellow.svg" alt="Next">',
                        'mid_size'  => 3,
                    ));
                  ?>
            </div>
    </div>
</section>
<!--blog-post-section End -->

<?php
get_footer();
