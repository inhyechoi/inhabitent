
//search icon section

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
})(jQuery);