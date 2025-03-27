var $ =  jQuery;
$(document).ready(function(){


    $('.toggle').click(function(){
        $('body').toggleClass('menu-open')
    });


    $(".menu-item-has-children").prepend('<span class="arrows"></span>');
        jQuery(document).ready(function ($) {
            $('.menu-item-has-children > .arrows').click(function (event) {
                event.stopPropagation(); // Prevent event bubbling
        
                var submenu = $(this).siblings('.sub-menu');
                var arrow = $(this); // The arrow element itself
        
                // Close only sibling submenus at the same level, but keep parent menus open
                $(this).parent().siblings().find('.sub-menu').slideUp();
                $(this).parent().siblings().find('.arrows').removeClass('active'); // Remove active class from other arrows
        
                // Toggle the clicked submenu
                submenu.slideToggle();
        
                // Toggle the active class on the arrow
                arrow.toggleClass('active');
            });
        
            // Prevent clicking inside sub-menu from closing parent menus
            $('.sub-menu').click(function (event) {
                event.stopPropagation();
            });
        });
        
});
