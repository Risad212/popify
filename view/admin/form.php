
<?php include_once PY_PATH . '/includes/FormHandler.php'; ?>

<section class="popify">
    <div class="popify-form-wrap">
  <form class="popify-form" method="post" action="">

        <div class="popify-field">
          <label class="popify-label">Text</label>
          <input type="text" class="popify-input" name="popify_text" placeholder="Enter text" value="">
       </div>

    <div class="popify-field popify-field-row">
      <div>
        <label class="popify-label">Width (px)</label>
        <input type="number" class="popify-input" name="popify_width" placeholder="300">
      </div>

      <div>
        <label class="popify-label">Height (px)</label>
        <input type="number" class="popify-input" name="popify_height" placeholder="150">
      </div>
    </div>

    <div class="popify-field">
      <label class="popify-label">Text Color</label>
      <input type="color" class="popify-color" name="popify_text_color">
    </div>

    <div class="popify-field">
      <label class="popify-label">Font Size (px)</label>
      <input type="number" class="popify-input" name="popify_font_size" placeholder="16">
    </div>


     <?php wp_nonce_field('save_popup'); ?>
     <?php submit_button( __( 'Save', 'popify' ), 'primary', 'submit_form', false ); ?>

  </form>
  </div>

</section>
