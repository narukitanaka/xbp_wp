<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-contact">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l"><?php the_title(); ?></h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">

    <?php the_content(); ?>

    </div><!-- /.inner -->

  </div>

</main>
<?php get_footer(); ?>