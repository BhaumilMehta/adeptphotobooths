
<section class="hero-section">
    <div class="video-wraper">
    <iframe id="youtube-video" width="560" height="315" 
        src="https://www.youtube.com/embed/S-J8APY7bRg?autoplay=1&mute=1&controls=0&rel=0&showinfo=0&loop=1&playlist=S-J8APY7bRg" 
        title="YouTube video player" frameborder="0" 
        allow="autoplay; encrypted-media" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
</iframe>


     <script>
     window.addEventListener("load", function () {
          let iframe = document.getElementById("youtube-video");
          let src = iframe.src;
          iframe.src = ""; // Temporarily clear src
          setTimeout(() => {
               iframe.src = src; // Reapply src after a short delay
          }, 500);
     });
     </script>
    </div>
      <div class="container">
          <div class="hero-banner-content">
               <h4>Australia’s <span>#1</span> Experiential Content Agency</h4>
               <h1>Connect<span>ing</span></h1>
               <h3>People. Brands. <span>Experiences.</span></h3>
          </div>
          <div class="hero_items_wraper">
               <div class="hero_item">
                    <a href="javascript:void(0)" class="hero_items_box">
                       <div class="hero_items_top">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-container.svg" alt="">
                       </div>
                       <div class="hero_items_bottom">
                            <div class="hero-content top-content">
                                <h5>Brand Activation Experts</h5>
                                <p>Innovative Solutions</p>
                            </div>
                           <div class="hero_img">
                               <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/brand-activation-experts.jpeg" alt="">
                               <div class="hero-content">
                                  <h5>Brand Activation Experts</h5>
                                  <p>Innovative Solutions</p>
                               </div>
                               <span class="hero_arrow">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/images/orang-arrow.svg" alt="">
                               </span>
                           </div>
                       </div>
                    </a>
               </div>
               <div class="hero_item">
                    <a href="javascript:void(0)" class="hero_items_box">
                       <div class="hero_items_top">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-container.svg" alt="">
                       </div>
                       <div class="hero_items_bottom">
                            <div class="hero-content top-content">
                                <h5>Fan-First Experiences</h5>
                                <p>Industry Experts</p>
                            </div>
                           <div class="hero_img">
                               <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/fan-first-experiences.jpeg" alt="">
                               <div class="hero-content">
                                  <h5>Fan-First Experiences</h5>
                                  <p>Industry Experts</p>
                               </div>
                               <span class="hero_arrow">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/images/orang-arrow.svg" alt="">
                               </span>
                           </div>
                       </div>
                    </a>
               </div>
               <div class="hero_item">
                    <a href="javascript:void(0)" class="hero_items_box">
                       <div class="hero_items_top">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-container.svg" alt="">
                       </div>
                       <div class="hero_items_bottom">
                            <div class="hero-content top-content">
                                <h5>Full Suite of Booth-Tech</h5>
                                <p>Client-Centric Approach</p>
                            </div>
                           <div class="hero_img">
                               <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/full-suite-of-boothtech.png" alt="">
                               <div class="hero-content">
                                  <h5>Full Suite of Booth-Tech</h5>
                                  <p>Client-Centric Approach</p>
                               </div>
                               <span class="hero_arrow">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/images/orang-arrow.svg" alt="">
                               </span>
                           </div>
                       </div>
                    </a>
               </div>
          </div>
      </div>
</section>