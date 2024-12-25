<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-archive_news p-archive">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">News</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>


    <div class="inner">

      <div class="news-list staggerTriger">

      <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <dl class="fadeInStagger">
          <a href="<?php the_permalink(); ?>">
            <dt class="config con-l"><?php echo get_the_date(); ?></dt>
            <dd><?php the_title(); ?></dd>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
              <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
            </svg>
          </a>
        </dl>

      <?php endwhile; endif; ?>

      </div><!-- /.news-list -->

      <?php
        the_posts_pagination(array(
            'mid_size' => 1,
            'end_size' => 1,
            'prev_text' => 'Prev',
            'next_text' => 'Next',
            'type' => 'list',
            'prev_next' => true,
            'before_page_number' => '',
            'after_page_number'  => '',
            'dots_text' => '...'
        ));
      ?>

    </div>

  </div><!-- /.p-archive_news -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>