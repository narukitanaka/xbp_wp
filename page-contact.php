<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-contact">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Contact Us</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">

      <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
        <div class="first-text">
          <p>Please kindly complete the form below and click the "Submit" button to submit your inquiry. We will respond to your inquiry within a few business days.</p>
          <p>We welcome inquiries regarding the distribution and licensing of completed films and TV series. Please note that we are not currently accepting unsolicited proposals for projects in development.</p>
          <p>We also offer a prestigious film award. For more information, please visit the <a href="https://x-border.jp/" target="_blank">X Border Media Festival website</a></p>
          <p>※mark is a required field.</p>
        </div>
        <div class="form-wrap">
          <?php echo do_shortcode('[contact-form-7 id="5b701b0" title="お問い合わせフォーム（英語）"]'); ?>
        </div>
      <?php } else { ?>
        <div class="first-text">
          <p>※マークは必須項目です。</p>
        </div>
        <div class="form-wrap">
          <?php echo do_shortcode('[contact-form-7 id="eab848b" title="お問い合わせフォーム"]'); ?>
        </div>
      <?php } ?>

    </div><!-- /.inner -->

  </div><!-- /.p-conatct -->

</main>
<?php get_footer(); ?>