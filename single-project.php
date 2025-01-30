<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-projects ip-revit">
    <div class="wrap_p-under_mv">
      <h1 class="config con-l">XBP Projects</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
      <nav>
        <ul class="flex">
          <?php
          $args = array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
          );
          $projects = new WP_Query($args);
          if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
            // 現在のページのスラッグを取得
            $current_slug = $post->post_name;
            // 現在表示中のページかどうかをチェック
            $is_active = (get_queried_object_id() === get_the_ID()) ? ' class="active"' : '';
          ?>
            <li>
              <a href="<?php the_permalink(); ?>"<?php echo $is_active; ?>><?php the_title(); ?></a>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul>
      </nav>
    </div>

    <?php
    while (have_posts()) : the_post();
      // ACFフィールドから値を取得
      $project_number = get_field('project_number');
      $project_title_en = get_field('project_title_en');
      $project_subtitle = get_field('projrct_subtitle');
      $project_description = get_field('project_description');
    ?>

    <section class="p-projects_contents">
      <div class="inner-wide">
        <div class="img-box project_mv obj-fit">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="inner">
          <div class="ttl">
            <p class="config"><?php echo esc_html($project_number); ?><span></span><?php echo esc_html($project_title_en); ?></p>
            <h2 class="anona"><?php the_title(); ?></h2>
          </div>
          <div class="postcont">
            <h3><?php echo esc_html($project_subtitle); ?></h3>
            <p class="first-txt">
              <?php echo nl2br(esc_html($project_description)); ?>
            </p>
            <div class="edit-contents">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.p-projects_contents -->

    <?php endwhile; ?>

    <?php
    // 関連するプレスリリースを取得
    $related_press = get_field('related_press');
    if ($related_press) : ?>

    <div class="p-projecrts_press">
      <div class="ttl">
        <h2 class="config con-th">Press Release</h2>
        <a class="btn02" href="<?php echo home_url('/press'); ?>">
          View All
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
            <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
          </svg>
        </a>
      </div><!-- /.ttl -->
      <div class="p-projects_swiper">
        <div class="swiper-wrapper">

        <?php foreach ($related_press as $press) :
          // プレスリリースのカテゴリーを取得
          $categories = get_the_terms($press->ID, 'press-cat');
          $category_name = '';
          if ($categories && !is_wp_error($categories)) {
            $category_name = $categories[0]->name;
          }
        ?>

          <div class="swiper-slide">
            <a class="h-scale" href="<?php echo get_permalink($press->ID); ?>">
              <div class="img-box obj-fit">
                <?php if (has_post_thumbnail($press->ID)) : ?>
                  <?php echo get_the_post_thumbnail($press->ID, 'full'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
                <?php endif; ?>
              </div>
              <div class="contents">
                <div class="cate">
                  <?php 
                  $categories = get_the_terms($press->ID, 'press-cat');
                  if ($categories && !is_wp_error($categories)) {
                    $category_names = array();
                    foreach ($categories as $category) {
                      $category_names[] = '#' . esc_html($category->name);
                    }
                    echo implode('　', $category_names); // 全角スペースで区切る
                  }
                  ?>
                </div>
                <p><?php echo get_the_title($press->ID); ?></p>
                <div class="time config con-l"><?php echo get_the_date('Y.m.d', $press->ID); ?></div>
              </div>
            </a>
          </div>

        <?php endforeach; ?>

        </div>
      </div><!-- /.p-projects_swiper -->
    </div><!-- /.p-projecrts_press -->

    <?php endif; ?>

  </div><!-- /.p-projects -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>