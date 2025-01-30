<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-members">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Member</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="remodal" data-remodal-id="modal">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div class="modal-inner">
        <?php 
        // 最初のメンバー（デフォルト表示用）を取得
        $first_member = new WP_Query([
          'post_type' => 'member',
          'posts_per_page' => 1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ]);
        if ($first_member->have_posts()) : while ($first_member->have_posts()) : $first_member->the_post();
          $position = get_field('position');
          $name_en = get_field('name_en');
          $name_jp = get_field('name_jp');
          $sns_x = get_field('sns_x');
          $sns_facebook = get_field('sns_facebook');
          $sns_instagram = get_field('sns_instagram');
          $in_charge = get_field('in_charge');
          $area_label = get_field('area_label');
          $profile_text = get_field('profile_text');
        ?>

          <?php include(get_theme_file_path('/include/modal-member.php')); ?>

        <?php 
        endwhile; 
        wp_reset_postdata();
        endif; 
        ?>
      </div>
    </div>


    <section class="p-members_contents member">
      <div class="inner">

        <ul class="flex staggerTriger">
          <?php
            $args = array(
                'post_type' => 'member',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'member-cat',
                        'field'    => 'slug',
                        'terms'    => 'member'
                    )
                )
            );
            $member_query = new WP_Query($args);

            if ($member_query->have_posts()) :
              while ($member_query->have_posts()) : $member_query->the_post();
                // カスタムフィールドを取得（ACFを使用することを想定）
                $position = get_field('position');
                $name_en = get_field('name_en');
                $sns_x = get_field('sns_x');
                $sns_facebook = get_field('sns_facebook');
                $sns_instagram = get_field('sns_instagram');
          ?>

          <li class="fadeInStagger">
            <a href="#modal" data-member-id="<?php the_ID(); ?>">
              <div class="img-box obj-fit">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
              </div>
              <p class="position"><?php echo esc_html($position); ?></p>
              <p class="name">
                <?php the_title(); ?><br>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <!-- 英語はなし -->
                <?php } else { ?>
                  <span><?php echo esc_html($name_en); ?></span>
                <?php } ?>
              </p>
            </a>
          </li>

          <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </ul>

      </div><!-- /.inner -->
    </section><!-- /.p-members_contents -->

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Partner</h1>
    </div>

    <section class="p-members_contents partner">
      <div class="inner">

        <ul class="flex staggerTriger">
          <?php
            $args = array(
                'post_type' => 'member',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'member-cat',
                        'field'    => 'slug',
                        'terms'    => 'partner'
                    )
                )
            );
            $member_query = new WP_Query($args);

            if ($member_query->have_posts()) :
              while ($member_query->have_posts()) : $member_query->the_post();
                // カスタムフィールドを取得（ACFを使用することを想定）
                $position = get_field('position');
                $name_en = get_field('name_en');
                $sns_x = get_field('sns_x');
                $sns_facebook = get_field('sns_facebook');
                $sns_instagram = get_field('sns_instagram');
          ?>

          <li class="fadeInStagger">
            <a href="#modal" data-member-id="<?php the_ID(); ?>">
              <div class="img-box obj-fit">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
              </div>
              <p class="position"><?php echo esc_html($position); ?></p>
              <p class="name">
                <?php the_title(); ?><br>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <!-- 英語はなし -->
                <?php } else { ?>
                  <span><?php echo esc_html($name_en); ?></span>
                <?php } ?>
              </p>
            </a>
          </li>

          <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </ul>

      </div><!-- /.inner -->
    </section><!-- /.p-members_contents -->

  </div><!-- /.p-projects -->


  <div class="member_txtslider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/txt-slider_img01.svg" alt=""></div>
      </div>
      <div class="swiper-slide">
        <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/txt-slider_img01.svg" alt=""></div>
      </div>
    </div>
  </div>


  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>