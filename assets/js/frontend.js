
jQuery(window).on('load', function($){
    jQuery('#popify-popup').fadeIn();
    jQuery('.popify-popup-close, #popify-popup').on('click', function(e){
        if(e.target !== this) return;
        jQuery('#popify-popup').fadeOut();
    });
});


