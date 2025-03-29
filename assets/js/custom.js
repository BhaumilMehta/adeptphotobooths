var $ = jQuery;
$(document).ready(function () {

  jQuery(".popup-youtube").magnificPopup({
    type: "iframe",
    iframe: {
        patterns: {
            youtube: {
                index: "youtube.com/",
                id: "v=",
                src: "https://www.youtube.com/embed/%id%?autoplay=1?rel=0",
            },
        },
    },
    callbacks: {
        open: function () {
            jQuery("body").addClass("overflow-hidden");
        },
        close: function () {
            jQuery("body").removeClass("overflow-hidden");
        },
    },
  });

  /*Header Sticky */

  $(window).on("scroll", function() {
    const currentScroll = $(this).scrollTop(); // Get the current scroll position
    const header = $(".site-header");
    const toggleClass = "is-sticky";
    
    if (currentScroll > 150) {
      header.addClass(toggleClass);
    } else {
      header.removeClass(toggleClass);
    }
  });


  
  $('.toggle').click(function () {
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


  jQuery(".hero_items_box").each(function () {
    let timeout, removeTimeout;

    jQuery(this).hover(
        function () {
            let $this = jQuery(this);
            timeout = setTimeout(function () {
                $this.addClass("active");

                // Remove the class automatically after 2 seconds
                removeTimeout = setTimeout(function () {
                    $this.removeClass("active");
                }, 1000);
            }, 500);
        },
        function () {
            clearTimeout(timeout);
            clearTimeout(removeTimeout);
            jQuery(this).removeClass("active");
        }
    );
});



// Convert IMG tag To SVG
jQuery(function () {
  jQuery(".svg-fill img").each(function () {
    var $img = jQuery(this);
    var attributes = $img.prop("attributes");
    var imgURL = $img.attr("src");

    jQuery.get(imgURL, function (data) {
      var $svg = jQuery(data).find("svg");
      $svg = $svg.removeAttr("xmlns:a");
      jQuery.each(attributes, function () {
        $svg.attr(this.name, this.value);
      });
      $img.replaceWith($svg);
    });
  });
});

jQuery(document).ready(function() {
  jQuery('.tab-list ul li').click(function() {
      var clickedElement = jQuery(this).index() + 1;
      jQuery('.tab-list-content > div').hide();
      jQuery('.tab-list-content > div:nth-child(' + clickedElement + ')').fadeIn();
      jQuery('.tab-list ul li').removeClass('active');
      jQuery(this).addClass('active'); 
  });
});

// Photo Booth Event Slider Section JS

var $slider = jQuery(".booth_slider .booth_row, .event_slider .booth_row");

if ($slider.length) {
  let currentSlide;
  let slidesCount;
  let sliderCounter = document.createElement("div");

  $slider.slick({
    dots: false,
    arrows: true,
    // autoplay: true,
    autoplaySpeed: 3000,
    pauseOnFocus: false,
    pauseOnHover: false,
    cssEase: "linear",
    variableWidth: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });

  function progress(sliders) {
    sliders.each(function () {
      var slider = jQuery(this);
      var $progressBar = slider
        .parentsUntil(".booth_slider .booth_row, .event_slider .booth_row")
        .find(".progress");

      slider.on(
        "beforeChange",
        function (event, slick, currentSlide, nextSlide) {
          var calc = ((nextSlide + 1) / slick.slideCount) * 100;
          $progressBar.css("background-size", calc + "% 100%");
        }
      );
    });
  }

  progress($slider);
}

$(document).ready(function() {
  $(".filter-container a").click(function(event) {
      event.preventDefault(); // Prevent default anchor behavior

      // Pela badha anchor tags mathi active class remove kari do
      $(".filter-container a").removeClass("active");

      // Click thayela anchor tag upar active class add karo
      $(this).addClass("active");
  });
});


  $(".booth_event_heading_column").click(function() {
      // Pela badha column mathi active class remove kari do
      $(".booth_event_heading").removeClass("active");

      // Jya click thayu che, ena andar je .booth_event_heading che ena upar active class add karo
      $(this).find(".booth_event_heading").addClass("active");

      // Booth ane Event slider toggle karva
      if ($(this).hasClass("left_column")) {
          $(".booth_slider").addClass("active").show();
          $(".event_slider").removeClass("active").hide();
      } else if ($(this).hasClass("right_column")) {
          $(".event_slider").addClass("active").show();
          $(".booth_slider").removeClass("active").hide();
      }
  });

$('.client-logo-row').slick({
  speed: 10000,
  autoplay: true,
  autoplaySpeed: 0,
  centerMode: false,
  cssEase: 'linear',
  slidesToShow: 1,
  draggable:false,
  focusOnSelect:false,
  pauseOnFocus:false,
  pauseOnHover:false,
  slidesToScroll: 1,
  variableWidth: true,
  infinite: true,
  initialSlide: 1,
  arrows: false,
  buttons: false
});



});