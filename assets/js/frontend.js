
jQuery(window).on('load', function($){
    jQuery('#popify-popup').fadeIn();
    jQuery('.popify-popup-close, #popify-popup').on('click', function(e){
        jQuery('#popify-popup').fadeOut();
    });
});



