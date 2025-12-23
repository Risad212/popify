<?php  
  add_action('wp_footer', 'popify_frontend_popup');


  function popify_frontend_popup() { ?>
   <div id="popify-popup" class="popify-popup">
    <div class="popify-popup-content">
      <span class="popify-popup-close">&times;</span>
      <h2>Popify Text Preview</h2>
    </div>
  </div>

  <?php
  }
 ?>




