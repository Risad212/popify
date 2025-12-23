<?php

function popify_frontend_popup() {
  $popup_data = get_option( 'popify_option' );
  var_dump( $popup_data );
    ob_start();
    ?>
    <div id="popify-popup" class="popify-popup">
        <div class="popify-popup-content" style="width: <?php echo $popup_data['width'];?>px; <?php echo $popup_data['height'];?>px">
            <span class="popify-popup-close">&times;</span>
            <h2 style="font-size: <?php echo $popup_data['font_size']; ?>px; color:<?php echo $popup_data['text_color'];?>">
              <?php echo $popup_data['text']; ?>
            </h2>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode( 'popify_shortcode', 'popify_frontend_popup' );





