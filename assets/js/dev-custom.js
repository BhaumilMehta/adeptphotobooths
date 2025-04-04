$ = jQuery;

jQuery(document).ready(function($) {

    let typingTimer;
    let doneTypingInterval = 500;

    $(document).on('input', 'input[name="blog_search"], input[name="faq_search"]', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(() => {
            $(this).closest('form').trigger('submit');
        }, doneTypingInterval);
    });
    
    

    function showLoader() {
        $('#blog-loader').css('display' , 'flex');
    }

    function hideLoader() {
        $('#blog-loader').hide();
    }

    $(document).on('submit', '#searchform', function(e) {
        e.preventDefault();

        var searchQuery = $('input[name="blog_search"]').val();
        var currentAction = $(this).attr('action');
        var newURL = currentAction + '?blog_search=' + encodeURIComponent(searchQuery);

        window.history.pushState({href: newURL}, '', newURL);

        showLoader();

        $.ajax({
            url: newURL,
            type: 'GET',
            success: function(response) {
                console.log("Full Response:", response);
    
                let blogListing = $(response).find('.blog-post-list').html();
                let pagination  = $(response).find('.pagination').html();
    
                if (blogListing !== undefined) {
                    $('.blog-post-list').html(blogListing);
                } else {
                    console.error("Error: .blog-post-list not found in response.");
                }
    
                if (pagination !== undefined) {
                    $('.pagination').html(pagination);
                }

                hideLoader(); // Hide loader after success
            },
            error: function(error) {
                console.error('Error fetching search results:', error);
                hideLoader(); // Hide loader on error
            }
        });
    });

    // Pagination Click Event
    $(document).on('click', '.blog-post-section .pagination a.page-numbers', function(e) {
        e.preventDefault();

        var nextPageURL = $(this).attr('href');

        window.history.pushState({href: nextPageURL}, '', nextPageURL);

        showLoader();

        $.ajax({
            url: nextPageURL,
            type: 'GET',
            success: function(response) {
                let blogListing = $(response).find('.blog-post-list').html();
                console.log(blogListing);
                let pagination  = $(response).find('.pagination').html();
                $('.blog-post-list').html(blogListing);
                $('.pagination').html(pagination);

                $('html, body').animate({
                    scrollTop: $('.list-with-search-btn').offset().top
                }, 500);

                hideLoader(); // Hide loader after success
            },
            error: function(error) {
                console.error('Error fetching page:', error);
                hideLoader(); // Hide loader on error
            }
        });
    });


    $(document).on('submit', '#faq_form', function(e) {
        e.preventDefault();

        var searchQuery = $('input[name="faq_search"]').val();
        var ajaxURL = ajax_object.ajax_url+'?action=faq_search&faq_search=' + encodeURIComponent(searchQuery);

        showLoader();

        $.ajax({
            url:ajaxURL ,
            type: 'GET',
            success: function(response) {
                console.log(response);
                
                $('.accordion').html(response);
                var accordion_box = $('.accordion_box').length;

                $('div.list span').text(accordion_box);
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
                hideLoader();
            },
            error: function(error) {
                console.error('Error fetching FAQs:', error);
                hideLoader();
            }
        });
    });

    // Archive Photo Booth page js

    $(document).on('click', '.photo-booths-filter a', function(e) {
        e.preventDefault();

        var filterURL = $(this).attr('data-catname');
        console.log(filterURL);
        
            var newURL = '?category=' + encodeURIComponent(filterURL);
            console.log(newURL);
            

            window.history.pushState({href: newURL}, '', newURL);

        showLoader(); // Show loader before fetching results

        $.ajax({
            url: newURL,
            type: 'GET',
            success: function(response) {

                let blogListing = $(response).find('.booth_row').html();
                let pagination  = $(response).find('.pagination').html();

                if (blogListing !== undefined) {
                    $('.booth_row').html(blogListing);
                }

                if (pagination !== undefined) {
                    $('.pagination').html(pagination);
                }

                hideLoader(); // Hide loader after success
            },
            error: function(error) {
                console.error('Error fetching filtered results:', error);
                hideLoader(); // Hide loader on error
            }
        });
    });
    // Pagination Click Event Photo Booth
    $(document).on('click', '.archive-photo-booths-section .pagination a.page-numbers', function(e) {
        e.preventDefault();

        var nextPageURL = $(this).attr('href');

        window.history.pushState({href: nextPageURL}, '', nextPageURL);

        showLoader();

        $.ajax({
            url: nextPageURL,
            type: 'GET',
            success: function(response) {
                let blogListing = $(response).find('.booth_row').html();
                let pagination  = $(response).find('.pagination').html();
                $('.booth_row').html(blogListing);
                $('.pagination').html(pagination);

                hideLoader(); // Hide loader after success
            },
            error: function(error) {
                console.error('Error fetching page:', error);
                hideLoader(); // Hide loader on error
            }
        });
    });

});



