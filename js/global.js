$(function() {
    
    var header = $('.site-header');
    var logo = $('.site-logo');
    
    $(window).scroll(function() {
        if( $(this).scrollTop() > 600 ) {
            header.addClass('site-header-small');
            logo.addClass('site-logo-small');
        } else {
            header.removeClass('site-header-small');
            logo.removeClass('site-logo-small');
        }
    });
                     
});

//Contact form popup
jQuery(document).ready(function ($) {
     $('#open-contact-popup').magnificPopup({
        items: [
          {
            src: '#contact-popup', // CSS selector of an element on page that should be used as a popup
            type: 'inline'
          }
        ],
        gallery: {
          enabled: true
        },
        type: 'image' // this is a default type
    });
});