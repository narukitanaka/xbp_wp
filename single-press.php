<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-single_press p-single">

    <div class="wrap_p-under_mv">
      <h1><?php the_title(); ?></h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">
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
            <a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>"
              target="_blank" rel="nofollow noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_share_line.svg" alt="">
            </a>
          </div>
        </div>
      </div>

      <div class="cate-list flex">
        <?php
          $terms = get_the_terms(get_the_ID(), 'press-cat');
          if ($terms && !is_wp_error($terms)) :
          foreach ($terms as $term) :
        ?>
          <a href="<?php echo get_term_link($term); ?>"># <?php echo $term->name; ?></a>
        <?php
          endforeach;
          endif;
        ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="eye-catch img-box obj-fit">
          <?php the_post_thumbnail('full'); ?>
        </div>
      <?php endif; ?>
      
      <div class="contents">
        <?php the_content(); ?>
      </div><!-- /.contents -->

      <div class="press-single_nav">

        <?php
          // 前後の記事を取得
          $prev_post = get_previous_post();
          $next_post = get_next_post();
        ?>

        <div class="btn-wrap">
          <a class="btn01" href="<?php echo home_url('/press'); ?>">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
              <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
            </svg>
            一覧へ戻る
          </a>
        </div>

        <?php if ($prev_post) : ?>
          <div class="link-prev">
            <a href="<?php echo get_permalink($prev_post->ID); ?>">
              <div class="img-box obj-fit">
                <?php if (has_post_thumbnail($prev_post->ID)) : ?>
                  <?php echo get_the_post_thumbnail($prev_post->ID); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
                <?php endif; ?>
              </div>
              <div class="arrow-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/single-press_prev.svg" alt="">
              </div>
            </a>
          </div>
        <?php endif; ?>

        <?php if ($next_post) : ?>
          <div class="link-next">
            <a href="<?php echo get_permalink($next_post->ID); ?>">
              <div class="img-box obj-fit">
                <?php if (has_post_thumbnail($next_post->ID)) : ?>
                  <?php echo get_the_post_thumbnail($next_post->ID); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
                <?php endif; ?>
              </div>
              <div class="arrow-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/single-press_next.svg" alt="">
              </div>
            </a>
          </div>
        <?php endif; ?>

      </div>
    </div>

  </div><!-- /.p-single_press -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>