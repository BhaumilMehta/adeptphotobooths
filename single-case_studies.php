<?php echo get_header();?>


<!--single-post-content start -->
<section class="single-post-content bg-black"><!-- Class add bg-black -->
     <div class="container">
          <div class="content-box">
              <div class="two_btn">
                  <a href="https://dddemo.net/wordpress/2025/adeptphotobooths/case_studies/" class="text_btn">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.293 11.2929L8.293 4.29292C8.4816 4.11076 8.7342 4.00997 8.9964 4.01224C9.2586 4.01452 9.50941 4.11969 9.69482 4.3051C9.88023 4.49051 9.98539 4.74132 9.98767 5.00352C9.98995 5.26571 9.88916 5.51832 9.707 5.70692L4.414 10.9999H22C22.2652 10.9999 22.5196 11.1053 22.7071 11.2928C22.8946 11.4803 23 11.7347 23 11.9999C23 12.2651 22.8946 12.5195 22.7071 12.707C22.5196 12.8946 22.2652 12.9999 22 12.9999H4.414L9.707 18.2929C9.80251 18.3852 9.87869 18.4955 9.9311 18.6175C9.98351 18.7395 10.0111 18.8707 10.0122 19.0035C10.0134 19.1363 9.9881 19.268 9.93782 19.3909C9.88754 19.5138 9.81329 19.6254 9.71939 19.7193C9.6255 19.8132 9.51385 19.8875 9.39095 19.9377C9.26806 19.988 9.13638 20.0133 9.0036 20.0122C8.87082 20.011 8.7396 19.9834 8.61759 19.931C8.49559 19.8786 8.38525 19.8024 8.293 19.7069L1.293 12.7069C1.10553 12.5194 1.00021 12.2651 1.00021 11.9999C1.00021 11.7348 1.10553 11.4804 1.293 11.2929Z" fill="white"/>
                   </svg>
                    All Case Studies
                </a>
                  <a href="#" class="defualt_btn border-cta">Celebrations</a>
              </div>
              <h2>The Perth Mint</h2>
              <h4>Congue ullamcorper ultricies arcu urna ut curabitur. Aliquam.</h4>
              <p>Sit quisque pharetra sit non lorem pulvinar tellus elit venenatis. Quis non dignissim non adipiscing nibh ipsum suscipit. Sit at et lorem venenatis urna vitae.</p>
          </div>
     </div>
</section>
<!--single-post-content End -->

<!--single-post-content start -->
<section class="single-post-content "><!-- Class add bg-black -->
     <div class="container">
          <div class="content-box">
              <div class="post-thumbnail">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'pull'); ?>" alt="">
              </div>
              <h2>The Challenge</h2>
              <p>Celebrate 125 years of The Perth Mint by providing engaging content and grow the clients email database. </p>
              <p>The Activation was required to be on location and operational for the entirety of the Perth Royal Show with over 440,000 in attendance over 8 consecutive days. </p>
          </div>
     </div>
</section>
<!--single-post-content End -->

<!--single-post-content start -->
<section class="single-post-content bg-black"><!-- Class add bg-black -->
     <div class="container">
          <div class="content-box">
              <h2>The Solution</h2>
              <p>To meet this challenge, we used AI Photo Booth technology with digital deliver via SMS and email. </p>
              <p>The AI Photo Booth took the user back in time by transforming them into characters from the early 1900’s. Black and white imagery added to the ‘olden days’ style with a mix of miners and other attire from the era for kids and adults alike to enjoy. </p>
              <p>To access their AI creations, the user were sent a customised SMS  or branded email with a link to a custom microsite which included an offer for discounted admission to The Perth Mint. </p>
              <div class="img-wraper">
                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/case-study-bg.png" alt="">
              </div>
          </div>
     </div>
</section>
<!--single-post-content End -->


<!--single-post-content start -->
<section class="single-post-content "><!-- Class add bg-black -->
     <div class="container">
          <div class="content-box">
              <h2>The Outcome</h2>
              <p>Nothing has the power to bring the imagination to life quite like an AI Photo Booth.Over the 8 days we took 3,673 photos.</p>
              <p>Through our analytics platform we were able to report to the client a number if key user statistics including male/female, age ranges, downloads, total numbers of views and time line of photo.</p>
              <p>This analytics platform was accessible in real time for the duration of the activation via a link to an online dashboard.</p>
              <p>Check out some of the before and after AI transformation images here:</p>
          </div>
     </div>
</section>
<!--single-post-content End -->

<?php  get_template_part('/template-parts/flex' , 'gallery-section');?>

<?php  get_template_part('/template-parts/flex' , 'testimonials-section');?>

<?php echo get_footer();?>