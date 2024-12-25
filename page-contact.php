<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-contact">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Contact</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">
      <p>※マークは必須項目です。</p>

      <div class="form-wrap">
        <?php echo do_shortcode('[contact-form-7 id="eab848b" title="お問い合わせフォーム"]'); ?>
      </div>

    </div><!-- /.inner -->

  </div><!-- /.p-conatct -->

</main>
<?php get_footer(); ?>