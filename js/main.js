(function(window, $){
    var $doc = $(document);

    // Common functions
    var OE = {
        searchBox: function() {
            $doc.on('click', '[data-toggle-active]', function() {
                var $this = $(this),
                    selector = $this.attr('data-toggle-active'),
                    $selector = $(selector);

                $selector.toggleClass('active');
                var focus = $this.attr('data-focus');
                if(focus) {
                    $(focus).focus();
                }
            });
        },
        siteLoading: function() {
            var $loading = $('.loading-overlay');
            $('main').imagesLoaded(function() {
                $loading.removeClass('active');
            });
        },
        mobileMenu: function() {
            $doc.on('click', '.navbtn', function() {
                $('.oe-mobile-menu').slideToggle(300);
            });

            $('.oe-mobile-menu .menu-item-has-child').on('click', '> a', function(e) {
                e.preventDefault();
                var $this = $(this);
                $this.parent().toggleClass('active');
                $this.next('.submenu').slideToggle(300);
            });
        }
    };

    // Make it global
    window.OE = OE;
})(window, jQuery);

$(function() {
    OE.siteLoading();
    OE.searchBox();
    OE.mobileMenu();
});
