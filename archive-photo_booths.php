<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adeptphotobooths
 */

get_header();
?>


<!--inner-banner-sec Start -->
<section class="inner-banner-sec">
   <!--If the slider appears, add the class "image-slider", otherwise the class will not appear. -->
   <div class="container">
      <div class="inner-banner-text">
         <h1>Photo Booths</h1>                   
      </div>
   </div>
</section>
<!-- inner-banner-sec End -->

<!--archive-photo-booths-section start -->
<section class="archive-photo-booths-section">
     <div class="container">
          <div class="photo-booths-filter">
               <a href="#">
                 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/04/target.svg" alt="">
                    All Booths
                </a>
               <a href="#">
                  <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/04/print.svg" alt="">
                  Print Booths
                </a>
               <a href="#">
                 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/04/layer.svg" alt="">
                  Digital Booths
               </a>
          </div>

          <div class="booth_row">
             <div class="booth_column">
                <a href="javascript:void(0);" class="booth_slide_box" role="button" aria-label="Explore School or University Photo Booth">
                    <div class="booth_slide_img">
                        <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/themes/adeptphotobooths/assets/images/booth-slide-1.png" alt="Photo booth slide for School or University event">
                        <div class="booth_slide_btn explore_btn">
                            <span class="defualt_btn">Explore</span>
                        </div>
                    </div>
                    <div class="booth_slide_title">
                        <h4>School / University</h4>
                    </div>
                </a>
             </div>

             <div class="booth_column">
                <a href="javascript:void(0);" class="booth_slide_box" role="button" aria-label="Explore School or University Photo Booth">
                    <div class="booth_slide_img">
                        <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/themes/adeptphotobooths/assets/images/booth-slide-2.png" alt="Photo booth slide for Launch Events">
                        <div class="booth_slide_btn explore_btn">
                            <span class="defualt_btn">Explore</span>
                        </div>
                    </div>
                    <div class="booth_slide_title">
                        <h4>Launch Events</h4>
                    </div>
                </a>
             </div>

             <div class="booth_column">
                <a href="javascript:void(0);" class="booth_slide_box" role="button" aria-label="Explore School or University Photo Booth">
                    <div class="booth_slide_img">
                        <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/themes/adeptphotobooths/assets/images/booth-slide-3.png" alt="Photo booth slide for Game Day">
                        <div class="booth_slide_btn explore_btn">
                            <span class="defualt_btn">Explore</span>
                        </div>
                    </div>
                    <div class="booth_slide_title">
                        <h4>Game Day</h4>
                    </div>
                </a>
             </div>

             <div class="booth_column">
                <a href="javascript:void(0);" class="booth_slide_box" role="button" aria-label="Explore School or University Photo Booth">
                    <div class="booth_slide_img">
                        <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/themes/adeptphotobooths/assets/images/booth-slide-4.png" alt="Photo booth slide for Celebrations">
                        <div class="booth_slide_btn explore_btn">
                            <span class="defualt_btn">Explore</span>
                        </div>
                    </div>
                    <div class="booth_slide_title">
                        <h4>Celebrations</h4>
                    </div>
                </a>
             </div>

            <div class="booth_column">
                <a href="javascript:void(0);" class="booth_slide_box" role="button" aria-label="Explore School or University Photo Booth">
                    <div class="booth_slide_img">
                        <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/themes/adeptphotobooths/assets/images/booth-slide-5.png" alt="Photo booth slide for Gala">
                        <div class="booth_slide_btn explore_btn">
                            <span class="defualt_btn">Explore</span>
                        </div>
                    </div>
                    <div class="booth_slide_title">
                        <h4>Gala</h4>
                    </div>
                </a>
            </div>
        </div>

     </div>
</section>
<!--archive-photo-booths-section end -->

<?php
get_footer();
