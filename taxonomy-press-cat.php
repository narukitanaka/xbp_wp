<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-archive_press p-archive">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Press Release</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>


    <div class="inner">

      <div class="cate-list flex">
        <a class="<?php echo (is_post_type_archive('press') || !is_tax('press-cat')) ? 'active' : ''; ?>" 
          href="<?php echo get_post_type_archive_link('press'); ?>">All</a>
        <?php
        $categories = get_terms(array(
          'taxonomy' => 'press-cat',
          'hide_empty' => true
        ));
        if ($categories && !is_wp_error($categories)) :
          foreach ($categories as $category) :
          $current_term = get_queried_object();
        ?>
          <a class="<?php echo (isset($current_term->term_id) && $current_term->term_id === $category->term_id) ? 'active' : ''; ?>" 
            href="<?php echo get_term_link($category); ?>">
            <?php echo $category->name; ?>
          </a>
        <?php
          endforeach;
          endif;
        ?>
        </div><!-- /.cate-list -->

      <div class="press-list flex staggerTriger">

        <?php

        $paged = get_query_var('paged', 1);
        $current_term = get_queried_object();

        $args = array(
          'post_type' => 'press',
          'posts_per_page' => 10,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'press-cat',
              'field' => 'term_id',
              'terms' => $current_term->term_id
            )
          )
        );
        $press_query = new WP_Query($args);

        if ($press_query->have_posts()) :
            while ($press_query->have_posts()) : $press_query->the_post();
        ?>

        <dl class="fadeInStagger">
          <a class="h-scale" href="<?php the_permalink(); ?>">
            <dt>
              <div class="img-box obj-fit">
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/press_dammy02.jpg" alt="">
                  <?php endif; ?>
              </div>
            </dt>
            <dd>
              <div class="cate">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'press-cat');
                  if ($terms && !is_wp_error($terms)) {
                    $category_names = array();
                    foreach ($terms as $term) {
                      $category_names[] = '#' . $term->name;
                    }
                    echo implode('　', $category_names); // 全角スペースで結合
                  }
                ?>
              </div>
              <p><?php the_title(); ?></p>
              <div class="time config con-l"><?php echo get_the_date(); ?></div>
            </dd>
          </a>
        </dl>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>

          <div class="coming-soon">
            <p>COMING SOON ...</p>
          </div>

        <?php endif; ?>
      </div><!-- /.press-list -->

      <?php if ($press_query->have_posts()) : ?>
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
      <?php endif; ?>

    </div>

  </div><!-- /.p-archive_news -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>