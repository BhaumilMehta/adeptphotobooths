var $ =  jQuery;
$(document).ready(function(){


    $('.toggle').click(function(){
        $('body').toggleClass('menu-open')
    });


    $(".menu-item-has-children").prepend('<span class="arrows"></span>');
        jQuery(document).ready(function ($) {
            $('.menu-item-has-children > .arrows').click(function (event) {
                event.stopPropagation();
                var submenu = $(this).siblings('.sub-menu');
                var arrow = $(this); 
                $(this).parent().siblings().find('.sub-menu').slideUp();
                $(this).parent().siblings().find('.arrows').removeClass('active'); 
                submenu.slideToggle();
                arrow.toggleClass('active');
            });
            $('.sub-menu').click(function (event) {
                event.stopPropagation();
            });
        });
        
        $('.inner-image-slider').slick({
            slidesToShow: 1,  
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false, 
            arrows: true,
            prevArrow: `<button type="button" class="slick-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
              <path d="M10 17.5L2 9.5M2 9.5L10 1.5M2 9.5H10H18" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>`,
            nextArrow: `<button type="button" class="slick-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
              <path d="M10 17.5L18 9.5M18 9.5L10 1.5M18 9.5H10H2" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>` 
        });
});
