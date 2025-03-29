<?php
   $banner_title = get_sub_field('banner_title');
   $banner_sub_title = get_sub_field('banner_sub_title');
   $banner_text = get_sub_field('banner_text');
   ?>
<section class="inner-banner-sec image-slider">
   <!--If the slider appears, add the class "image-slider", otherwise the class will not appear. -->
   <div class="container">
      <div class="inner-banner-text">
         <?php if(!empty($banner_title)){ echo '<h1>'.$banner_title.'</h1>'; }?>
         <?php if(!empty($banner_sub_title)){ echo '<h2 class="h4">'.$banner_sub_title.'</h4>'; }?>
         <?php echo wpautop( $banner_text );?> 
      </div>
      <div class="text-with-slider">
         <div class="wrapper">
            <div class="left-col">
               <div class="text">
                  <h2 class="h4">Connecting people from any location</h2>
                  <p>Looking for a flexible photo experience with the power to bring people together across multiple locations, at unlimited scale, with minimal effort?</p>
                  <p>Our Virtual Photo Booth might be the right photo booth for you.</p>
               </div>
            </div>
            <div class="right-col">
               <div class="inner-image-slider">
                  <div>
                     <div class="image">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/03/image-1.png" alt="Slide Image">
                     </div>
                  </div>
                  <div>
                     <div class="image">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/03/image-2.png" alt="Slide Image">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>