jQuery(document).ready(function($){
    $('.popify-input[type="number"]').on('input', function() {
        var value = parseInt($(this).val(), 10);
        if (value < 0 || isNaN(value)) {
            $(this).val(0);
        }
    });
});
