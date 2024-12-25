<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-single_news p-single">

    <div class="wrap_p-under_mv">
      <div class="config con-l pagettl">News</div>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">
      <h1><?php the_title(); ?></h1>
      <div class="time-share flex">
        <div class="time config con-l"><?php echo get_the_date(); ?></div>
        <div class="sns flex">
          <p>この記事をシェアする：</p>
          <div class="sns-box">
            <a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>"
              target="_blank" rel="nofollow noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_share_x.svg" alt="">
            </a>
            <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank"
              rel="nofollow noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_share_fb.svg" alt="">
            </a>
            <!-- <a href="http://getpocket.com/edit?url=<?php echo get_the_permalink();?>&title=<?php echo get_the_title(); ?>"
              target="_blank" rel="nofollow noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_share_b.svg" alt="">
            </a> -->
            <a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>"
              target="_blank" rel="nofollow noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_share_line.svg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="contents">
        <?php the_content(); ?>
      </div>
      <div class="btn-wrap">
        <a class="btn01" href="<?php echo home_url('/news'); ?>">
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
            <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
          </svg>
          一覧へ戻る
        </a>
      </div>
    </div>

  </div><!-- /.p-single_news -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>