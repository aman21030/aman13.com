;(function($) {
    "use strict";
    $(function() {
        var
        event = "ontouchend" in window ? "touchend" : "click",
        elmMove = $("#move-to-the-top");
        
        elmMove.on(event, function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500);
        });

        $(".widgettitle").on(event, function(e) {
            if ($(this).next().is(':hidden')) {
                $(this).next().stop().slideDown();
                // $(this).next().show();
              } else {
                $(this).next().stop().slideUp();
                // $(this).next().hide();
              }
        });
    });
})(jQuery);