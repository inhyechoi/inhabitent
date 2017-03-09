(function($){
//do something when the icon button is clicked
    $('.fa-search').on('click', function(event){
        event.preventDefault();
        $('.search-field').toggleClass('searchAppear');
        $('.search-field').focus();    
    });
    $( '.search-field' ).blur(function() {
        $( '.fa-search' ).click();
    });

    var bannerHeight = $('.hero-banner').height();
    $(window).on('scroll', function() {
        if($(this).scrollTop() > bannerHeight) {
            $('#site-navigation').addClass('active');
        } else {
            //remove the background property so it comes transparent again (defined in your css)
        $('#site-navigation').removeClass('active');
        }
    });
})(jQuery);

