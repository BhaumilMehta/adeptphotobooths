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

    /*Home testimonials Slider */


    var $slider = jQuery(".video-testimonials-slider");

    $('.video-testimonials-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: $('.testimonials-arrow .prev'),
      nextArrow: $('.testimonials-arrow .next'),
      centerMode: true,
      centerPadding: '400px',
      responsive: [
        {
          breakpoint: 1600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '300px',
          }
        },
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '250px',
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '200px',
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '150px',
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '40px',
          }
        },
  
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  
    });
  
    progress($slider);
  
    function progress(sliders) {
      sliders.each(function () {
        var slider = jQuery(this);
        var $progressBar = slider
          .parentsUntil(".video-testimonials-slider")
          .find(".video-testimonials .progress");
  
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


  /*Header Sticky */

  $(window).on("scroll", function () {
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

  
  if ($('.inner-image-slider .image').length > 1) {
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
  }


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

  jQuery('.tab-list ul li').click(function () {
    var clickedElement = jQuery(this).index() + 1;
    jQuery('.tab-list-content > div').hide();
    jQuery('.tab-list-content > div:nth-child(' + clickedElement + ')').fadeIn();
    jQuery('.tab-list ul li').removeClass('active');
    jQuery(this).addClass('active');
  });

  $('.accordion_question').click(function () {
    $('.accordion_answer').slideUp();
    $('.accordion_box').removeClass('active');
    if ($(this).parent().find(".accordion_answer").is(":visible")) {
      $(this).parent().find(".accordion_answer").slideUp();
      $(this).parent('accordion_box').removeClass('active');
    }
    else {
      $(this).parent().find(".accordion_answer").slideDown();
      $(this).parent('.accordion_box').addClass('active');
    }
  });

  // Photo Booth Event Slider Section JS

  $(document).ready(function () {

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
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('.event-arrow .prev'),
        nextArrow: $('.event-arrow .next'),
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 500,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
        ]
      });

      function progress(sliders) {
        sliders.each(function () {
          var slider = jQuery(this);
          var $progressBar = slider
            .parentsUntil(".booth_slider .booth_row")
            .find(".booth .progress");

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


      var $slider = jQuery(".event_slider .booth_row");

      function progress(sliders) {
        sliders.each(function () {
          var slider = jQuery(this);
          var $progressBar = slider
            .parentsUntil(".event_slider .booth_row")
            .find(".event .progress");

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
  });



  $(document).ready(function () {
    $(".filter-container a").click(function (event) {
      event.preventDefault();
      $(".filter-container a").removeClass("active");
      $(this).addClass("active");
    });
  });


  $(".booth_event_heading_column").click(function () {
    $(".booth_event_heading").removeClass("active");
    $(this).find(".booth_event_heading").addClass("active");
    if ($(this).hasClass("left_column")) {
      $(".booth_slider").addClass("active").show();
      $(".event_slider").removeClass("active").hide();
    } else if ($(this).hasClass("right_column")) {
      $(".event_slider").addClass("active").show();
      $(".booth_slider").removeClass("active").hide();
    }
  });


  /* client-logo Slider */

  $('.client-logo-row').slick({
    speed: 10000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: false,
    cssEase: 'linear',
    slidesToShow: 1,
    draggable: false,
    focusOnSelect: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });

  $('.icon-and-text-row').slick({
    speed: 10000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: false,
    cssEase: 'linear',
    slidesToShow: 1,
    draggable: false,
    focusOnSelect: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });



  /*Team Slider */

  var $slider = jQuery(".team-post-wrap");

  $('.team-post-wrap').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.team_arrow .prev'),
    nextArrow: $('.team_arrow .next'),
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]

  });

  progress($slider);

  function progress(sliders) {
    sliders.each(function () {
      var slider = jQuery(this);
      var $progressBar = slider
        .parentsUntil(".team-post-wrap")
        .find(".team-post-section .progress");

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





  $('.gallery-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase: 'linear',
    infinite: true,
    arrows: false,
    dots: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      }
    ]
  });

  if ($('.testimonials-wrapper .testimonials-col').length > 3) {
    $('.testimonials-wrapper').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }


  jQuery('.location-map-wraper .location-icon span').hover(function () {
    var clickedElement = $(this).index() + 1;
    jQuery('.name-with-time-wrap > div').hide();
    jQuery('.name-with-time-wrap > div:nth-child(' + clickedElement + ')').show();

  });



        /*case Study Slider */

        $('.case-studies-wraper').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
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
      


        /*title-width-content-slider */
        var $slider = jQuery(".title-with-content-row");

        if ($('.title-with-content-row .title-with-content-iner').length > 4) {
          $('.title-with-content-row').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.title-with-content .prev'),
            nextArrow: $('.title-with-content .next'),
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
          });
        }
      
        progress($slider);

        function progress(sliders) {
          sliders.each(function () {
            var slider = jQuery(this);
            var $progressBar = slider
              .parentsUntil(".title-with-content-row")
              .find(".title-with-content-repeater .progress");
      
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


        /**Why hire photo booths Slider */

        var $slider = jQuery(".whyhire-photobooths-slider");

                /*title-width-content-slider */

                if ($('.whyhire-photobooths-slide').length > 3) {
                  $('.whyhire-photobooths-slider').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: true,
                    prevArrow: $('.whyhire-photobooths .prev'),
                    nextArrow: $('.whyhire-photobooths .next'),
                    responsive: [
                      {
                        breakpoint: 1400,
                        settings: {
                          slidesToShow: 3,
                          slidesToScroll: 1,
                        }
                      },
                      {
                        breakpoint: 1200,
                        settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                      },
                      {
                        breakpoint: 768,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                      }
                    ]
                  });
                }
              
                progress($slider);
        
                function progress(sliders) {
                  sliders.each(function () {
                    var slider = jQuery(this);
                    var $progressBar = slider
                      .parentsUntil(".whyhire-photobooths-slider")
                      .find(".whyhire-photobooths-section .progress");
              
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
        
        
  /*simple text slider */

    if ($('.simpletext_iner .simpletext_row_box').length > 2) {
      $('.simpletext_iner').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.simpletext_slider_width_btn .prev'),
        nextArrow: $('.simpletext_slider_width_btn .next'),
        centerMode: true,
        centerPadding: "25%",
        responsive: [
          {
            breakpoint: 1400,
            settings: {
              centerMode: true,
              centerPadding: "20%",
            }
          },
          {
            breakpoint: 1200,
            settings: {
              centerMode: true,
              centerPadding: "20%",
            }
          },
          {
            breakpoint: 768,
            settings: {
              centerMode: true,
              centerPadding: "15%",
            }
          }
        ]
      });
    }

      
      /* brand activation Slider*/
      if ($('.brand-activation-slider .booth_column').length > 2) {
        $('.brand-activation-slider .booth_row').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: $('.brand-activation-photo-booths .prev'),
          nextArrow: $('.brand-activation-photo-booths .next'),
        });
      }



      /*Event Photo Booths Slider */

      $('.title-with-event-photobooth-slider .booth_row').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });


      /*Fag and Slider js */
      

});

