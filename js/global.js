$(function() {
    
    var header = $('.site-header');
    var logo = $('.site-logo');
    
    $(window).scroll(function() {
        if( $(this).scrollTop() > 400 ) {
            header.addClass('site-header-small');
            logo.addClass('site-logo-small');
        } else {
            header.removeClass('site-header-small');
            logo.removeClass('site-logo-small');
        }
    });
                     
});